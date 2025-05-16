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
    <button class="customer-tab active" data-type="reguler">CUSTOMER REGULER</button>
    <button class="customer-tab" data-type="membership">CUSTOMER MEMBERSHIP</button>
    <button class="customer-tab" data-type="event">CUSTOMER EVENT</button>
</div>

<div id="pending-orders" class="tab-content active">
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
            <tbody id="pending-orders-body">
                <tr><td colspan="8" class="text-center">Memuat data...</td></tr>
            </tbody>
        </table>
    </div>
    <p class="note">NB: Harap tunggu validasi oleh admin max 1x24 jam</p>
</div>

<button class="history-tab" id="history-button">RIWAYAT</button>

<div id="completed-orders" style="display: none;">
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
            <tbody id="completed-orders-body">
                <tr><td colspan="8" class="text-center">Memuat data...</td></tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const customerTabs = document.querySelectorAll('.customer-tab');
    const historyButton = document.getElementById('history-button');
    const completedOrdersDiv = document.getElementById('completed-orders');

    let currentType = 'reguler';
    loadOrders(currentType);

    customerTabs.forEach(tab => {
        tab.addEventListener('click', function() {
            customerTabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            currentType = this.dataset.type;
            loadOrders(currentType);
        });
    });

    historyButton.addEventListener('click', () => {
        const isVisible = completedOrdersDiv.style.display === 'block';
        completedOrdersDiv.style.display = isVisible ? 'none' : 'block';
        historyButton.textContent = isVisible ? 'RIWAYAT' : 'SEMBUNYIKAN RIWAYAT';
    });

    function loadOrders(customerType) {
        document.getElementById('pending-orders-body').innerHTML = '<tr><td colspan="8" class="text-center">Memuat data...</td></tr>';
        document.getElementById('completed-orders-body').innerHTML = '<tr><td colspan="8" class="text-center">Memuat data...</td></tr>';

        fetch(`/api/orders/${customerType}`)
            .then(res => res.ok ? res.json() : Promise.reject('Gagal memuat data'))
            .then(data => {
                updateTable('pending-orders-body', data.pendingOrders);
                updateTable('completed-orders-body', data.completedOrders);
            })
            .catch(() => {
                document.getElementById('pending-orders-body').innerHTML = '<tr><td colspan="8" class="text-center">Gagal memuat data</td></tr>';
                document.getElementById('completed-orders-body').innerHTML = '<tr><td colspan="8" class="text-center">Gagal memuat data</td></tr>';
            });
    }

    function updateTable(tableId, orders) {
        const tableBody = document.getElementById(tableId);
        if (!orders || orders.length === 0) {
            tableBody.innerHTML = `<tr><td colspan="8" class="text-center">Tidak ada data</td></tr>`;
            return;
        }

        tableBody.innerHTML = orders.map((order, i) => `
            <tr>
                <td>${i + 1}</td>
                <td>${order.user_name}</td>
                <td>${formatDate(order.booking_date)}</td>
                <td>${order.field_name}</td>
                <td>${order.duration} jam</td>
                <td>${formatTime(order.start_time)} - ${formatTime(order.end_time)}</td>
                <td>Rp ${formatNumber(order.total_price)}</td>
                <td>${formatStatus(order.status)}</td>
            </tr>
        `).join('');
    }

    function formatDate(dateStr) {
        const d = new Date(dateStr);
        return `${String(d.getDate()).padStart(2, '0')}-${String(d.getMonth() + 1).padStart(2, '0')}-${d.getFullYear()}`;
    }

    function formatTime(timeStr) {
        return timeStr?.substring(0, 5) ?? '-';
    }

    function formatNumber(num) {
        return num.toLocaleString('id-ID');
    }

    function formatStatus(status) {
        switch(status) {
            case 'pending':
                return 'Menunggu Konfirmasi';
            case 'completed':
                return 'Selesai';
            case 'cancelled':
                return 'Dibatalkan';
            default:
                return status;
        }
    }
});
</script>
@endsection
