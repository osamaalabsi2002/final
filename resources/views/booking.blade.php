@extends('layouts.APPa')

@section('content')
<title>Barber Appointment Booking</title>

<!-- Add SweetAlert CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- CSS for Styling -->
<style>
    /* Main Container */
    .container {
        font-family: 'Arial', sans-serif;
        color: #333;
        padding: 20px;
    }

    /* General Button Styles */
    button, .ec-submit input {
        background-color: #e5a427;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover, .ec-submit input:hover {
        background-color: #d49525;
    }

    /* Barber Image Styling */
    .barber-image {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin-right: 20px;
        border: 4px solid #e5a427;
    }

    /* Appointment Section */
    .appointment-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .appointment-header h4 {
        font-size: 28px;
        margin: 0;
        color: #333;
    }

    /* Service List Styling */
    .service-list {
        list-style-type: none;
        padding: 0;
        margin-bottom: 20px;
    }

    .service-list li {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #ddd;
        align-items: center;
    }

    .service-list li label {
        font-size: 18px;
    }

    .service-list li span {
        color: #e5a427;
        font-weight: bold;
    }

    /* Time Slots Styling */
    .time-slots ul {
        list-style-type: none;
        padding: 0;
        display: flex;
        flex-wrap: wrap;
    }

    .time-slots ul li {
        flex: 1 0 100%;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
    }

    .time-slot {
        background-color: #f0f0f0;
        padding: 10px 15px;
        border-radius: 5px;
        margin-right: 10px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .time-slot.booked {
        background-color: #ff4d4d !important;
        color: #fff;
        cursor: not-allowed;
    }

    .time-slot.selected {
        background-color: #28a745;
        color: #fff;
    }

    /* Total Price Section */
    .total-price {
        margin-top: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    /* Success Modal */
    .swal2-popup {
        font-size: 1.6rem !important;
    }
</style>

<div class="container">
    <h1>Book a Barber Appointment</h1>

    <!-- Barber Information -->
    <div class="appointment-header">
        <img src="{{ asset('img/' . $employee->image) }}" class="barber-image" alt="Barber Image">
        <h4>{{ $employee->first_name }} {{ $employee->last_name }}</h4>
    </div>

    <!-- Service Selection -->
    <div>
        <h3>Select Services</h3>
        <ul class="service-list">
            <li>
                <label>
                    <input type="checkbox" name="services[]" value="40" class="service-checkbox"> Trim Your Hair
                </label>
                <span>$40</span>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="services[]" value="15" class="service-checkbox"> Trim Your Beard
                </label>
                <span>$15</span>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="services[]" value="59" class="service-checkbox"> Special Beard Treatment
                </label>
                <span>$59</span>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="services[]" value="69" class="service-checkbox"> Color Your Beard
                </label>
                <span>$69</span>
            </li>
            <li>
                <label>
                    <input type="checkbox" name="services[]" value="12" class="service-checkbox"> Wax Your Beard
                </label>
                <span>$12</span>
            </li>
        </ul>
    </div>

    <!-- Total Price -->
    <div class="total-price">
        Total Price: $<span id="totalPrice">0.00</span>
    </div>

    <!-- Available Time Slots -->
    <div class="time-slots">
 
        <h3>Select Date and Time</h3>
        <ul>
            @foreach($weekDays as $day)
                <li>
                    <strong>{{ $day['day'] }}-{{ $day['month'] }}-{{ $day['year'] }}</strong>
                    @foreach($day['timeSlots'] as $slot)
                        <a class="time-slot {{ $slot['is_booked'] ? 'booked' : '' }}"
                           href="javascript:void(0);"
                           data-date="{{ $day['year'] }}-{{ $day['month'] }}-{{ $day['day'] }}"
                           data-time="{{ $slot['time'] }}">
                            {{ $slot['is_booked'] ? 'is_Boked' : $slot['time'] }}
                        </a>
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Booking Form -->
    <form id="bookingForm" method="POST" action="{{ route('appointments.store') }}">
        @csrf
        <input type="hidden" name="appointment_date" id="selectedDate">
        <input type="hidden" name="start_time" id="selectedTime">
        <input type="hidden" name="employee_id" value="{{ $employee->id }}">
        <input type="hidden" name="total_price" id="totalPriceInput">

        <button type="button" id="submitBtn">Book Appointment</button>
    </form>
</div>

<!-- JavaScript for Service Selection and Price Calculation -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    let totalPrice = 0;

    // Service selection and price calculation
    const serviceCheckboxes = document.querySelectorAll('.service-checkbox');
    serviceCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const price = parseFloat(this.value);

            if (this.checked) {
                totalPrice += price;
            } else {
                totalPrice -= price;
            }

            document.getElementById('totalPrice').textContent = totalPrice.toFixed(2);
            document.getElementById('totalPriceInput').value = totalPrice;
        });
    });

    // Time slot selection
    const timeSlots = document.querySelectorAll('.time-slot');
    let selectedDate = '';
    let selectedTime = '';

    timeSlots.forEach(slot => {
        slot.addEventListener('click', function() {
            if (this.classList.contains('booked')) return;

            timeSlots.forEach(s => s.classList.remove('selected'));
            this.classList.add('selected');

            selectedDate = this.getAttribute('data-date');
            selectedTime = this.getAttribute('data-time');
            
            document.getElementById('selectedDate').value = selectedDate;
            document.getElementById('selectedTime').value = selectedTime;
        });
    });

    // Submit booking form
    document.getElementById('submitBtn').addEventListener('click', function() {
        if (!selectedDate || !selectedTime || totalPrice <= 0) {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Please select a service and time slot before booking!',
            });
        } else {
            document.getElementById('bookingForm').submit();
        }
    });
});
</script>

@endsection
