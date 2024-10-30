@extends('layouts.CartBook')

@section('content')
    <title>Barber Appointment Booking</title>

    <!-- Add SweetAlert CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .timing.unavailable {
            background-color: #ff4d4d !important;
            color: #fff !important;
            cursor: not-allowed;
            pointer-events: none;
            border: none;
            text-align: center;
            padding: 10px 20px;
            border-radius: 5px;
            display: inline-block;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
        .selected {
            background-color: #28a745 !important;
            color: white !important;
        }
    </style>
</head>
<body>



<div class="ec-form">
    <div class="ec-content-title">
    </div>
    <form action="{{ url('/indexa') }}" method="GET">
        <p class="ec-submit">
            <input type="submit" value="Back To Home Page" 
                   style="background-color: #e5a427; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
        </p>
    </form>
</div>







</div>
    <!-- Display errors if any -->
    @if ($errors->any())
        <div class="alert alert-danger" style="color: #e5a427;; background-color: #f8d7da; padding: 10px; border-radius: 5px;">
            <ul style="list-style-type: none; padding: 0;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 style="font-family: Arial, sans-serif; font-size: 32px; margin-bottom: 20px;">Book a Barber Appointment</h1>

    <div style="display: flex; align-items: center; margin-bottom: 20px;">
        <img src="{{ asset('img/' . $employee->image) }}" alt="Barber Image" style="width: 150px; height: 150px; border-radius: 50%; margin-right: 20px;">
        <h4 style="font-family: Arial, sans-serif; font-size: 24px; margin: 0;">{{ $employee->first_name }} {{ $employee->last_name }}</h4>
    </div>

    <div>
        <h3 style="font-family: Arial, sans-serif; font-size: 20px; margin-bottom: 10px;">Select Date and Time</h3>
        <ul style="list-style-type: none; padding: 0; display: flex; flex-wrap: wrap;">
            @foreach($weekDays as $day)
                <li style="flex: 1 0 100%; margin-bottom: 10px;">
                    <strong style="display: inline-block; width: 100px;">{{ $day['day'] }}-{{ $day['month'] }}-{{ $day['year'] }}</strong>
                    @foreach($day['timeSlots'] as $slot)
                        <a class="timing {{ $slot['is_booked'] ? 'unavailable' : '' }}"
                           href="#"
                           data-date="{{ $day['year'] }}-{{ $day['month'] }}-{{ $day['day'] }}"
                           data-time="{{ $slot['time'] }}"
                           style="text-decoration: none; color: {{ $slot['is_booked'] ? '#999' : '#007bff' }}; margin-right: 10px; padding: 5px 10px; border-radius: 5px; background-color: {{ $slot['is_booked'] ? '#f5f5f5' : '#f0f0f0' }}; cursor: {{ $slot['is_booked'] ? 'not-allowed' : 'pointer' }};">
                           {{ $slot['time'] }}
                        </a>
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Booking form -->
    <form id="bookingForm" method="POST">
        @csrf
        <input type="hidden" name="appointment_date" id="selectedDate">
        <input type="hidden" name="start_time" id="selectedTime">
        <input type="hidden" name="employee_id" value="{{ $employee->id }}">
        <button type="button" id="submitBtn" style="background-color: #e5a427;; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 16px; cursor: pointer;">
            Book Appointment
        </button>
    </form>

    <script>
  document.addEventListener('DOMContentLoaded', function() {
    const timeSlots = document.querySelectorAll('.timing');
    let selectedDate = '';
    let selectedTime = '';

    timeSlots.forEach(slot => {
        slot.addEventListener('click', function(event) {
            event.preventDefault();

            // Remove 'selected' class from all time slots
            timeSlots.forEach(slot => slot.classList.remove('selected'));

            // Add 'selected' class to the clicked time slot
            this.classList.add('selected');

            // Capture the selected date and time
            selectedDate = this.getAttribute('data-date');
            selectedTime = this.getAttribute('data-time');

            // Log for debugging purposes
            console.log('Selected Date:', selectedDate);
            console.log('Selected Time:', selectedTime);

            // Set the values in the hidden form fields
            document.getElementById('selectedDate').value = selectedDate;
            document.getElementById('selectedTime').value = selectedTime;
        });
    });

    // Handle form submission
    document.getElementById('submitBtn').addEventListener('click', function() {
        const form = document.getElementById('bookingForm');
        const appointmentDate = document.getElementById('selectedDate').value;
        const appointmentTime = document.getElementById('selectedTime').value;

        // Log for debugging
        console.log('Submitting Appointment:', {
            appointment_date: appointmentDate,
            start_time: appointmentTime
        });

        // Ensure both date and time are selected
        if (!appointmentDate || !appointmentTime) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select a date and time!'
            });
            return;
        }

        // Submit the form
        fetch("{{ route('appointments.store') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
            },
            body: JSON.stringify({
                appointment_date: appointmentDate,
                start_time: appointmentTime,
                employee_id: "{{ $employee->id }}"
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Booked!',
                    text: 'Your appointment has been successfully booked.',
                }).then(() => {
                    // Redirect or perform any other action on success
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data.message || 'Something went wrong. Please try again.',
                });
            }
        })
        .catch(error => {
    console.error("Fetch Error: ", error);  // Log the actual error
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'There was an error booking the appointment. Please try again later. Error: ' + error.message,
    });
});

    });
});

    </script>

</body>
</html>
















public function booking($employeeId)
    {
        // Retrieve the employee based on the ID
        $employee = Employee::findOrFail($employeeId);
    
        $weekDays = collect();
    
        for ($i = 1; $i <= 7; $i++) {
            $date = now()->addDays($i)->format('Y-m-d');
            $appointments = Appointment::where('employee_id', $employeeId)
                                       ->whereDate('start_time', $date)  // Use start_time for date checking
                                       ->pluck('start_time')  // Use start_time to fetch times
                                       ->toArray();
    
            $timeSlots = ['09:00 AM', '10:00 AM', '11:00 AM', '12:00 PM', '01:00 PM', '02:00 PM', '03:00 PM'];
            $availableTimeSlots = [];
    
            foreach ($timeSlots as $timeSlot) {
                $formattedTimeSlot = date("H:i:s", strtotime($timeSlot));
                $availableTimeSlots[] = [
                    'time' => $timeSlot,
                    'is_booked' => in_array($formattedTimeSlot, $appointments),
                ];
            }
    
            $weekDays->add([
                'day' => now()->addDays($i)->format('d'),
                'month' => now()->addDays($i)->format('m'),
                'year' => now()->addDays($i)->format('Y'),
                'timeSlots' => $availableTimeSlots,
            ]);
        }
    
        return view('booking', compact('employee', 'weekDays'));
    }
    