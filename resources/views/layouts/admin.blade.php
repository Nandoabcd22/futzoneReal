<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutZone - @yield('title', 'Admin Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #4CAF50;
            --sidebar-bg: #f9f9f9;
            --sidebar-hover: #e9e9e9;
            --sidebar-active: #4CAF50;
            --sidebar-active-text: white;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
        }

        .main-header {
            background-color: var(--primary-color);
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .brand {
            font-size: 24px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .logout-btn {
            color: white;
            text-decoration: none;
        }

        .admin-content {
            display: flex;
            min-height: calc(100vh - 60px);
        }

        .sidebar {
            width: 270px;
            background-color: var(--sidebar-bg);
            border-right: 1px solid #e0e0e0;
            padding: 20px 0;
        }

        .sidebar-menu {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-menu li {
            margin-bottom: 10px;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            border-left: 4px solid transparent;
            transition: all 0.3s;
        }

        .sidebar-menu a:hover {
            background-color: var(--sidebar-hover);
            border-left-color: var(--primary-color);
        }

        .sidebar-menu a.active {
            background-color: var(--sidebar-active);
            color: var(--sidebar-active-text);
            border-left-color: #2E7D32;
        }

        .sidebar-menu i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .content-wrapper {
            flex: 1;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            margin: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .dashboard-cards {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .dashboard-card {
            flex: 1;
            min-width: 250px;
            padding: 20px;
            border-radius: 10px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card-customer {
            background-color: #4CAF50;
        }

        .card-lapangan {
            background-color: #4267B2;
        }

        .card-transaksi {
            background-color: #FFC107;
        }

        .card-icon {
            font-size: 2.5rem;
        }

        .card-info h3 {
            font-size: 2.5rem;
            margin: 0;
        }

        .card-info p {
            margin: 0;
            font-size: 1rem;
        }

        .more-info {
            text-align: right;
            margin-top: 10px;
        }

        .more-info a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
        }

        .footer-text {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: #666;
            font-size: 0.8rem;
            text-align: center;
            width: calc(100% - 40px);
        }

        .background-shapes {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .bg-shape {
            position: absolute;
            background-color: rgba(76, 175, 80, 0.1);
            border-radius: 15px;
        }

        .shape1 {
            width: 400px;
            height: 400px;
            right: -100px;
            top: 30%;
            transform: rotate(45deg);
        }

        .shape2 {
            width: 300px;
            height: 300px;
            left: 40%;
            bottom: -100px;
            transform: rotate(20deg);
        }

        .shape3 {
            width: 200px;
            height: 200px;
            left: 10%;
            top: 50%;
            transform: rotate(65deg);
        }

        .soccer-ball {
            position: fixed;
            right: 30px;
            bottom: 30px;
            width: 60px;
            height: 60px;
            z-index: 10;
        }
    </style>
</head>

<body>
    <header class="main-header">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('admin.dashboard') }}" class="brand">FutZone</a>
                <div>
                    <a href="#" class="logout-btn me-3">Logout</a>
                    <span class="text-light">|</span>
                    <span class="ms-3 text-light">ADMIN FOTZONE</span>
                </div>
            </div>
        </div>
    </header>

    <div class="admin-content">
        <aside class="sidebar">
            <ul class="sidebar-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}"
                        class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-th-large"></i> DASHBOARD
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.data.customer') }}"
                        class="{{ request()->routeIs('admin.data.customer') ? 'active' : '' }}">
                        <i class="fas fa-users"></i> DATA CUSTOMER
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.data.lapangan') }}"
                        class="{{ request()->routeIs('admin.data.lapangan') ? 'active' : '' }}">
                        <i class="fas fa-futbol"></i> DATA LAPANGAN
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.transaksi') }}"
                        class="{{ request()->routeIs('admin.transaksi') ? 'active' : '' }}">
                        <i class="fas fa-book"></i> TRANSAKSI / BOOK
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.laporan') }}"
                        class="{{ request()->routeIs('admin.laporan') ? 'active' : '' }}">
                        <i class="fas fa-chart-bar"></i> LAPORAN
                    </a>
                </li>

                <li>
                    <a href="#" id="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> LOGOUT
                    </a>
                </li>
            </ul>

            <div class="footer-text">
                praktis, mudah, bisa<br>
                boking dimanapun futzone.
            </div>
        </aside>

        <main class="content-wrapper">
            @yield('content')
        </main>
    </div>

    <div class="background-shapes">
        <div class="bg-shape shape1"></div>
        <div class="bg-shape shape2"></div>
        <div class="bg-shape shape3"></div>
    </div>

    <img src="{{ asset('img/soccer-ball.png') }}" alt="Soccer Ball" class="soccer-ball">

    <!-- Logout Confirmation Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin keluar sebagai admin?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Ya</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Logout button
            document.getElementById('logout-btn').addEventListener('click', function (e) {
                e.preventDefault();
                var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
                logoutModal.show();
            });

            // Header logout button
            document.querySelector('.logout-btn').addEventListener('click', function (e) {
                e.preventDefault();
                var logoutModal = new bootstrap.Modal(document.getElementById('logoutModal'));
                logoutModal.show();
            });
        });
    </script>
</body>

</html>