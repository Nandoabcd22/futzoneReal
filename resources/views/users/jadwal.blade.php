@extends('users.layout')

@section('styles')
<style>
    .calendar-container {
        background-color: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
        position: relative;
        z-index: 2;
    }
    
    .calendar-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }
    
    .field-schedule {
        width: 100%;
        border-collapse: collapse;
    }
    
    .field-schedule th, .field-schedule td {
        border: 1px solid #28a745;
        text-align: center;
        padding: 10px;
    }
    
    .field-schedule th {
        background-color: #28a745;
        color: white;
    }
    
    .field-name {
        background-color: #28a745;
        color: white;
        font-weight: bold;
    }
    
    .booking-cell {
        cursor: pointer;
        position: relative;
    }
    
    .booking-cell:hover {
        background-color: rgba(40, 167, 69, 0.2);
    }
    
    .booked {
        background-color: #dc3545;
        color: white;
    }
    
    .available {
        background-color: #f8f9fa;
    }
    
    .filter-date {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
    }
    
    .date-picker {
        padding: 8px 15px;
        border: 1px solid #ced4da;
        border-radius: 5px;
    }
</style>
@endsection

@section('content')
<h3 class="mb-3">Jadwal Lapangan</h3>

<div class="calendar-container">
    <div class="calendar-header">
        <h4>Kalender</h4>
        <div class="filter-date">
            <label>Tanggal:</label>
            <input type="date" class="date-picker" id="date-picker" value="{{ date('Y-m-d') }}">
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="field-schedule">
            <thead>
                <tr>
                    <th></th>
                    <th>08.00</th>
                    <th>09.00</th>
                    <th>10.00</th>
                    <th>11.00</th>
                    <th>12.00</th>
                    <th>13.00</th>
                    <th>14.00</th>
                    <th>15.00</th>
                    <th>16.00</th>
                    <th>17.00</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 7; $i++)
                <tr>
                    <td class="field-name">Lapangan {{ $i }}</td>
                    @for ($j = 8; $j <= 17; $j++)
                        @php
                            $isBooked = isset($bookings[$i][$j]) ? true : false;
                            $cellClass = $isBooked ? 'booking-cell booked' : 'booking-cell available';
                        @endphp
                        <td class="{{ $cellClass }}" data-field="{{ $i }}" data-time="{{ $j }}"></td>
                    @endfor
                </tr>
                @endfor
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize date picker
        const datePicker = document.getElementById('date-picker');
        datePicker.addEventListener('change', function() {
            // Redirect to same page with date parameter
            window.location.href = '{{ route("user.jadwal") }}?date=' + this.value;
        });
        
        // Make booking cells clickable
        const bookingCells = document.querySelectorAll('.booking-cell.available');
        bookingCells.forEach(cell => {
            cell.addEventListener('click', function() {
                const field = this.getAttribute('data-field');
                const time = this.getAttribute('data-time');
                const date = document.getElementById('date-picker').value;
                
                // Redirect to booking page with parameters
                window.location.href = '{{ route("user.booking.create") }}?field=' + field + '&time=' + time + '&date=' + date;
            });
        });
    });
</script>
@endsection