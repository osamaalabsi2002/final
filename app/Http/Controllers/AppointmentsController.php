<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentsController extends Controller
{
    public function index()
    {
        // Redirect to login if the user is not authenticated
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to view appointments.');
        }

        // Get the authenticated user's ID
        $userId = Auth::id();
        $appointments = Appointment::where('user_id', $userId)->get();

        return view('/booking', compact('appointments'));
    }

    // Show available booking slots for a barber (employee) for the next 7 days
    public function booking($employeeId)
    {
        // Retrieve the employee based on the ID
        $employee = Employee::findOrFail($employeeId);
        $weekDays = collect();

        // Loop through the next 7 days to generate available time slots
        for ($i = 1; $i <= 7; $i++) {
            $date = now()->addDays($i)->format('Y-m-d');

            // Fetch appointments for this date and employee where status is 'booked'
            $appointments = Appointment::where('employee_id', $employeeId)
                ->whereDate('appointment_date', $date)
                ->where('status', 'booked')  // Only consider booked appointments
                ->pluck('start_time')  // Get the start time
                ->toArray();


            $timeSlots = ['09:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '01:00 PM', '02:00 PM', '03:00 PM'];
            $availableTimeSlots = [];

            foreach ($timeSlots as $timeSlot) {
                $formattedTimeSlot = date("H:i:s", strtotime($timeSlot)); // Convert to 24-hour format

                // Check if this time slot is booked
                $availableTimeSlots[] = [
                    'time' => $timeSlot,
                    'is_booked' => in_array($formattedTimeSlot, $appointments) // Mark as booked if exists
                ];
            }

            // Add day and time slots
            $weekDays->add([
                'day' => now()->addDays($i)->format('d'),
                'month' => now()->addDays($i)->format('m'),
                'year' => now()->addDays($i)->format('Y'),
                'timeSlots' => $availableTimeSlots,
            ]);
        }

        return view('booking', compact('employee', 'weekDays'));
    }

    // Store the appointment in the database
    public function store(Request $request)
    {
        // Check if user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to book an appointment.');
        }
    
        // Validate the input fields
        $request->validate([
            'appointment_date' => 'required|date',
            'start_time' => 'required',
            'employee_id' => 'required|exists:employees,id',
            'total_price' => 'required|numeric|min:0', // Ensure total price is present
        ]);
    
        try {
            // Convert start_time to 24-hour format (MySQL DATETIME compatible)
            $startTime = date("H:i:s", strtotime($request->start_time));
    
            // Get the appointment_date from the form
            $appointmentDate = $request->input('appointment_date');
    
            // Check if the slot is already booked
            $existingAppointment = Appointment::where('employee_id', $request->employee_id)
                ->where('appointment_date', $appointmentDate)
                ->where('start_time', $startTime)
                ->where('status', 'booked')
                ->first();
    
            if ($existingAppointment) {
                return redirect()->back()->with('error', 'This time slot is already booked.');
            }
    
            // If slot is available, create a new appointment
            $appointment = new Appointment();
            $appointment->user_id = Auth::id();
            $appointment->start_time = $startTime;
            $appointment->employee_id = $request->input('employee_id');
            $appointment->appointment_date = $appointmentDate;
            $appointment->status = 'booked';
            $appointment->total_price = $request->input('total_price');
            $appointment->save();
    
            return redirect()->back()->with('success', 'Appointment successfully booked.');
    
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating appointment: ' . $e->getMessage());
        }
    }
    

    
}    