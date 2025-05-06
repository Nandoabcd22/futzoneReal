<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutZone - Booking Lapangan Sepak Bola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            overflow-x: hidden;
            margin: 0;
            padding: 0;
        }
        
        .header {
            background-color: #28a745;
            color: white;
            padding: 15px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        .container-fluid {
            padding: 0;
        }
        
        .sidebar {
            background-color: white;
            height: 100vh;
            padding: 20px;
            border-right: 1px solid #e9ecef;
            position: sticky;
            top: 0;
        }
        
        .main-content {
            padding: 0;
            background-color: white;
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }
        
        .content-area {
            padding: 20px;
            position: relative;
            z-index: 3;
        }
        
        .logo {
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #333;
        }
        
        .nav-link {
            color: #6c757d;
            padding: 10px 0;
            text-decoration: none;
            display: block;
        }
        
        .nav-link:hover, .nav-link.active {
            color: #28a745;
        }
        
        .dropdown-menu {
            width: 100%;
            padding: 0;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: 1px solid #e9ecef;
        }
        
        .dropdown-item {
            padding: 10px 15px;
        }
        
        .dropdown-item:hover {
            background-color: #f8f9fa;
            color: #28a745;
        }
        
        .dropdown-toggle::after {
            float: right;
            margin-top: 8px;
        }
        
        .green-shape {
            position: absolute;
            background-color: #28a745;
            border-radius: 25px;
            z-index: 1;
        }
        
        .shape-1 {
            width: 300px;
            height: 300px;
            transform: rotate(45deg);
            top: 100px;
            left: -100px;
        }
        
        .shape-2 {
            width: 150px;
            height: 150px;
            transform: rotate(45deg);
            top: 50px;
            right: 200px;
        }
        
        .shape-3 {
            width: 250px;
            height: 250px;
            transform: rotate(45deg);
            bottom: 50px;
            right: -50px;
        }
        
        .user-info {
            color: #333;
            font-weight: bold;
            text-align: right;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 10px;
        }
        
        .soccer-ball {
            position: absolute;
            width: 60px;
            height: 60px;
            z-index: 2;
        }
        
        .ball-1 {
            top: 100px;
            right: 100px;
        }
        
        .ball-2 {
            bottom: 100px;
            left: 100px;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }
        
        .header-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            font-weight: bold;
            font-size: 24px;
        }
    </style>
    @yield('styles')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('header-scripts')
</head>
<body>
    <!-- Header -->
    <div class="header">
        <div class="header-content">
            <div class="header-logo">
                <img src="https://cdn-icons-png.flaticon.com/512/53/53283.png" width="30" height="30" alt="Soccer Ball">
                FutZone
            </div>
            <div class="user-info" style="color: white;">
                {{ Auth::user()->name ?? 'CRISTIANO RONALDO' }}
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user/profile') ? 'active' : '' }}" href="{{ route('user.profile') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user/jadwal') ? 'active' : '' }}" href="{{ route('user.jadwal') }}">Jadwal Lapangan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="bookingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Booking
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="bookingDropdown">
                            <li><a class="dropdown-item" href="{{ route('user.booking.reguler') }}">Booking Reguler</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.booking.membership') }}">Booking Membership</a></li>
                            <li><a class="dropdown-item" href="{{ route('user.booking.event') }}">Booking Event</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user/pesanan') ? 'active' : '' }}" href="{{ route('user.pesanan') }}">Pesanan / Riwayat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('user/password') ? 'active' : '' }}" href="{{ route('user.password') }}">Ubah Password</a>
                    </li>
                    <li class="nav-item mt-5">
                        <a class="nav-link text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>

            <!-- Content Area -->
            <div class="col-md-9 col-lg-10 main-content">
                <!-- Green shapes -->
                <div class="green-shape shape-1"></div>
                <div class="green-shape shape-2"></div>
                <div class="green-shape shape-3"></div>

                <!-- Soccer balls -->
                <img src="https://cdn-icons-png.flaticon.com/512/53/53283.png" class="soccer-ball ball-1" alt="Soccer Ball">
                <img src="https://cdn-icons-png.flaticon.com/512/53/53283.png" class="soccer-ball ball-2" alt="Soccer Ball">

                <div class="content-area">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @yield('scripts')
</body>
</html>