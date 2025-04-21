<!-- resources/views/admin/data_customer.blade.php -->
@extends('layouts.admin')

@section('title', 'Data Customer')

@section('content')
    <h2>Data Customer</h2>
    <div class="card">
        <div class="card-body">
            <!-- Data customers table will go here -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample data, replace with actual data from database -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>082112345678</td>
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