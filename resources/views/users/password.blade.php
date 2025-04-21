@extends('users.layout')

@section('styles')
<style>
    .password-container {
        background-color: white;
        border-radius: 15px;
        padding: 30px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        position: relative;
        z-index: 2;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .password-heading {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 30px;
        color: #333;
    }
    
    .password-subheading {
        font-size: 18px;
        margin-bottom: 15px;
        color: #333;
    }
    
    .password-input {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ced4da;
        border-radius: 5px;
        margin-bottom: 20px;
        background-color: #e9ecef;
    }
    
    .password-button {
        width: 100%;
        padding: 12px 15px;
        background-color: #2196F3;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
    }
    
    .password-button:hover {
        background-color: #0b7dda;
    }
</style>
@endsection

@section('content')
<div class="password-container">
    <div class="password-heading">Ganti password baru!</div>
    
    <form method="POST" action="{{ route('user.updatePassword') }}">
        @csrf
        
        <div class="password-subheading">Masukkan password baru</div>
        <input type="password" name="password" class="password-input" placeholder="Masukkan password..">
        
        <div class="password-subheading">Konfirmasi Password baru</div>
        <input type="password" name="password_confirmation" class="password-input" placeholder="Masukkan komfirmasi password..">
        
        <button type="submit" class="password-button">Submit</button>
    </form>
</div>
@endsection