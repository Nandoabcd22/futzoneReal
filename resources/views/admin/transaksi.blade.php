
<!-- resources/views/admin/transaksi.blade.php -->
@extends('layouts.admin')

@section('title', 'Transaksi / Booking')

@section('content')
    <h2>Transaksi / Booking</h2>
    <div class="card">
        <div class="card-body">
            <!-- Transaksi table will go here -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer</th>
                        <th>Lapangan</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data, replace with actual data from database -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Lapangan A</td>
                        <td>21-04-2025</td>
                        <td>19:00 - 21:00</td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td>
                            <button class="btn btn-sm btn-success">Konfirmasi</button>
                            <button class="btn btn-sm btn-danger">Tolak</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection