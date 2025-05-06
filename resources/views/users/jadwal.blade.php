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
        position: relative;
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
        color: black;
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

    /* Add styling for the availability status outside the table */
    .status-legend {
        margin-bottom: 20px;
        display: flex;
        gap: 15px;
        align-items: center;
    }

    .status-label {
        display: inline-flex;
        align-items: center;
        padding: 5px 10px;
        font-size: 14px;
        font-weight: bold;
    }

    .available-label {
        background-color: #28a745;
        color: white;
        border-radius: 5px;
    }

    .booked-label {
        background-color: #dc3545;
        color: white;
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
            <!-- Ensure the date picker value is set correctly based on the selected date -->
            <input type="date" class="date-picker" id="date-picker" value="{{ request('date', date('Y-m-d')) }}">
        </div>
    </div>

    <!-- Availability Status Legend -->
    <div class="status-legend">
        <div class="status-label available-label">
            <span>✔ Tersedia</span>
        </div>
        <div class="status-label booked-label">
            <span>❌ Terisi</span>
        </div>
    </div>
    
    <div class="table-responsive">
        <table class="field-schedule">
            <thead>
                <tr>
                    <th></th>
                    @for ($j = 7; $j <= 23; $j++) <!-- Jam sampai 23:00 -->
                        <th>{{ $j }}.00</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @for ($i = 1; $i <= 7; $i++)
                <tr>
                    <td class="field-name">Lapangan {{ $i }}</td>
                    @for ($j = 7; $j <= 23; $j++) <!-- Jam sampai 23:00 -->
                        @php
                            $isBooked = isset($bookings[$i][$j]);
                            $statusClass = $isBooked ? 'booked-label' : 'available-label';
                            $statusText = $isBooked ? 'Terisi' : 'Tersedia';
                            $teamName = $isBooked ? $bookings[$i][$j] : ''; // Display team name if booked
                        @endphp
                        <td class="booking-cell {{ $isBooked ? 'booked' : 'available' }}" data-field="{{ $i }}" data-time="{{ $j }}">
                            @if($teamName)
                                <div class="team-name">{{ $teamName }}</div> <!-- Display team name if booked -->
                            @endif
                        </td>
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
            const selectedDate = this.value;  // Get the selected date
            const baseUrl = window.location.origin; // Get the base URL of the current page
            window.location.href = baseUrl + '/jadwal-lapangan?date=' + selectedDate; // Redirect to update the schedule with the selected date
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
