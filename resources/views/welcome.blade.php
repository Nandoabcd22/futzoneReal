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
                        <li clas    s="nav-item">
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
<section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container text-center text-white">
        <div class="row justify-content-center">
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
    
    {{-- CHATBOX --}}<!-- Add this HTML code in your body section --><!-- Chat Widget -->
    <div class="futzone-chat-widget">
      <div class="chat-widget-container">
        <div class="chat-widget-header">
          <div class="header-left">
            <div class="online-indicator"></div>
            <div class="header-icon">⚽</div>
            <h4>FutZone AI</h4>
          </div>
          <div class="header-actions">
            <button class="minimize-btn" id="minimizeChat">_</button>
            <button class="close-btn" id="closeChat">×</button>
          </div>
        </div>
        
        <div class="chat-widget-body" id="chatMessages">
          <div class="chat-date-divider">
            <span>Hari Ini</span>
          </div>
          
          <div class="chat-message bot-message">
            <div class="message-bubble">
              <p id="welcomeMessage"></p>
              <span class="message-time">10:03 AM</span>
            </div>
          </div>
          
          <div class="typing-indicator">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        
        <div class="quick-replies-container">
          <div class="quick-replies">
            <button class="quick-reply-btn" data-message="Cara booking lapangan?"><i class="fas fa-calendar-check"></i> Booking</button>
            <button class="quick-reply-btn" data-message="Promo"><i class="fas fa-tags"></i> Promo</button>
            <button class="quick-reply-btn" data-message="Jam operasional"><i class="fas fa-clock"></i> Jam</button>
            <button class="quick-reply-btn" data-message="Lokasi FutZone"><i class="fas fa-map-marker-alt"></i> Lokasi</button>
            <button class="quick-reply-btn" data-message="Harga lapangan"><i class="fas fa-money-bill"></i> Harga</button>
          </div>
        </div>
        
        <div class="chat-widget-footer">
          <div class="message-input-container">
            <input type="text" id="messageInput" placeholder="Ketik pesan Anda..." class="message-input">
          </div>
          <button class="send-message-btn" id="sendMessage">
            <i class="fas fa-paper-plane"></i>
          </button>
        </div>
      </div>
      
      <div class="chat-widget-button" id="toggleChat">
        <div class="chat-icon">
          <i class="fas fa-comments"></i>
        </div>
      </div>
    </div>
    
    <!-- Chat Widget Styles -->
    <style>
      .futzone-chat-widget {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;
        font-family: 'Poppins', sans-serif;
      }
      
      .chat-widget-container {
        width: 350px;
        height: 450px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        overflow: hidden;
        display: flex;
        flex-direction: column;
        transform-origin: bottom right;
        transform: scale(0);
        opacity: 0;
        transition: transform 0.3s ease, opacity 0.3s ease;
        border: 3px solid #15803d; /* Added green border */
      }
      
      .chat-widget-container.active {
        transform: scale(1);
        opacity: 1;
      }
      
      .chat-widget-header {
        background: white;
        color: #333;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #e5e7eb;
      }
      
      .header-left {
        display: flex;
        align-items: center;
        gap: 10px;
      }
      
      .online-indicator {
        width: 10px;
        height: 10px;
        background-color: #10b981;
        border-radius: 50%;
        box-shadow: 0 0 0 2px rgba(255,255,255,0.5);
      }
      
      .header-icon {
        font-size: 18px;
      }
      
      .header-left h4 {
        margin: 0;
        font-weight: 600;
        font-size: 16px;
        color: #333;
      }
      
      .header-actions {
        display: flex;
        gap: 5px;
      }
      
      .header-actions button {
        background: #f3f4f6;
        border: none;
        color: #333;
        width: 24px;
        height: 24px;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.2s;
      }
      
      .header-actions button:hover {
        background: #e5e7eb;
      }
      
      .chat-widget-body {
        flex: 1;
        padding: 20px;
        overflow-y: auto;
        background-color: #f9fafb;
        display: flex;
        flex-direction: column;
        gap: 15px;
      }
      
      .chat-date-divider {
        text-align: center;
        margin: 10px 0;
        position: relative;
      }
      
      .chat-date-divider:before {
        content: '';
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        height: 1px;
        background: #e5e7eb;
        z-index: 1;
      }
      
      .chat-date-divider span {
        background: #f9fafb;
        padding: 0 10px;
        font-size: 12px;
        color: #9ca3af;
        position: relative;
        z-index: 2;
      }
      
      .chat-message {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        max-width: 80%;
      }
      
      .bot-message {
        align-self: flex-start;
      }
      
      .user-message {
        align-self: flex-end;
        flex-direction: row-reverse;
      }
      
      .message-bubble {
        background: white;
        border-radius: 18px;
        padding: 10px 15px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        position: relative;
      }
      
      .bot-message .message-bubble {
        border-top-left-radius: 4px;
      }
      
      .user-message .message-bubble {
        background: #dcfce7;
        border-top-right-radius: 4px;
      }
      
      .message-bubble p {
        margin: 0;
        font-size: 14px;
        line-height: 1.4;
      }
      
      .message-time {
        font-size: 10px;
        color: #9ca3af;
        display: block;
        margin-top: 5px;
        text-align: right;
      }
      
      .typing-indicator {
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 10px 15px;
        background: #f3f4f6;
        border-radius: 18px;
        width: fit-content;
        margin-top: 5px;
        opacity: 0;
        transition: opacity 0.3s;
      }
      
      .typing-indicator.active {
        opacity: 1;
      }
      
      .typing-indicator span {
        width: 6px;
        height: 6px;
        background: #9ca3af;
        border-radius: 50%;
        display: inline-block;
        animation: typing 1.5s infinite ease-in-out;
      }
      
      .typing-indicator span:nth-child(1) {
        animation-delay: 0s;
      }
      
      .typing-indicator span:nth-child(2) {
        animation-delay: 0.2s;
      }
      
      .typing-indicator span:nth-child(3) {
        animation-delay: 0.4s;
      }
      
      @keyframes typing {
        0%, 60%, 100% {
          transform: translateY(0);
        }
        30% {
          transform: translateY(-5px);
        }
      }
      
      .chat-widget-footer {
        padding: 15px;
        background: white;
        border-top: 1px solid #e5e7eb;
        display: flex;
        align-items: center;
        gap: 10px;
      }
      
      .message-input-container {
        flex: 1;
        position: relative;
        background: #f3f4f6;
        border-radius: 20px;
        overflow: hidden;
      }
      
      .message-input {
        width: 100%;
        border: none;
        padding: 10px 15px;
        background: transparent;
        outline: none;
        font-size: 14px;
      }
      
      .send-message-btn {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #15803d;
        border: none;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.2s;
      }
      
      .send-message-btn:hover {
        background: #166534;
      }
      
      /* New stop button style */
      .stop-message-btn {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        background: #ef4444;
        border: none;
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.2s;
      }
      
      .stop-message-btn:hover {
        background: #dc2626;
      }
      
      .chat-widget-button {
        position: absolute;
        bottom: 0;
        right: 0;
        background: #15803d;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        z-index: 9998;
      }
      
      .chat-widget-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 16px rgba(0,0,0,0.15);
      }
      
      .chat-icon {
        font-size: 24px;
      }
      
      /* Quick reply buttons - Fixed at bottom */
      .quick-replies-container {
        position: sticky;
        bottom: 0;
        background-color: rgba(249, 250, 251, 0.95);
        padding: 10px;
        border-top: 1px solid #e5e7eb;
        z-index: 10;
      }
      
      .quick-replies {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, auto);
        gap: 6px;
        max-width: 100%;
      }
      
      .quick-reply-btn {
        background-color: white;
        border: 1px solid #15803d;
        color: #15803d;
        padding: 6px 8px;
        border-radius: 16px;
        font-size: 11px;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        white-space: nowrap;
      }
      
      .quick-reply-btn i {
        font-size: 10px;
      }
      
      .quick-reply-btn:hover {
        background-color: #dcfce7;
      }
      
      /* Animation for chat button */
      @keyframes pulse {
        0% {
          transform: scale(1);
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        50% {
          transform: scale(1.05);
          box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        100% {
          transform: scale(1);
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
      }
      
      .chat-widget-button {
        animation: pulse 2s infinite;
      }
      
      /* Responsive styles */
      @media (max-width: 480px) {
        .chat-widget-container {
          width: 100%;
          height: 100%;
          border-radius: 0;
          position: fixed;
          bottom: 0;
          right: 0;
          z-index: 10000;
        }
        
        .chat-widget-button {
          bottom: 20px;
          right: 20px;
        }
      }
      
      /* Disable input during response */
      .message-input:disabled {
        cursor: not-allowed;
        opacity: 0.7;
      }
    </style>
    
    <!-- JavaScript for Chat Widget -->
    <script>
      // Konfigurasi AI Chatbot
      const chatbotConfig = {
        // Ganti ini dengan URL API AI Anda
        apiEndpoint: 'https://api.example.com/v1/chat/completions',
        // Kunci API Anda (dalam produksi, simpan di server backend, jangan di frontend)
        apiKey: 'YOUR_API_KEY',
        // Instruksi sistem untuk mengontrol perilaku dan pengetahuan chatbot
        systemPrompt: `
          Anda adalah asisten virtual FutZone, tempat penyewaan lapangan futsal terbaik.
          
          Informasi tentang FutZone:
          - Lokasi: Jl. Tidar No.17, Kloncing, Karangrejo, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68124
          - Telepon: 0895-3654-42639
          - Jam operasional: 07.00 - 23.30 setiap hari (Minggu: 07.00 - 23.00)
          
          Peraturan FutZone:
          - Untuk setiap pemesanan diharapkan register akun kemudian login
          - Harga sewa lapangan:
            * Pagi-Siang: Rp 85.000/jam
            * Sore-Malam: Rp 95.000/jam
          - Setiap pemesanan diwajibkan melakukan DP 50%
          - Konformasi pembatalan maksimal 24 jam sebelum bermain, jika lebih maka DP akan hangus
          - Untuk booking event skala besar minimal dilakukan 1 minggu sebelumnya
          - Tersedia 7 lapangan: 5 lapangan standar, 2 lapangan rumput vinyl dan lebih lebar
          
          Promo dan Membership:
          - Booking reguler: Setiap 10 kali pemesanan akan mendapatkan gratis sesi 1 jam dengan pilihan lapangan dan waktu bebas
          - Membership: Berlaku pada minimal 4 kali/jam dalam 1 bulan, konsumen mendapatkan diskon 10% dari total biaya
          - FutZone tidak menyediakan penyewaan atribut futsal
          
          Cara Booking:
          1. Register dan login di website futzone.id
          2. Pilih lapangan dan jadwal yang tersedia
          3. Lakukan pembayaran DP minimal 50%
          4. Konfirmasi pembayaran via WhatsApp 0895-3654-42639
          
          Fasilitas:
          - Kamar mandi & ruang ganti
          - Kantin dan area tunggu
          - Free WiFi
          - Tempat parkir luas
          
          Jawab pertanyaan pelanggan dengan ramah, informatif, dan sesuai konteks percakapan.
          Jika ada pertanyaan di luar informasi yang tersedia, sarankan untuk menghubungi nomor WhatsApp kami.
        `,
        // History untuk menyimpan konteks percakapan
        conversationHistory: []
      };
    
      document.addEventListener('DOMContentLoaded', function() {
        const toggleChatBtn = document.getElementById('toggleChat');
        const chatContainer = document.querySelector('.chat-widget-container');
        const closeBtn = document.getElementById('closeChat');
        const minimizeBtn = document.getElementById('minimizeChat');
        const messageInput = document.getElementById('messageInput');
        const sendMessageBtn = document.getElementById('sendMessage');
        const chatMessages = document.getElementById('chatMessages');
        const welcomeMessage = document.getElementById('welcomeMessage');
        
        // Update tanggal dan waktu sekarang
        const now = new Date();
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const dateString = now.toLocaleDateString('id-ID', options);
        
        // Update tanggal di divider
        const dateDivider = document.querySelector('.chat-date-divider span');
        dateDivider.textContent = dateString;
        
        // Animasi teks berjalan untuk welcome message
        const welcomeText = "Selamat datang di FutZone AI! Kami siap membantu Anda menemukan lapangan futsal terbaik. Ada yang bisa kami bantu hari ini?";
        
        // Variabel untuk melacak apakah chat sudah pernah dibuka
        let chatOpened = false;
        
        // Variabel untuk mengontrol animasi typing
        let isTyping = false;
        let stopTyping = false;
        let typingAnimation = null;
        
        // Fungsi animasi teks dengan kecepatan acak untuk efek lebih alami
        function animateText(element, text) {
          return new Promise((resolve) => {
            // Reset stop flag
            stopTyping = false;
            
            // Set typing flag
            isTyping = true;
            
            // Disable input during typing
            messageInput.disabled = true;
            
            // Change send button to stop button
            sendMessageBtn.innerHTML = '<i class="fas fa-stop"></i>';
            sendMessageBtn.classList.remove('send-message-btn');
            sendMessageBtn.classList.add('stop-message-btn');
            
            // Tampilkan indikator loading terlebih dahulu
            const typingIndicator = document.querySelector('.typing-indicator');
            typingIndicator.classList.add('active');
            
            // Delay sebelum mulai mengetik (simulasi loading)
            const loadingTimeout = setTimeout(() => {
              // Sembunyikan indikator loading
              typingIndicator.classList.remove('active');
              
              let index = 0;
              element.textContent = '';
              
              function typeNextChar() {
                if (index < text.length && !stopTyping) {
                  // Kecepatan acak untuk efek lebih natural
                  const speed = Math.random() * 30 + 20; // 20-50ms
                  
                  element.textContent += text.charAt(index);
                  index++;
                  typingAnimation = setTimeout(typeNextChar, speed);
                } else {
                  // Reset typing state
                  isTyping = false;
                  
                  // Re-enable input
                  messageInput.disabled = false;
                  
                  // Change stop button back to send button
                  sendMessageBtn.innerHTML = '<i class="fas fa-paper-plane"></i>';
                  sendMessageBtn.classList.remove('stop-message-btn');
                  sendMessageBtn.classList.add('send-message-btn');
                  
                  // Focus back to input
                  messageInput.focus();
                  
                  resolve();
                }
              }
              
              typeNextChar();
            }, 1000); // Loading selama 1 detik
            
            // If stop is pressed during loading phase
            sendMessageBtn.onclick = function() {
              if (isTyping) {
                clearTimeout(loadingTimeout);
                clearTimeout(typingAnimation);
                stopTyping = true;
                isTyping = false;
                
                // Sembunyikan indikator loading
                typingIndicator.classList.remove('active');
                
                // Re-enable input
                messageInput.disabled = false;
                
                // Change stop button back to send button
                sendMessageBtn.innerHTML = '<i class="fas fa-paper-plane"></i>';
                sendMessageBtn.classList.remove('stop-message-btn');
                sendMessageBtn.classList.add('send-message-btn');
                
                // Focus back to input
                messageInput.focus();
                
                // Reset click handler
                sendMessageBtn.onclick = sendMessage;
                
                resolve();
              }
            };
          });
        }
        
        // Toggle chat widget
        toggleChatBtn.addEventListener('click', function() {
          chatContainer.classList.add('active');
          toggleChatBtn.style.display = 'none'; // Sembunyikan tombol saat chat dibuka
          
          // Jika chat belum pernah dibuka sebelumnya
          if (!chatOpened) {
            // Animasi typing untuk welcome message
            animateText(welcomeMessage, welcomeText);
            chatOpened = true;
          }
        });
        
        // Close chat widget
        closeBtn.addEventListener('click', function() {
          chatContainer.classList.remove('active');
          // Tampilkan kembali tombol toggle saat chat ditutup
          toggleChatBtn.style.display = 'flex';
        });
        
        // Minimize chat widget
        minimizeBtn.addEventListener('click', function() {
          chatContainer.classList.remove('active');
          // Tampilkan kembali tombol toggle saat chat diminimize
          toggleChatBtn.style.display = 'flex';
        });
        
        // Fungsi untuk mendapatkan waktu sekarang
        function getCurrentTime() {
          const now = new Date();
          const hours = now.getHours() % 12 || 12;
          const minutes = now.getMinutes().toString().padStart(2, '0');
          const ampm = now.getHours() >= 12 ? 'PM' : 'AM';
          return `${hours}:${minutes} ${ampm}`;
        }
        
        // Fungsi untuk mengirim pesan
        function sendMessage() {
          // If currently typing, this function acts as stop button
          if (isTyping) {
            stopTyping = true;
            return;
          }
          
          const messageText = messageInput.value.trim();
          if (messageText === '') return;
          
          // Get current time
          const timeString = getCurrentTime();
          
          // Create user message
          const userMessage = document.createElement('div');
          userMessage.className = 'chat-message user-message';
          userMessage.innerHTML = `
            <div class="message-bubble">
              <p>${messageText}</p>
              <span class="message-time">${timeString}</span>
            </div>
          `;
          
          // Add message to chat
          chatMessages.appendChild(userMessage);
          
          // Clear input
          messageInput.value = '';
          
          // Scroll to bottom
          chatMessages.scrollTop = chatMessages.scrollHeight;
          
          // Dapatkan respons - untuk demo gunakan getDemoResponse
          const botResponse = getDemoResponse(messageText);
          
          // Create bot response element
          const botMessage = document.createElement('div');
          botMessage.className = 'chat-message bot-message';
          const botMessageContent = document.createElement('div');
          botMessageContent.className = 'message-bubble';
          
          const responseText = document.createElement('p');
          botMessageContent.appendChild(responseText);
          
          const timeElement = document.createElement('span');
          timeElement.className = 'message-time';
          timeElement.textContent = timeString;
          botMessageContent.appendChild(timeElement);
          
          botMessage.appendChild(botMessageContent);
          chatMessages.appendChild(botMessage);
          
          // Animasi typing untuk respons bot
          animateText(responseText, botResponse).then(() => {
            // Scroll to bottom setelah animasi selesai
            chatMessages.scrollTop = chatMessages.scrollHeight;
          });
        }
        
        // DEMO MODE - Simulasi respons tanpa API
        function getDemoResponse(userMessage) {
          userMessage = userMessage.toLowerCase();
          
          if (userMessage.includes('booking') || userMessage.includes('pesan') || userMessage.includes('cara')) {
            return "Untuk booking lapangan di FutZone, silakan ikuti langkah berikut:\n\n1. Register dan login di website kami\n2. Pilih lapangan dan jadwal yang tersedia\n3. Lakukan pembayaran DP minimal 50%\n4. Konfirmasi pembayaran via WhatsApp 0895-3654-42639\n\nPerlu diingat bahwa pembatalan harus dilakukan maksimal 24 jam sebelum jadwal bermain.";
          }
          else if (userMessage.includes('harga') || userMessage.includes('biaya') || userMessage.includes('tarif')) {
            return "Harga sewa lapangan FutZone:\n\n- Pagi-Siang: Rp 85.000/jam\n- Sore-Malam: Rp 95.000/jam\n\nTersedia 7 lapangan (5 standar dan 2 lapangan rumput vinyl yang lebih lebar).";
          }
          else if (userMessage.includes('jam') || userMessage.includes('buka') || userMessage.includes('operasional')) {
            return "FutZone buka setiap hari dengan jadwal berikut:\n\n- Senin - Sabtu: 07.00 - 23.30 WIB\n- Minggu: 07.00 - 23.00 WIB\n\nSilakan booking lebih awal untuk mendapatkan jadwal terbaik!";
          }
          else if (userMessage.includes('lokasi') || userMessage.includes('alamat') || userMessage.includes('dimana')) {
            return "FutZone berlokasi di Jl. Tidar No.17, Kloncing, Karangrejo, Kec. Sumbersari, Kabupaten Jember, Jawa Timur 68124.\n\nUntuk reservasi, silakan hubungi kami di 0895-3654-42639.";
          }
          else if (userMessage.includes('promo') || userMessage.includes('diskon') || userMessage.includes('membership')) {
            return "Promo FutZone:\n\n1. Booking reguler: Setiap 10 kali pemesanan mendapatkan gratis 1 jam\n2. Membership: Minimal 4 jam/bulan dapatkan diskon 10% untuk semua pemesanan";
          }
          else {
            return "Terima kasih telah menghubungi FutZone. Ada yang bisa kami bantu terkait pemesanan lapangan futsal? Untuk informasi lebih lanjut, silakan hubungi kami di WhatsApp 0895-3654-42639.";
          }
        }
        
        // Send message on button click
        sendMessageBtn.addEventListener('click', sendMessage);
        
        // Send message on Enter key
        messageInput.addEventListener('keypress', function(e) {
          if (e.key === 'Enter' && !isTyping) {
            sendMessage();
          }
        });
        
        // Quick reply buttons
        const quickReplyButtons = document.querySelectorAll('.quick-reply-btn');
        quickReplyButtons.forEach(button => {
          button.addEventListener('click', function() {
            // Only proceed if not currently typing
            if (!isTyping) {
              const message = this.getAttribute('data-message');
              messageInput.value = message;
              sendMessage();
            }
          });
        });
        
        // Selalu tampilkan toggle button saat halaman dimuat
        toggleChatBtn.style.display = 'flex';
      });
    </script>
    </body>
</html>