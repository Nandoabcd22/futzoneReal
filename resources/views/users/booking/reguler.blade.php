@extends('users.layout')

@section('styles')
<style>
    .field-container {
        display: flex;
        justify-content: flex-start;
        margin-top: 30px;
        overflow-x: auto;
        padding-bottom: 20px;
        gap: 20px;
    }
    
    .field-card {
        flex: 0 0 auto;
        width: 300px;
        background-color: white;
        border-radius: 15px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        text-align: center;
        margin-bottom: 30px;
        transition: transform 0.3s;
        position: relative;
        z-index: 10;
    }
    
    .field-card:hover {
        transform: translateY(-5px);
    }
    
    .field-image {
        width: 100%;
        border-radius: 10px;
        margin-bottom: 15px;
    }
    
    .field-title {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
    }
    
    .field-description {
        color: #666;
        font-size: 14px;
        margin-bottom: 20px;
        text-align: center;
    }
    
    .book-btn {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 8px 30px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    
    .book-btn:hover {
        background-color: #218838;
    }
    
    .page-title {
        font-size: 26px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #333;
        position: relative;
        z-index: 10;
    }
    
    /* Modal Popup Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.5);
        overflow: auto;
    }
    
    .modal-content {
        position: relative;
        background-color: #28a745;
        margin: 10% auto;
        width: 80%;
        max-width: 650px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        animation: modalopen 0.4s;
    }
    
    @keyframes modalopen {
        from {opacity: 0; transform: translateY(-50px);}
        to {opacity: 1; transform: translateY(0);}
    }
    
    .modal-header {
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    
    .modal-header h2 {
        color: white;
        margin: 0;
        font-size: 24px;
    }
    
    .close-btn {
        color: white;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }
    
    .close-btn:hover {
        color: #ddd;
    }
    
    .modal-body {
        padding: 20px;
        color: white;
    }
    
    .booking-form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    
    .booking-section {
        margin-bottom: 15px;
    }
    
    .booking-info {
        background: rgba(255,255,255,0.1);
        padding: 15px;
        border-radius: 8px;
        margin-bottom: 15px;
    }
    
    .info-row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
    }
    
    .form-input {
        width: 100%;
        padding: 12px 15px;
        border: none;
        border-radius: 5px;
        background-color: white;
        font-size: 16px;
        margin-bottom: 10px;
    }
    
    .time-slots {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        margin-top: 15px;
    }
    
    .time-slot {
        background-color: white;
        border: none;
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.2s;
    }
    
    .time-slot:hover:not(:disabled) {
        background-color: #f0f0f0;
    }
    
    .time-slot.selected {
        background-color: #1e7e34;
        color: white;
    }
    
    .time-slot:disabled {
        opacity: 0.5;
        cursor: not-allowed;
    }
    
    .next-btn {
        width: 100%;
        padding: 12px;
        background-color: white;
        color: #28a745;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 15px;
        transition: background-color 0.2s;
    }
    
    .next-btn:hover {
        background-color: #f0f0f0;
    }
    
    .back-btn {
        background-color: transparent;
        border: none;
        color: white;
        cursor: pointer;
        display: flex;
        align-items: center;
        padding: 0;
        font-size: 16px;
    }
    
    .back-btn svg {
        width: 20px;
        height: 20px;
        margin-right: 5px;
    }
    
    @media (max-width: 768px) {
        .modal-content {
            width: 95%;
            margin: 15% auto;
        }
        
        .time-slots {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>
@endsection

@section('content')
<h1 class="page-title">Booking Reguler</h1>

<div class="field-container">
    @for ($i = 1; $i <= 7; $i++)
    <div class="field-card">
        <img src="https://example.com/soccer-field{{ $i }}.jpg" alt="Lapangan {{ $i }}" class="field-image">
        <h2 class="field-title">Lapangan {{ $i }}</h2>
        <p class="field-description">
            Lapangan futsal berkualitas<br>
            dengan fasilitas lengkap.<br>
            Pesan sekarang untuk<br>
            pengalaman bermain<br>
            terbaik!
        </p>
        <button class="book-btn" onclick="openBookingModal({{ $i }})">Book</button>
    </div>
    @endfor
</div>

<!-- Booking Modal Popup -->
<div id="bookingModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <button class="back-btn" onclick="closeBookingModal()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 12H5M12 19l-7-7 7-7"></path>
                </svg>
            </button>
            <h2 id="modalTitle">Booking Lapangan 1</h2>
            <span class="close-btn" onclick="closeBookingModal()">&times;</span>
        </div>
        <div class="modal-body">
            <div class="booking-info">
                <div class="info-row">
                    <div>Booking</div>
                    <div>Reguler</div>
                </div>
                <div class="info-row">
                    <div>Nama Lengkap</div>
                    <div id="bookingName">Cristiano Ronaldo</div>
                </div>
                <div class="info-row">
                    <div>No.Hp/Whatsapp</div>
                    <div id="bookingPhone">+62 282 8181 1999</div>
                </div>
            </div>
            
            <form class="booking-form" action="/users/booking/form" method="POST">
                @csrf
                <input type="hidden" id="lapanganId" name="lapangan_id">
                
                <div class="booking-section">
                    <input type="date" id="kalender" name="tanggal" class="form-input" placeholder="Kalender">
                </div>
                
                <div class="booking-section">
                    <select id="durasi" name="durasi" class="form-input">
                        <option value="" disabled selected>Durasi</option>
                        <option value="1">1 Jam</option>
                        <option value="2">2 Jam</option>
                        <option value="3">3 Jam</option>
                    </select>
                </div>
                
                <div class="booking-section">
                    <div class="time-slots">
                        <button type="button" class="time-slot" data-time="07:00">07.00</button>
                        <button type="button" class="time-slot" data-time="08:00">08.00</button>
                        <button type="button" class="time-slot" data-time="09:00">09.00</button>
                        <button type="button" class="time-slot" data-time="10:00">10.00</button>
                        <button type="button" class="time-slot" data-time="11:00">11.00</button>
                        <button type="button" class="time-slot" data-time="12:00">12.00</button>
                        <button type="button" class="time-slot" data-time="13:00">13.00</button>
                        <button type="button" class="time-slot" data-time="14:00">14.00</button>
                        <button type="button" class="time-slot" data-time="15:00">15.00</button>
                        <button type="button" class="time-slot" data-time="16:00">16.00</button>
                        <button type="button" class="time-slot" data-time="17:00">17.00</button>
                        <button type="button" class="time-slot" data-time="18:00">18.00</button>
                        <button type="button" class="time-slot" data-time="19:00">19.00</button>
                        <button type="button" class="time-slot" data-time="20:00">20.00</button>
                        <button type="button" class="time-slot" data-time="21:00">21.00</button>
                        <button type="button" class="time-slot" data-time="22:00">22.00</button>
                    </div>
                    <input type="hidden" id="selectedTime" name="waktu">
                </div>
                
                <button type="submit" class="next-btn">Selanjutnya</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Get the modal
    const modal = document.getElementById('bookingModal');
    const modalTitle = document.getElementById('modalTitle');
    const lapanganIdInput = document.getElementById('lapanganId');
    const timeSlots = document.querySelectorAll('.time-slot');
    const selectedTimeInput = document.getElementById('selectedTime');
    const durasiSelect = document.getElementById('durasi');
    
    // Function to open the modal
    function openBookingModal(lapanganId) {
        modalTitle.textContent = `Booking Lapangan ${lapanganId}`;
        lapanganIdInput.value = lapanganId;
        modal.style.display = 'block';
        
        // Set current date as default
        const today = new Date();
        const dateString = today.toISOString().split('T')[0];
        document.getElementById('kalender').value = dateString;
        
        // Reset all time slots to be clickable
        resetTimeSlots();
    }
    
    // Function to close the modal
    function closeBookingModal() {
        modal.style.display = 'none';
        resetForm();
    }
    
    // Close the modal if user clicks outside of it
    window.onclick = function(event) {
        if (event.target == modal) {
            closeBookingModal();
        }
    }
    
    // Reset all time slots to initial state
    let selectedSlotIndex = null;

function resetTimeSlots() {
    timeSlots.forEach(slot => {
        slot.disabled = false;
        slot.classList.remove('selected');
        slot.style.opacity = '1';
        slot.style.cursor = 'pointer';
    });
    selectedTimeInput.value = '';
    selectedSlotIndex = null;
}

// Saat pengguna memilih durasi baru, reset semua slot
durasiSelect.addEventListener('change', resetTimeSlots);

// Saat pengguna memilih waktu mulai
timeSlots.forEach((slot, index) => {
    slot.addEventListener('click', () => {
        const durasi = parseInt(durasiSelect.value);

        if (!durasi) {
            alert('Silakan pilih durasi terlebih dahulu.');
            return;
        }

        // Reset semua slot dulu
        resetTimeSlots();

        // Simpan waktu yang dipilih
        selectedSlotIndex = index;
        selectedTimeInput.value = slot.dataset.time;

        // Tambahkan highlight pada waktu mulai
        slot.classList.add('selected');

        // Nonaktifkan slot sesuai durasi
        for (let i = 0; i <= durasi; i++) {
            if (timeSlots[index + i]) {
                timeSlots[index + i].disabled = true;
                timeSlots[index + i].style.opacity = '0.5';
                timeSlots[index + i].style.cursor = 'not-allowed';
            }
        }

        // Aktifkan kembali slot yang diklik agar tetap disorot
        slot.disabled = false;
        slot.style.opacity = '1';
        slot.style.cursor = 'pointer';
    });
});

    // Function to handle duration change
    durasiSelect.addEventListener('change', function() {
        resetTimeSlots();
    });
    
    // Function to reset form
    function resetForm() {
        document.querySelector('.booking-form').reset();
        resetTimeSlots();
    }
</script>
@endsection