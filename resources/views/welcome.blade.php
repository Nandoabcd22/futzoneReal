<!DOCTYPE html> 
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="shortcut icon" href="{{ asset('assets/icon/iconfix.png') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <title>Futzone</title>
        <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
        <script src="{{ asset('assets/js/scorll.js') }}"></script>
    </head>
 

    <body>
        
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-2 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h2 class="fw-bold text-success">FutZone</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#jadwal-lapangan">JADWAL LAPANGAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#lapangan-tersedia">LAPANGAN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" id="bookingLink">BOOKING</a>
                        </li>
                    </ul>
                    <div class="d-flex gap-3">
                        <a href="{{ route('login') }}" class="btn btn-outline-success">LOGIN</a>
                        <a href="{{ route('register') }}" class="btn btn-success">REGISTER</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        
        <!-- Hero Section -->
        <section id="hero" class="d-flex align-items-center">
            <div class="container text-white">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>Welcome To</h3>
                        <h1 class="display-3 fw-bold mb-4">FutZone</h1>
                        <p class="lead mb-4">Mudah, Praktis dan anda dapat melihat ketersediaan jadwal, memilih lapangan, serta melakukan pembayaran secara digital tanpa perlu datang langsung ke lokasi.</p>
                        <a href="#" class="btn btn-success btn-lg" id="heroBookingBtn">Booking</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->
        
       <!-- About Section -->
<section id="about" class="py-5">
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-6">
              <div class="image-container">
                  <img src="{{asset('assets/image/bg2.png')}}" alt="FutZone Building" class="img-fluid rounded">
              </div>
          </div>
          <div class="col-lg-6 ps-lg-5 mt-4 mt-lg-0">
              <div class="about-content">
                  <h6 class="text-uppercase fw-bold text-success mb-1">Sejarah</h6>
                  <h2 class="display-5 fw-bold mb-4">FutZone</h2>
                  <p class="mb-3">Didirikan untuk memenuhi kebutuhan akan lapangan futsal berkualitas, kami telah berkembang menjadi tempat favorit para pecinta futsal.</p>
                  <p>Dengan fasilitas modern dan layanan terbaik, kami terus berkomitmen memberikan pengalaman bermain yang nyaman dan menyenangkan.</p>
              </div>
          </div>
      </div>
  </div>
</section>
        <!-- Fields Section -->
