<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with LeadMark landing page.">
    <meta name="author" content="Devcrud">
    <title>WebGIS Kerawanan DBD di Kota Depok</title>
    <link rel="icon" type="image/x-icon" href="<?=base_url()?>assets/logodepok.png">
    <!-- font icons -->
    <link rel="stylesheet" href="<?=base_url()?>assets/web/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + LeadMark main styles -->
	<link rel="stylesheet" href="<?=base_url()?>assets/web/css/leadmark.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- page Navigation -->
    <nav class="navbar custom-navbar navbar-expand-md navbar-light fixed-top" data-spy="affix" data-offset-top="10">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="<?=base_url()?>assets/logodepok.png" alt="">
            </a>
            <b style="text-indent: 10px;color:black;"> WebGIS DBD Kota Depok</b>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">                     
                    <li class="nav-item">
                        <a class="nav-link" href="#service">Parameter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#dbd" class="ml-4 nav-link btn btn-primary btn-sm rounded">Peta Kerawanan DBD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#prioritas">Daftar Prioritas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Referensi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Second Navigation -->

    <!-- Page Header -->
    <header class="header">
        <div class="overlay"> 
                <img src="<?=base_url()?>/assets/web/imgs/mosquito2.jpg" class="img-thumbnail" alt="Logo Kesehatan" style="width: 200px; height: 200px; border-radius: 70%">
                <br>
                <br>
                <br>
                <h1 class="title">WebGIS Peta DBD Kota Depok</h1> 
                <h1 class="subtitle">Selamat Datang di Laman WebGIS Pemetaan Kerawanan DBD di Kota Depok</h1> 
        </div>  
        <div class="shape">
            <svg viewBox="0 0 1500 200">
                <path d="m 0,240 h 1500.4828 v -71.92164 c 0,0 -286.2763,-81.79324 -743.19024,-81.79324 C 300.37862,86.28512 0,168.07836 0,168.07836 Z"/>
            </svg>
        </div>  
        <div class="mouse-icon"><div class="wheel"></div></div>
    </header>
    <!-- End Of Page Header -->

    <!-- Service Section -->
    <section  id="service" class="section pt-0">
        <div class="container">
            <h6 class="section-title text-center">Parameter Kerawanan DBD</h6>
            <h6 class="section-subtitle text-center mb-5 pb-3">Berikut merupakan parameter yang digunakan untuk diolah dan menghasilkan informasi tentang daerah rawan DBD di Kota Depok</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">01</small>
                            <h5 class="card-title mt-3"> Jumlah Kasus DBD <h5>
                            <img src="<?=base_url()?>/assets/web/imgs/fever.jpg" class="img-thumbnail" alt="Logo Kasus DBD" style="width: 60px; height: 60px; border-radius: 70%">
                            <p class="mb-0" style="text-align: justify">Jumlah kasus DBD berpengaruh dalam menentukan tingkat kerawanan DBD berdasarkan hasil dari penelitian-penelitian sebelumnya. Daerah dengan jumlah kasus DBD yang tinggi berpotensi menjadi daerah rawan persebaran penyakit DBD dengan tingkat yang tinggi (Yuliana et al., 2021). Data jumlah kasus DBD didapat dari Buku Profil Kesehatan Kota Depok Tahun 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">02</small>
                            <h5 class="card-title mt-3">Kepadatan Penduduk<h5>
                            <img src="<?=base_url()?>/assets/web/imgs/popul.jpg" class="img-thumbnail" alt="Logo Kasus DBD" style="width: 60px; height: 60px; border-radius: 70%">
                            <p class="mb-0" style="text-align: justify">Faktor kepadatan penduduk mempengaruhi proses penularan atau penjangkitan penyakit lain. Tanpa adanya tindakan preventif yang tepat, semakin tinggi kepadatan penduduk maka menyebabkan semakin cepat perkembangbiakan virus sehingga dapat mengakibatkan terjadinya peningkatan kasus (Kusumawati & Sukendra, 2020). Data kepadatan penduduk didapat dari BPS tahun 2020</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <small class="text-primary font-weight-bold">03</small>
                            <h5 class="card-title mt-3">Land Surface Temperature<h5>
                            <img src="<?=base_url()?>/assets/web/imgs/temp.jpg" class="img-thumbnail" alt="Logo Kasus DBD" style="width: 60px; height: 60px; border-radius: 70%">
                            <p class="mb-0" style="text-align: justify">Berdasarkan penelitian yang dilakukan oleh Irma et al., (2021), terdapat korelasi antara suhu permukaan dengan kejadian DBD karena suhu yang hangat dapat menjadi tempat berkembangbiak bagi nyamuk, khususnya jenis aedes aegypti. Suhu permukaan tanah diperoleh dari citra Landsat-8 daerah Kota Depok tahun 2020. </p>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
    <!-- End OF Service Section -->

    <!-- About Section -->
    <section class="section" id="about">
            <div class="container" style="width: 1500px; height: 600px;border: 0px solid black;">
                <div class="row justify-content-between">
                    <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                        <h6 class="section-title mb-0">Tahukah kamu bahaya wabah DBD? </h6>
                        <h6 class="section-subtitle mb-4">Mari kita ulas detailnya!</h6>
                        <p style="text-align: justify">Demam berdarah atau DBD adalah penyakit yang menular melalui nyamuk yang terjadi di daerah tropis dan subtropis di dunia. Gejala DBD yang umum adalah demam tinggi dan gejala seperti flu. Sementara itu, pada demam berdarah yang parah, kondisi ini bisa menyebabkan pendarahan serius, penurunan tekanan darah secara tiba-tiba (syok) dan bahkan kematian. Jutaan kasus infeksi demam berdarah dengue terjadi di seluruh dunia setiap tahunnya. Demam berdarah paling sering terjadi di Asia Tenggara, pulau-pulau Pasifik barat, Amerika Latin dan Afrika.</p>
                        <img src="<?=base_url()?>assets/web/imgs/waspadadbd.png" alt="" class="w-100 mt-3 shadow-sm">
                    </div>
                    <div class="col-md-6 pl-md-5">
                        <div class="row">
                            <div class="col-6">
                                <img src="<?=base_url()?>assets/web/imgs/nyamukdbd.png" alt="" class="w-100 shadow-sm">
                            </div>
                            <div class="col-6">
                                <img src="<?=base_url()?>assets/web/imgs/nyamukdbd2.png" alt="" class="w-100 shadow-sm" width="400" height="245">
                            </div>
                            <div class="col-12 mt-4">
                                <p style="text-align:justify">Secara tampilan, nyamuk ini cukup mudah dikenali dengan warnanya yang belang hitam-putih dengan ciri fisiknya yang kecil. Mereka tidak suka mendiami tempat yang kotor, melainkan menyasar tempat-tempat bersih, seperti bak mandi.</p>
                                <p><strong>Tanda dan Gejala Demam Berdarah Dengue</strong><br>
                                </p>
                                <p style="text-align:justify">Gejala DBD umumnya ditandai dengan demam tinggi hingga 39 derajat Celcius. Kondisi ini akan bertahan selama 2-7 hari, setelah itu mengalami penurunan drastis. Selain demam tinggi, berikut ada pula beberapa tanda dan gejala DBD adalah:</p>
                                <ul>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Sakit kepala</span></li>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Mual hingga muntah</span></li>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Nyeri di belakang mata, tulang, dan otot</span></li>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Muncul ruam kulit atau bercak kemerahan di kulit</span></li>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Radang tenggorokan yang diiringi dengan sulit menelan dan minum</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </section>
        <!-- End OF About Section -->

        
    <!-- Peta Kerawanan DBD -->
    <section id="dbd" class="important">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="titlepage">
    <h1 class="section-title text-center">WebGIS Kerawanan DBD di Kota Depok</h1>
    </div>
    </div>
    </div>
    </div>
    <div class="important_bg">
    <!--- Memanggil Web --->
    <iframe src="<?=base_url()?>/home" width="1910" height="900"></iframe>
    </div>
    </div>
    <!-- End OF About Section -->

    <!-- Daftar Prioritas Section -->
    <section class="section" id="prioritas">
            <div class="container" style="width: 1500px; height: 600px;border: 0px solid black;">
                <div class="row justify-content-between">
                    <div class="col-md-6 pr-md-5 mb-4 mb-md-0">
                        <h6 class="section-title mb-0">Daftar Kelurahan Prioritas Penanganan Wabah DBD </h6>
                        <h6 class="section-subtitle mb-4">Let's Check it out!</h6>
                        <p style="text-align: justify">Berikut merupakan hasil pengolahan dari peta akhir, yakni Peta Tingkat Kerawanana DBD di Kota Depok.</p>
                        <img src="<?=base_url()?>assets/web/imgs/tabelrev.png" alt="" class="w-100 mt-3 shadow-sm">
                    </div>
                    <div class="col-md-6 pl-md-5">
                        <div class="row">
                            <div class="col-12 mt-4">
                                <p style="text-align:justify">Secara keseluruhan, dari 63 kelurahan, prioritas penanganan DBD difokuskan kepada 11 kelurahan yang terdapat tingkat kerawanan tinggi. Urutan prioritas dapat dilihat pada Tabel 7. Kelurahan dengan prioritas penanganan tertinggi adalah Beji.
