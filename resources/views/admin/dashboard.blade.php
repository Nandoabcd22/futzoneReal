<!-- resources/views/admin/dashboard.blade.php -->

@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="dashboard-cards">
        <!-- Card Data Customer -->
        <div class="dashboard-card card-customer">
            <div class="card-info">
                <h3>{{ $customerCount }}</h3>  <!-- Display the actual count of customers -->
                <p>Data Customer</p>
                <div class="more-info">
                    <a href="{{ route('admin.dataCustomer') }}">more info »</a>  <!-- Use the correct route name -->
                </div>
            </div>
            <div class="card-icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
        
        <!-- Card Data Lapangan -->
        <div class="dashboard-card card-lapangan">
            <div class="card-info">
                <h3>{{ $fieldCount }}</h3>  <!-- Display the actual count of fields -->
                <p>Data Lapangan</p>
                <div class="more-info">
                    <a href="{{ route('admin.dataLapangan') }}">more info »</a>  <!-- Use the correct route name -->
                </div>
            </div>
            <div class="card-icon">
                <i class="fas fa-exchange-alt"></i>
            </div>
        </div>
        
        <!-- Card Data Transaksi -->
        <div class="dashboard-card card-transaksi">
            <div class="card-info">
                <h3>{{ $bookingCount }}</h3>  <!-- Display the actual count of bookings -->
                <p>Data Transaksi / Booking</p>
                <div class="more-info">
                    <a href="{{ route('admin.transaksi') }}">more info »</a>  <!-- Use the correct route name -->
                </div>
            </div>
            <div class="card-icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
    </div>

    <!-- Additional content for dashboard can be added here -->
@endsection