<section id="lapangan-tersedia" class="py-5">
  <div class="container">
      <h2 class="text-center mb-5">Lapangan Tersedia</h2>
      
      <div class="fields-container">
          <div class="fields-wrapper">
              <!-- Field 1 -->
              <div class="field-card">
                  <div class="card h-100 shadow">
                      <img src="{{asset('assets/image/lp1.jpeg')}}" class="card-img-top" alt="Lapangan 1">
                      <div class="card-body text-center">
                          <h5 class="card-title">Lapangan 1 - Lantai Vinyl ukuran large 38m x 18m </h5>
                          <p class="card-text">Lapangan premium dengan permukaan vinyl berkualitas tinggi. Ideal untuk permainan cepat dan teknik tinggi.</p>
                          <div class="pricing mb-3">
                              <span class="price-tag">Rp100.000/jam</span> <small>(07.00-16.00 WIB)</small><br>
                              <span class="price-tag">Rp135.000/jam</span> <small>(17.00-22.00 WIB)</small>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Field 2 -->
              <div class="field-card">
                  <div class="card h-100 shadow">
                      <img src="{{asset('assets/image/2.jpeg')}}" class="card-img-top" alt="Lapangan 2">
                      <div class="card-body text-center">
                          <h5 class="card-title">Lapangan 2 - Rumput Sintetis ukuran 25m x 15m </h5>
                          <p class="card-text">Rasakan pengalaman bermain di rumput sintetis berkualitas. Mengurangi risiko cedera dan nyaman untuk bermain.</p>
                          <div class="pricing mb-3">
                              <span class="price-tag">Rp100.000/jam</span> <small>(07.00-16.00 WIB)</small><br>
                              <span class="price-tag">Rp135.000/jam</span> <small>(17.00-22.00 WIB)</small>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Field 3 -->
              <div class="field-card">
                  <div class="card h-100 shadow">
                      <img src="{{asset('assets/image/3.jpeg')}}" class="card-img-top" alt="Lapangan 3">
                      <div class="card-body text-center">
                          <h5 class="card-title">Lapangan 3 - Lantai vinyl standart 25m x 15m </h5>
                          <p class="card-text">Lapangan premium dengan permukaan vinyl berkualitas tinggi. Ideal untuk permainan cepat dan teknik tinggi.</</p>
                          <div class="pricing mb-3">
                              <span class="price-tag">Rp60.000/jam</span> <small>(07.00-16.00 WIB)</small><br>
                              <span class="price-tag">Rp110.000/jam</span> <small>(17.00-22.00 WIB)</small>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Field 4 -->
              <div class="field-card">
                  <div class="card h-100 shadow">
                      <img src="{{asset('assets/image/3.jpeg')}}" class="card-img-top" alt="Lapangan 4">
                      <div class="card-body text-center">
                          <h5 class="card-title">Lapangan 4 - Lantai vinyl standart 25m x 15m </h5>
                          <p class="card-text">Lapangan premium dengan permukaan vinyl berkualitas tinggi. Ideal untuk permainan cepat dan teknik tinggi.</p>
                          <div class="pricing mb-3">
                              <span class="price-tag">Rp60.000/jam</span> <small>(07.00-16.00 WIB)</small><br>
                              <span class="price-tag">Rp110.000/jam</span> <small>(17.00-22.00 WIB)</small>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Field 5 -->
              <div class="field-card">
                  <div class="card h-100 shadow">
                      <img src="{{asset('assets/image/3.jpeg')}}" class="card-img-top" alt="Lapangan 5">
                      <div class="card-body text-center">
                          <h5 class="card-title">Lapangan 5 - Lantai vinyl standart 25m x 15m </h5>
                          <p class="card-text">Lapangan premium dengan permukaan vinyl berkualitas tinggi. Ideal untuk permainan cepat dan teknik tinggi.</p>
                          <div class="pricing mb-3">
                              <span class="price-tag">Rp60.000/jam</span> <small>(07.00-16.00 WIB)</small><br>
                              <span class="price-tag">Rp110.000/jam</span> <small>(17.00-22.00 WIB)</small>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Field 6 -->
              <div class="field-card">
                  <div class="card h-100 shadow">
                      <img src="{{asset('assets/image/3.jpeg')}}" class="card-img-top" alt="Lapangan 6">
                      <div class="card-body text-center">
                          <h5 class="card-title">Lapangan 6 - Lantai vinyl standart 25m x 15m </h5>
                          <p class="card-text">Lapangan premium dengan permukaan vinyl berkualitas tinggi. Ideal untuk permainan cepat dan teknik tinggi.</p>
                          <div class="pricing mb-3">
                              <span class="price-tag">Rp60.000/jam</span> <small>(07.00-16.00 WIB)</small><br>
                              <span class="price-tag">Rp110.000/jam</span> <small>(17.00-22.00 WIB)</small>
                          </div>
                      </div>
                  </div>
              </div>
              
              <!-- Field 7 -->
              <div class="field-card">
                  <div class="card h-100 shadow">
                      <img src="{{asset('assets/image/3.jpeg')}}" class="card-img-top" alt="Lapangan 7">
                      <div class="card-body text-center">
                          <h5 class="card-title">Lapangan 7 - Lantai vinyl standart 25m x 15m </h5>
                          <p class="card-text">Lapangan premium dengan permukaan vinyl berkualitas tinggi. Ideal untuk permainan cepat dan teknik tinggi.</p>
                          <div class="pricing mb-3">
                              <span class="price-tag">Rp1Rp60.000/jam</span> <small>(07.00-16.00 WIB)</small><br>
                              <span class="price-tag">Rp110.000/jam</span> <small>(17.00-22.00 WIB)</small>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          
          <!-- Navigation arrows -->
          <div class="field-nav">
              <button class="field-prev"><i class="fas fa-chevron-left"></i></button>
              <button class="field-next"><i class="fas fa-chevron-right"></i></button>
          </div>
      </div>
  </div>
