<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="dashboard-cards">
        <div class="dashboard-card card-customer">
            <div class="card-info">
                <h3>{{ $customerCount }}</h3>
                <p>Data Customer</p>
                <div class="more-info">
                    <a href="{{ route('admin.data.customer') }}">more info »</a>
                </div>
            </div>
            <div class="card-icon">
                <i class="fas fa-users"></i>
            </div>
        </div>

        <div class="dashboard-card card-lapangan">
            <div class="card-info">
                <h3>{{ $lapanganCount }}</h3>
                <p>Data Lapangan</p>
                <div class="more-info">
                    <a href="{{ route('admin.data.lapangan') }}">more info »</a>
                </div>
            </div>
            <div class="card-icon">
                <i class="fas fa-exchange-alt"></i>
            </div>
        </div>

        <div class="dashboard-card card-transaksi">
            <div class="card-info">
                <h3>{{ $transactionCount }}</h3>
                <p>Data Transaksi / Boking</p>
                <div class="more-info">
                    <a href="{{ route('admin.transaksi') }}">more info »</a>
                </div>
            </div>
            <div class="card-icon">
                <i class="fas fa-dollar-sign"></i>
            </div>
        </div>
    </div>

    <!-- You can add additional dashboard content here -->
@endsection