
<!-- resources/views/admin/data_lapangan.blade.php -->
@extends('layouts.admin')

@section('title', 'Data Lapangan')

@section('content')
    <h2>Data Lapangan</h2>
    <div class="card">
        <div class="card-body">
            <!-- Data lapangan table will go here -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Lapangan</th>
                        <th>Tipe</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data, replace with actual data from database -->
                    <tr>
                        <td>1</td>
                        <td>Lapangan A</td>
                        <td>Rumput Sintetis</td>
                        <td>Rp 150.000/jam</td>
                        <td><span class="badge bg-success">Tersedia</span></td>
                        <td>
                            <button class="btn btn-sm btn-info">Edit</button>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
