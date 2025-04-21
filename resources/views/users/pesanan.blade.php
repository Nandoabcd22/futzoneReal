@extends('users.layout')

@section('styles')
<style>
    .customer-tabs {
        display: flex;
        gap: 10px;
        margin-bottom: 20px;
    }
    
    .customer-tab {
        background-color: #ffc107;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
    }
    
    .customer-tab.active {
        background-color: #28a745;
    }
    
    .order-status {
        background-color: #ffc107;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
        font-weight: bold;
        margin-bottom: 20px;
    }
    
    .orders-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
    }
    
    .orders-table th, .orders-table td {
        border: 1px solid #dee2e6;
        padding: 12px;
        text-align: center;
    }
    
    .orders-table th {
        background-color: #f8f9fa;
        color: #333;
    }
    
    .note {
        color: #333;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    
    .history-tab {
        background-color: #ffc107;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        margin-bottom: 20px;
    }
    
    .tab-content {
        display: none;
    }
    
    .tab-content.active {
        display: block;
    }
</style>
@endsection

@section('content')
<h3 class="mb-3">Pesanan / Riwayat</h3>

<div class="customer-tabs">
    <button class="customer-tab active" id="reguler-tab">CUSTOMER REGULER</button>
    <button class="customer-tab" id="membership-tab">CUSTOMER MEMBERSHIP</button>
    <button class="customer-tab" id="event-tab">CUSTOMER EVENT</button>
</div>

<div id="pending-orders">
    <div class="order-status">SEDANG DIPESAN</div>
    
    <div class="table-responsive">
        <table class="orders-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Lapangan</th>
                    <th>Durasi</th>
                    <th>Jam</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($pendingOrders) && count($pendingOrders) > 0)
                    @foreach($pendingOrders as $index => $order)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $order->user_name }}</td>
                        <td>{{ $order->date_formatted }}</td>
                        <td>{{ $order->field_name }}</td>
                        <td>{{ $order->duration }} jam</td>
                        <td>{{ $order->time_start }} - {{ $order->time_end }}</td>
                        <td>{{ $order->price_formatted }}</td>
                        <td>{{ $order->status }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td>1</td>
                        <td>Cristiano Ronaldo</td>
                        <td>21-04-2025</td>
                        <td>Lapangan 2</td>
                        <td>2 jam</td>
                        <td>15.00 - 17.00</td>
                        <td>Rp 300.000</td>
                        <td>Menunggu Konfirmasi</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    
    <p class="note">NB: harap tunggu validasi oleh admin max 1x24 jam</p>
</div>

<button class="history-tab" id="history-button">RIWAYAT</button>

<div id="completed-orders">
    <div class="table-responsive">
        <table class="orders-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tanggal</th>
                    <th>Lapangan</th>
                    <th>Durasi</th>
                    <th>Jam</th>
                    <th>Harga</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($completedOrders) && count($completedOrders) > 0)
                    @foreach($completedOrders as $index => $order)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $order->user_name }}</td>
                        <td>{{ $order->date_formatted }}</td>
                        <td>{{ $order->field_name }}</td>
                        <td>{{ $order->duration }} jam</td>
                        <td>{{ $order->time_start }} - {{ $order->time_end }}</td>
                        <td>{{ $order->price_formatted }}</td>
                        <td>{{ $order->status }}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td>1</td>
                        <td>Cristiano Ronaldo</td>
                        <td>18-04-2025</td>
                        <td>Lapangan 1</td>
                        <td>2 jam</td>
                        <td>09.00 - 11.00</td>
                        <td>Rp 300.000</td>
                        <td>Selesai</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Cristiano Ronaldo</td>
                        <td>15-04-2025</td>
                        <td>Lapangan 3</td>
                        <td>3 jam</td>
                        <td>12.00 - 15.00</td>
                        <td>Rp 450.000</td>
                        <td>Selesai</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Cristiano Ronaldo</td>
                        <td>10-04-2025</td>
                        <td>Lapangan 5</td>
                        <td>2 jam</td>
                        <td>17.00 - 19.00</td>
                        <td>Rp 350.000</td>
                        <td>Selesai</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Customer type tabs
        const regulerTab = document.getElementById('reguler-tab');
        const membershipTab = document.getElementById('membership-tab');
        const eventTab = document.getElementById('event-tab');
        
        regulerTab.addEventListener('click', function() {
            regulerTab.classList.add('active');
            membershipTab.classList.remove('active');
            eventTab.classList.remove('active');
            
            // You can add AJAX request here to load data based on the selected tab
            // For example, to load regular customer data
            // loadOrders('regular');
        });
        
        membershipTab.addEventListener('click', function() {
            membershipTab.classList.add('active');
            regulerTab.classList.remove('active');
            eventTab.classList.remove('active');
            
            // loadOrders('membership');
        });
        
        eventTab.addEventListener('click', function() {
            eventTab.classList.add('active');
            regulerTab.classList.remove('active');
            membershipTab.classList.remove('active');
            
            // loadOrders('event');
        });
        
        // History toggle function
        const historyButton = document.getElementById('history-button');
        const completedOrders = document.getElementById('completed-orders');
        
        historyButton.addEventListener('click', function() {
            if (completedOrders.style.display === 'none') {
                completedOrders.style.display = 'block';
                historyButton.textContent = 'SEMBUNYIKAN RIWAYAT';
            } else {
                completedOrders.style.display = 'none';
                historyButton.textContent = 'RIWAYAT';
            }
        });
    });
</script>
@endsection