<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Service; // Assuming you have a Service model for the available services
use App\Models\ServicesBooked; // Assuming you have a Service model for the available services
use App\Models\Appointment; // Assuming an Appointment model exists

class ServicesBookedController extends Controller
{
    // Display the booking form
    public function create()
    {
        // Fetch services to show in the booking form
        $services = Service::all();
        // Fetch appointments to select for booking
        $appointments = Appointment::all();
        
        // Return the view located directly at resources/views/book.blade.php
        return view('book', compact('services', 'appointments'));
    }
    
    // Store the booking data
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'appointment_id' => 'required|exists:appointments,id',
            'service_id' => 'required|exists:services,id',
        ]);

        // Create a new booking
        Service::create([
            'appointment_id' => $request->appointment_id,
            'service_id' => $request->service_id,
        ]);

        return redirect()->route('book.index')->with('success', 'Service booked successfully!');
    }

    // List booked services (optional)
    public function index()
    {
        // Fetch booked services along with their relationships
        $bookedServices = Service::with('appointment', 'service')->get();
        return view('book.index', compact('bookedServices'));
    }
}

