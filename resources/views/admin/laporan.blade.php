<!-- resources/views/admin/laporan.blade.php -->
@extends('layouts.admin')

@section('title', 'Laporan')

@section('content')
    <h2>Laporan</h2>
    <div class="card">
        <div class="card-body">
            <!-- Laporan content will go here -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">Dari</span>
                        <input type="date" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-text">Sampai</span>
                        <input type="date" class="form-control">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary mb-3">Tampilkan Laporan</button>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tanggal</th>
                        <th>Customer</th>
                        <th>Lapangan</th>
                        <th>Durasi</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data, replace with actual data from database -->
                    <tr>
                        <td>1</td>
                        <td>21-04-2025</td>
                        <td>John Doe</td>
                        <td>Lapangan A</td>
                        <td>2 jam</td>
                        <td>Rp 300.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