</section>
<!-- End Fields Section -->

        <!-- Booking Info Section -->
        <section id="booking-info" class="py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">KETENTUAN DAN INFORMASI PEMESANAN FOTZONE</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="info-list">
                            <li>Untuk Setiap pemesanan diharapkan register akun kemudian login.</li>
                            <li>Harga sewa lapangan pada hari/malam [pagi-siang] & [sore-malam]: Rp.85.000/jam [malam] & Rp.95.000/jam [malam].</li>
                            <li>Setiap Pemesanan diwajibkan melakukan DP 50%.</li>
                            <li>Konformasi pembatalan maksimal 24jam sebelum bermain, jika lebih maka DP akan hangus.</li>
                            <li>Untuk booking event skala besar minimal dilakukan 1 minggu sebelumnya</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="info-list">
                            <li>Tersedia 7 lapangan, 5 lapangan untuk standar, 2 lapangan untuk rumput vinyl dan lebih lebar.</li>
                            <li>Untuk pemesanan booking reguler, setiap 10 kali pemesanan maka akan mendapatkan gratis sesi 1jam dengan pilihan lapangan dan waktu yang bebas</li>
                            <li>Membership berlaku pada minimal 4 kali/jam dalam 1 bulan, serta konsumen mendapatkan diskon sebesar 10% dari total biaya.</li>
                            <li>Tidak menyediakan penyewaan atribut futsal.</li>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Booking Info Section -->

