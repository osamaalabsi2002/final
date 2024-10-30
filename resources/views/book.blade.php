<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Service</title>
</head>
<body>
    <h1>Book a Service</h1>

    <!-- Display success message -->
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->
    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Booking Form -->
    <form action="{{ route('book.store') }}" method="POST">
        @csrf

        <!-- Appointment selection -->
        <label for="appointment_id">Select Appointment:</label>
        <select name="appointment_id" id="appointment_id" required>
            <option value="">-- Select an Appointment --</option>
            @foreach($appointments as $appointment)
                <option value="{{ $appointment->id }}">{{ $appointment->details }}</option>
            @endforeach
        </select>
        <br>

        <!-- Service selection -->
        <label for="service_id">Select Service:</label>
        <select name="service_id" id="service_id" required>
            <option value="">-- Select a Service --</option>
            @foreach($services as $service)
                <option value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Book Service</button>
    </form>
</body>
</html>
