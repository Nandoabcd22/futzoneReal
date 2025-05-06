@extends('users.layout')

@section('styles')
    <style>
        /* Booking Form Container */
        .booking-form-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 25px 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 28px;
            font-weight: bold;
            color: #2e7d32;
            margin-bottom: 25px;
            text-align: center;
        }

        .field-info {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .field-image {
            width: 250px;
            height: auto;
            border-radius: 10px;
            object-fit: cover;
        }

        .field-details {
            flex: 1;
        }

        .field-details h3 {
            font-size: 22px;
            color: #333;
        }

        .field-details p {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }

        .price-calculator {
            margin-top: 30px;
            background-color: #f4fef5;
            border: 1px solid #c8e6c9;
            padding: 20px;
            border-radius: 8px;
        }

        .price-calculator h4 {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 15px;
            color: #2e7d32;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 16px;
        }

        .price-total {
            font-weight: bold;
            border-top: 1px solid #ccc;
            padding-top: 10px;
            margin-top: 15px;
            font-size: 18px;
            color: #1b5e20;
        }

        .booking-notes {
            margin-top: 30px;
            background-color: #fffde7;
            border-left: 5px solid #fdd835;
            padding: 15px 20px;
            border-radius: 5px;
            font-size: 15px;
        }

        .booking-notes ul {
            padding-left: 20px;
            margin: 0;
        }

        .submit-btn {
            margin-top: 30px;
            width: 100%;
            padding: 12px;
            background-color: #43a047;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-btn:hover {
            background-color: #388e3c;
        }

        @media (max-width: 768px) {
            .field-info {
                flex-direction: column;
                align-items: center;
            }

            .field-image {
                width: 100%;
                height: auto;
            }

            .field-details {
                text-align: center;
                margin-top: 20px;
            }
        }
    </style>
@endsection

@section('content')
<div class="booking-form-container">
    <h2 class="form-title">Form Pemesanan Lapangan Futsal</h2>

    <div class="field-info">
        <img src="{{ asset('images/fields/'.$field->image) }}" alt="Field Image" class="field-image">
        <div class="field-details">
            <h3>{{ $field->name }}</h3>
            <p><strong>Harga per jam:</strong> Rp {{ number_format($field->price_per_hour, 0, ',', '.') }}</p>
            <p><strong>Lokasi:</strong> {{ $field->location }}</p>
            <p><strong>Deskripsi:</strong> {{ $field->description }}</p>
        </div>
    </div>

    <div class="price-calculator">
        <h4>Perkiraan Harga</h4>
        <div class="price-row">
            <span>Durasi (jam):</span>
            <span id="duration-price">{{ $field->price_per_hour }}</span>
        </div>
        <div class="price-row">
            <span>Total:</span>
            <span id="total-price">Rp {{ number_format($field->price_per_hour, 0, ',', '.') }}</span>
        </div>
        <div class="price-total">
            <span>Total Pembayaran:</span>
            <span id="final-total">Rp {{ number_format($field->price_per_hour, 0, ',', '.') }}</span>
        </div>
    </div>

    <form action="{{ route('booking.reguler.store') }}" method="POST">
        @csrf
        <input type="hidden" name="field_id" value="{{ $field->id }}">
        <div class="form-group">
            <label for="duration">Pilih Durasi:</label>
            <input type="number" id="duration" name="duration" class="form-control" value="1" min="1" max="5">
        </div>
        <div class="form-group">
            <button type="submit" class="submit-btn">Konfirmasi Pembayaran</button>
        </div>
    </form>

    <div class="booking-notes">
        <h5>Catatan:</h5>
        <ul>
            <li>Pemesanan lapangan ini berlaku hanya pada waktu yang dipilih.</li>
            <li>Pastikan Anda memilih durasi yang sesuai dengan kebutuhan Anda.</li>
        </ul>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const durationInput = document.getElementById('duration');
        const durationPrice = document.getElementById('duration-price');
        const totalPrice = document.getElementById('total-price');
        const finalTotal = document.getElementById('final-total');

        // Fungsi untuk menghitung total pembayaran
        function calculateTotal() {
            const pricePerHour = {{ $field->price_per_hour }}; // Harga per jam
            const duration = durationInput.value; // Durasi yang dipilih
            const total = pricePerHour * duration;

            // Update tampilan harga
            totalPrice.innerText = 'Rp ' + total.toLocaleString('id-ID');
            finalTotal.innerText = 'Rp ' + total.toLocaleString('id-ID');
        }

        // Event listener untuk durasi
        durationInput.addEventListener('input', calculateTotal);

        // Inisialisasi nilai awal
        calculateTotal();
    });
</script>
@endsection