<!-- Schedule Section -->
<section id="jadwal-lapangan" class="py-5">
    <div class="container">
        <!-- Section Title -->
        <h2 class="section-title">Jadwal Lapangan</h2>
        
        <!-- Calendar Header -->
        <div class="calendar-container">
            <div class="calendar-header">
                <h4>Kalender</h4>
                <div class="filter-date">
                    <label for="date-picker">Tanggal:</label>
                    <input type="date" class="date-picker" id="date-picker" value="2025-04-28">
                </div>
            </div>
            <div class="selected-date-display" id="selected-date-display">
                Jadwal untuk: <span id="formatted-date">28 April 2025</span>
            </div>
        </div>
        
        <!-- Legend -->
        <div class="schedule-legend">
            <div class="legend-container">
                <div class="legend-item">
                    <span class="legend-color available"></span>
                    <span class="legend-text">Tersedia</span>
                </div>
                <div class="legend-item">
                    <span class="legend-color booked"></span>
                    <span class="legend-text">Terisi</span>
                </div>
            </div>
        </div>
            
        <!-- Schedule Table -->
        <div class="table-responsive-container">
            <div class="table-responsive">
                <table class="schedule-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>07.00</th>
                            <th>08.00</th>
                            <th>09.00</th>
                            <th>10.00</th>
                            <th>11.00</th>
                            <th>12.00</th>
                            <th>13.00</th>
                            <th>14.00</th>
                            <th>15.00</th>
                            <th>16.00</th>
                            <th>17.00</th>
                            <th>18.00</th>
                            <th>19.00</th>
                            <th>20.00</th>
                            <th>21.00</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="field-name">Lapangan 1</td>
                            <td class="time-slot" data-field="1" data-time="07.00"></td>
                            <td class="time-slot" data-field="1" data-time="08.00"></td>
                            <td class="time-slot" data-field="1" data-time="09.00"></td>
                            <td class="time-slot booked-cell" data-field="1" data-time="10.00">
                                <span class="booked-info">Tim A</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="1" data-time="11.00">
                                <span class="booked-info">Tim A</span>
                            </td>
                            <td class="time-slot" data-field="1" data-time="12.00"></td>
                            <td class="time-slot" data-field="1" data-time="13.00"></td>
                            <td class="time-slot" data-field="1" data-time="14.00"></td>
                            <td class="time-slot" data-field="1" data-time="15.00"></td>
                            <td class="time-slot" data-field="1" data-time="16.00"></td>
                            <td class="time-slot booked-cell" data-field="1" data-time="17.00">
                                <span class="booked-info">Tim B</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="1" data-time="18.00">
                                <span class="booked-info">Tim B</span>
                            </td>
                            <td class="time-slot" data-field="1" data-time="19.00"></td>
                            <td class="time-slot" data-field="1" data-time="20.00"></td>
                            <td class="time-slot" data-field="1" data-time="21.00"></td>
                        </tr>
                        <tr>
                            <td class="field-name">Lapangan 2</td>
                            <td class="time-slot" data-field="2" data-time="07.00"></td>
                            <td class="time-slot" data-field="2" data-time="08.00"></td>
                            <td class="time-slot" data-field="2" data-time="09.00"></td>
                            <td class="time-slot" data-field="2" data-time="10.00"></td>
                            <td class="time-slot" data-field="2" data-time="11.00"></td>
                            <td class="time-slot" data-field="2" data-time="12.00"></td>
                            <td class="time-slot" data-field="2" data-time="13.00"></td>
                            <td class="time-slot" data-field="2" data-time="14.00"></td>
                            <td class="time-slot booked-cell" data-field="2" data-time="15.00">
                                <span class="booked-info">Tim C</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="2" data-time="16.00">
                                <span class="booked-info">Tim C</span>
                            </td>
                            <td class="time-slot" data-field="2" data-time="17.00"></td>
                            <td class="time-slot" data-field="2" data-time="18.00"></td>
                            <td class="time-slot booked-cell" data-field="2" data-time="19.00">
                                <span class="booked-info">Tim D</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="2" data-time="20.00">
                                <span class="booked-info">Tim D</span>
                            </td>
                            <td class="time-slot" data-field="2" data-time="21.00"></td>
                        </tr>
                        <tr>
                            <td class="field-name">Lapangan 3</td>
                            <td class="time-slot" data-field="3" data-time="07.00"></td>
                            <td class="time-slot booked-cell" data-field="3" data-time="08.00">
                                <span class="booked-info">Tim E</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="3" data-time="09.00">
                                <span class="booked-info">Tim E</span>
                            </td>
                            <td class="time-slot" data-field="3" data-time="10.00"></td>
                            <td class="time-slot" data-field="3" data-time="11.00"></td>
                            <td class="time-slot" data-field="3" data-time="12.00"></td>
                            <td class="time-slot" data-field="3" data-time="13.00"></td>
                            <td class="time-slot" data-field="3" data-time="14.00"></td>
                            <td class="time-slot" data-field="3" data-time="15.00"></td>
                            <td class="time-slot" data-field="3" data-time="16.00"></td>
                            <td class="time-slot" data-field="3" data-time="17.00"></td>
                            <td class="time-slot" data-field="3" data-time="18.00"></td>
                            <td class="time-slot" data-field="3" data-time="19.00"></td>
                            <td class="time-slot" data-field="3" data-time="20.00"></td>
                            <td class="time-slot" data-field="3" data-time="21.00"></td>
                        </tr>
                        <tr>
                            <td class="field-name">Lapangan 4</td>
                            <td class="time-slot" data-field="4" data-time="07.00"></td>
                            <td class="time-slot" data-field="4" data-time="08.00"></td>
                            <td class="time-slot" data-field="4" data-time="09.00"></td>
                            <td class="time-slot" data-field="4" data-time="10.00"></td>
                            <td class="time-slot" data-field="4" data-time="11.00"></td>
                            <td class="time-slot" data-field="4" data-time="12.00"></td>
                            <td class="time-slot booked-cell" data-field="4" data-time="13.00">
                                <span class="booked-info">Tim F</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="4" data-time="14.00">
                                <span class="booked-info">Tim F</span>
                            </td>
                            <td class="time-slot" data-field="4" data-time="15.00"></td>
                            <td class="time-slot" data-field="4" data-time="16.00"></td>
                            <td class="time-slot" data-field="4" data-time="17.00"></td>
                            <td class="time-slot" data-field="4" data-time="18.00"></td>
                            <td class="time-slot" data-field="4" data-time="19.00"></td>
                            <td class="time-slot" data-field="4" data-time="20.00"></td>
                            <td class="time-slot" data-field="4" data-time="21.00"></td>
                        </tr>
                        <tr>
                            <td class="field-name">Lapangan 5</td>
                            <td class="time-slot" data-field="5" data-time="07.00"></td>
                            <td class="time-slot" data-field="5" data-time="08.00"></td>
                            <td class="time-slot" data-field="5" data-time="09.00"></td>
                            <td class="time-slot" data-field="5" data-time="10.00"></td>
                            <td class="time-slot" data-field="5" data-time="11.00"></td>
                            <td class="time-slot" data-field="5" data-time="12.00"></td>
                            <td class="time-slot" data-field="5" data-time="13.00"></td>
                            <td class="time-slot" data-field="5" data-time="14.00"></td>
                            <td class="time-slot" data-field="5" data-time="15.00"></td>
                            <td class="time-slot" data-field="5" data-time="16.00"></td>
                            <td class="time-slot booked-cell" data-field="5" data-time="17.00">
                                <span class="booked-info">Tim G</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="5" data-time="18.00">
                                <span class="booked-info">Tim G</span>
                            </td>
                            <td class="time-slot" data-field="5" data-time="19.00"></td>
                            <td class="time-slot" data-field="5" data-time="20.00"></td>
                            <td class="time-slot" data-field="5" data-time="21.00"></td>
                        </tr>
                        <tr>
                            <td class="field-name">Lapangan 6</td>
                            <td class="time-slot" data-field="6" data-time="07.00"></td>
                            <td class="time-slot" data-field="6" data-time="08.00"></td>
                            <td class="time-slot" data-field="6" data-time="09.00"></td>
                            <td class="time-slot booked-cell" data-field="6" data-time="10.00">
                                <span class="booked-info">Tim H</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="6" data-time="11.00">
                                <span class="booked-info">Tim H</span>
                            </td>
                            <td class="time-slot" data-field="6" data-time="12.00"></td>
                            <td class="time-slot" data-field="6" data-time="13.00"></td>
                            <td class="time-slot" data-field="6" data-time="14.00"></td>
                            <td class="time-slot" data-field="6" data-time="15.00"></td>
                            <td class="time-slot" data-field="6" data-time="16.00"></td>
                            <td class="time-slot" data-field="6" data-time="17.00"></td>
                            <td class="time-slot" data-field="6" data-time="18.00"></td>
                            <td class="time-slot booked-cell" data-field="6" data-time="19.00">
                                <span class="booked-info">Tim I</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="6" data-time="20.00">
                                <span class="booked-info">Tim I</span>
                            </td>
                            <td class="time-slot" data-field="6" data-time="21.00"></td>
                        </tr>
                        <tr>
                            <td class="field-name">Lapangan 7</td>
                            <td class="time-slot booked-cell" data-field="7" data-time="07.00">
                                <span class="booked-info">Tim J</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="7" data-time="08.00">
                                <span class="booked-info">Tim J</span>
                            </td>
                            <td class="time-slot" data-field="7" data-time="09.00"></td>
                            <td class="time-slot" data-field="7" data-time="10.00"></td>
                            <td class="time-slot" data-field="7" data-time="11.00"></td>
                            <td class="time-slot" data-field="7" data-time="12.00"></td>
                            <td class="time-slot" data-field="7" data-time="13.00"></td>
                            <td class="time-slot" data-field="7" data-time="14.00"></td>
                            <td class="time-slot" data-field="7" data-time="15.00"></td>
                            <td class="time-slot" data-field="7" data-time="16.00"></td>
                            <td class="time-slot booked-cell" data-field="7" data-time="17.00">
                                <span class="booked-info">Tim K</span>
                            </td>
                            <td class="time-slot booked-cell" data-field="7" data-time="18.00">
                                <span class="booked-info">Tim K</span>
                            </td>
                            <td class="time-slot" data-field="7" data-time="19.00"></td>
                            <td class="time-slot" data-field="7" data-time="20.00"></td>
                            <td class="time-slot" data-field="7" data-time="21.00"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const datePicker = document.getElementById('date-picker');
    const formattedDateElement = document.getElementById('formatted-date');
    
    // Function to format date in Indonesian format
    function formatDateIndonesian(dateString) {
        const date = new Date(dateString);
        const day = date.getDate();
        const monthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                           'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        const month = monthNames[date.getMonth()];
        const year = date.getFullYear();
        
        return `${day} ${month} ${year}`;
    }
    
    // Initialize with current date
    formattedDateElement.textContent = formatDateIndonesian(datePicker.value);
    
    // Update when date changes
    datePicker.addEventListener('change', function() {
        formattedDateElement.textContent = formatDateIndonesian(this.value);
        console.log(`Schedule updated for: ${this.value}`);
    });
});
</script>
        <!-- Gallery Section -->
        <section id="gallery" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <img src="{{asset('assets/image/d1.jpeg')}}" alt="Gallery Image" class="img-fluid rounded">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="{{asset('assets/image/d2.jpeg')}}" alt="Gallery Image" class="img-fluid rounded">
                    </div>
                    <div class="col-md-4 mb-4">
                        <img src="{{asset('assets/image/d3.jpeg')}}" alt="Gallery Image" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Gallery Section -->
        
        <!-- Footer -->
        <footer class="bg-success text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <i class="fas fa-map-marker-alt me-2"></i>
                            <span>Jl. tidar, Kecamatan Sumbersari, Kabupaten Jember, Jawa Timur 69116, Indonesia</span>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-phone me-2"></i>
                            <span>+62 895 3654 24539</span>
                        </div>
                        <div class="mb-3">
                            <i class="fas fa-envelope me-2"></i>
                            <span>futzone@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <h2 class="mb-3">FutZone</h2>
                        <p>Kami menyediakan lapangan permainan berkualitas untuk bermain yang nyaman dan aman. Dengan lapangan berkualitas, kami memastikan anda mendapat pengalaman bermain terbaik.</p>
                        <div class="social-icons">
                            <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Login Required Modal -->
        <div class="modal fade" id="loginRequiredModal" tabindex="-1" aria-labelledby="loginRequiredModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginRequiredModalLabel">Login Diperlukan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Anda harus login terlebih dahulu untuk melakukan booking lapangan.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-outline-success">Register</a>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
        
        <script>
            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        if (this.getAttribute('href') !== '#' &&
            this.getAttribute('id') !== 'bookingLink' &&
            this.getAttribute('id') !== 'heroBookingBtn') {

            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const navbarHeight = document.querySelector('.navbar')?.offsetHeight || 0;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - navbarHeight;

                smoothScrollTo(targetPosition);
            }
        }
    });
});

function smoothScrollTo(targetPosition, duration = 800) {
    const start = window.pageYOffset;
    const distance = targetPosition - start;
    let startTime = null;

    function animation(currentTime) {
        if (startTime === null) startTime = currentTime;
        const timeElapsed = currentTime - startTime;

        const run = easeInOutQuad(timeElapsed, start, distance, duration);
        window.scrollTo(0, run);

        if (timeElapsed < duration) requestAnimationFrame(animation);
    }

    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(animation);
}

            
            // Show login modal for booking links
            document.addEventListener('DOMContentLoaded', function() {
                const bookingLink = document.getElementById('bookingLink');
                const heroBookingBtn = document.getElementById('heroBookingBtn');
                const loginRequiredModal = new bootstrap.Modal(document.getElementById('loginRequiredModal'));
                
                if (bookingLink) {
                    bookingLink.addEventListener('click', function(e) {
                        e.preventDefault();
                        loginRequiredModal.show();
                    });
                }
                
                if (heroBookingBtn) {
                    heroBookingBtn.addEventListener('click', function(e) {
                        e.preventDefault();
                        loginRequiredModal.show();
                    });
                }
            });
        </script>
    </body>
</html>