Hasil dari tingkat kerawanan DBD bervariasi, hal ini dipengaruhi oleh hasil skoring dari tiap masing-masing daerah. Menurut hasil skoring tersebut, tingkat kerawanan dibagi menjadi empat kelas, yaitu tidak rawan, cukup rawan, rawan, dan sangat rawan. hasil pemetaan kerawanan DBD Kota Depok, dari 63 kelurahan terdapat sebelas kelurahan dengan tingkat kerawanan yang tinggi. tingkat kerawanan tersebut dapat ditentukan wilayah mana yang menjadi prioritas penanganan wabah DBD. Kelurahan Beji, Pancoran Mas, Tugu, Mekar Jaya, Sukamaju, Depok, Depok Jaya, Abadi Jaya, Bakti Jaya, Kemiri Muka, dan Bojong Pondok Terong merupakan daerah dengan tingkat kerawanan yang sangat tinggi. 
</p>
                                <p><strong>5 Kelurahan Prioritas Penanganan DBD di Kota Depok</strong><br>
                                </p>
                                <p style="text-align:justify">Berdasarkan hasil pengolahan peta akhir yang dicantumkan pada tabel disamping, dapat diketahui 5 kelurahan prioritas untuk penanganan DBD di Kota Depok, yakni:</p>
                                <ul>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Kelurahan Beji: 100% wilayah tergolong dalam area sangat rawan DBD</span></li>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Kelurahan Pancoran Mas: 99,41% wilayah tergolong dalam area sangat rawan DBD</span></li>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Kelurahan Tugu: 97,93% wilayah tergolong dalam area sangat rawan DBD</span></li>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Kelurahan Mekar Jaya: 90,54% wilayah tergolong dalam area sangat rawan DBD</span></li>
                                    <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400; font-size: 9pt;">Kelurahan Sukamaju: 88,67% wilayah tergolong dalam area sangat rawan DBD</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </section>
        <!-- End OF About Section -->

    <!-- Referensi Section -->
    <section class="section" id="blog">
        <div class="container">
            <h6 class="section-title mb-0 text-center">Artikel & Web Referensi</h6>
            <h6 class="section-subtitle mb-5 text-center">Berikut merupakan artikel referensi yang dapat dibaca terkait analisis spasial untuk pemetaan kerawananan DBD dan informasi terkait DBD</h6>

            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="<?=base_url()?>assets/web/imgs/yuliana.png" alt="" class="card-img-top w-100" style="width: 325px; height: 325px">
                        <div class="card-body">                         
                            <h6 class="card-title" style="text-align:justify">Peran Sains Informasi Geografi dalam Analisis Spasial Persebaran Daerah Rawan Penyakit DBD di Kota Depok</h6>
                            <p>Yuliana, R., Rahmaniati, M., Apriantini, I., & Triarjunet, R. (2022).</p>
                            <a href="https://jurnal.unismuhpalu.ac.id/index.php/MPPKI/article/view/2278" target="_blank">Go To The Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="<?=base_url()?>assets/web/imgs/ardy.png" alt="" class="card-img-top w-100" style="width: 325px; height: 325px">
                        <div class="card-body">                         
                            <h6 class="card-title" style="text-align:justify"  target="_blank"> Pemetaaan Kerawanan dan Penentuan Prioritas Penanganan Penyakit Demam Berdarah Dengue di Kota Padang</h5>
                            <p>Ardy, A. M., Wijaya, A., & Fadilla, R. (2023).</p>
                            <a href="http://jurnal.ukmpenelitianuny.id/index.php/jippm/article/view/286" target="_blank">Go To The Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 mb-4">
                        <img src="<?=base_url()?>assets/web/imgs/alodok.png" alt="" class="card-img-top w-100" style="width: 325px; height: 325px">
                        <div class="card-body">                         
                            <h6 class="card-title" style="text-align:justify">Demam Berdarah - Gejala, Penyebab, dan Pengobatan</h6>
                            <p>Alodokter, 2023</p>
                            <a href="https://www.alodokter.com/demam-berdarah" target="_blank">Go To The Web</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Referensi Section -->

    <!-- Kontak Section -->
    <section class="section" id="testmonial">
        <div class="container">
            <h6 class="section-title text-center mb-0">Tentang Pembuat Web</h6>
            <h6 class="section-subtitle mb-5 text-center">Mari kenalan lebih dekat dengan pembuat WebGIS ini :></h6>
            <div class="row">
                <div class="col-md-4 my-3 my-md-0" style="width: 325px; height: 325px ;margin-left: 240px; margin-right: auto">
                    <div class="card" style="width: 650px; height: 355px;">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="<?=base_url()?>assets/web/imgs/arrafi.png" alt="" style="width: 200px; height: 200px">
                                <div class="media-body">
                                    <h2 class="mt-1 mb-0">Ar'rafi Malika Ardy</h2>
                                    <small class="text-muted mb-0">Mahasiswa Program Studi Sains Informasi Geografi '21</small>    
                                    <a href="mailto:arrafiardy0@upi.edu" target="_blank" style="color:black;opacity:50%;font-size:13px;">Email: arrafiardy0@upi.edu</a>    
                                    <br>
                                    <a href="https://www.instagram.com/arrafi.ardy/"><img src="<?=base_url()?>/assets/web/imgs/ig.png"  class="img-thumbnail" alt="Logo Kasus DBD" style="width: 35px; height: 35px; border-radius: 70%"></a>
                                    <a href="https://www.linkedin.com/in/ar-rafi-malika-ardy-a25b0a225/"><img src="<?=base_url()?>/assets/web/imgs/linkedin.png" class="img-thumbnail" alt="Logo Kasus DBD" style="width: 35px; height: 35px; border-radius: 70%"></a>
                                </div>
                            </div>
                            <p class="mb-0" style="text-align:justify">Ar'rafi melupakan seorang mahasiswa yang memiliki passion di bidang Web Development, Sistem Informasi Geografi, Penginderaan Jauh, dan Analisis Spasial. Saat ini ia sedang fokus untuk mengembangkan beberapa aplikasi dari materi yang didapat dari bangku kuliah, salah satunya adalah WebGIS yang kalian lihat sekarang.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->

   
            <footer class="mt-5 py-4 border-top border-secondary" style="background-color:black ; height: 60px">
                <p class="mb-0 small" style="color:white">&copy; <script>document.write(new Date().getFullYear())</script>, LeadMark Created By <a href="https://www.devcrud.com" target="_blank">DevCrud.</a>  All rights reserved </p>     
            </footer>
            <!-- End of Page Footer -->  
        </div>
    </section>
	
	<!-- core  -->
    <script src="<?=base_url()?>assets/web/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="<?=base_url()?>assets/web/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
	<script src="<?=base_url()?>assets/web/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope -->
    <script src="<?=base_url()?>assets/web/vendors/isotope/isotope.pkgd.js"></script>

    <!-- LeadMark js -->
    <script src="<?=base_url()?>assets/web/js/leadmark.js"></script>

</body>
</html>
