<!DOCTYPE html>
<html lang="en">

<head>
    <title>SDN Citraland 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
    <link rel="stylesheet" href="css/landing/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/landing/animate.css">
    <link rel="stylesheet" href="css/landing/owl.carousel.min.css">
    <link rel="stylesheet" href="css/landing/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/landing/magnific-popup.css">
    <link rel="stylesheet" href="css/landing/aos.css">
    <link rel="stylesheet" href="css/landing/ionicons.min.css">
    <link rel="stylesheet" href="css/landing/flaticon.css">
    <link rel="stylesheet" href="css/landing/icomoon.css">
    <link rel="stylesheet" href="css/landing/style.css">
  </head>
  <body>
	<div class="py-2 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-3 px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
			    		<div class="col-md-5 pr-4 d-flex topper align-items-center">
							<div class="icon bg-fifth mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-map-marker"></span></div>
						    <span class="text" style="white-space: nowrap;">198 Jalan Barat 21, Citraland Gang 5</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon bg-secondary mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-envelope"></span></div>
						    <span class="text">email77@email.com</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
							<div class="icon bg-tertiary mr-2 d-flex justify-content-center align-items-center"><span class="fa fa-phone"></span></div>
						    <span class="text">+62 8789 76892</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
		<div class="container d-flex align-items-center">
			<a class="navbar-brand" href="index.html">SDN CITRALAND 5 SURABAYA</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto" >
					<li class="nav-item active"><a href="index.html" class="nav-link pl-0">Beranda</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link" style="white-space: nowrap;">Tentang Kami</a></li>
					<li class="nav-item"><a href="teacher.html" class="nav-link">Pengajar</a></li>
					<li class="nav-item"><a href="ekstrakulikuler.html" class="nav-link">Ekstrakulikuler</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Kontak</a></li>
					<li class="nav-item">
						<a href="{{ route('akun.login') }}" class="nav-link" style="text-decoration: underline; color: blue; transition: color 0.3s ease;" 
						   onmouseover="this.style.color='darkblue'" onmouseout="this.style.color='blue'">Login</a>
					  </li>
					  <li class="nav-item">
						<a href="{{ route('akun.register') }}" class="nav-link" style="text-decoration: underline; color: rgb(9, 21, 254); white-space: nowrap; transition: color 0.3s ease;" 
						   onmouseover="this.style.color='darkblue'" onmouseout="this.style.color='blue'">Register akun</a>
					  </li>					  
				</ul>
			</div>         
		</div>
	</nav>		
	<!-- MENGGanti semua file harus sama seperti ini -->
    <!-- END nav -->
    
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url('{{ asset('image/landing/Murid2.jpg') }}');">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
					<div class="col-md-8 text-center ftco-animate">
						<h1 class="mb-4">Anak-Anak Adalah <span>Penjelajah Terbaik di Dunia</span></h1>
						<p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Selengkapnya</a></p>
					</div>
				</div>
			</div>
		</div>
	
		<div class="slider-item" style="background-image:url('{{ asset('image/landing/Murid3.jpg') }}');">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
					<div class="col-md-8 text-center ftco-animate">
						<h1 class="mb-4">Pembelajaran Sempurna <span>Untuk Anak Anda</span></h1>
						<p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">Selengkapnya</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	<!-- RINGKASAN  -->

	<section class="ftco-services ftco-no-pb">
		<div class="container-wrap">
			<div class="row no-gutters">
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="fa fa-chalkboard-teacher"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Guru Bersertifikat</h3>
							<p>Guru-guru kami memiliki sertifikasi dan pelatihan yang memastikan mereka dapat memberikan pendidikan terbaik kepada siswa.</p>
						</div>
					</div>      
				</div>
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="fa fa-book-reader"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Bimbingan Ekstrakurikuler</h3>
							<p>Kami menawarkan program ekstrakurikuler yang dirancang khusus untuk mengembangkan potensi setiap anak di luar kurikulum akademis.</p>
						</div>
					</div>    
				</div>				
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="fa fa-book"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Buku &amp; Perpustakaan</h3>
							<p>Koleksi buku yang lengkap dan fasilitas perpustakaan yang nyaman untuk mendukung proses belajar anak.</p>
						</div>
					</div>      
				</div>
				<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
					<div class="media block-6 d-block text-center">
						<div class="icon d-flex justify-content-center align-items-center">
							<span class="fa fa-award"></span>
						</div>
						<div class="media-body p-2 mt-3">
							<h3 class="heading">Sertifikasi</h3>
							<p>
								Program sertifikasi yang memberikan pengakuan atas pencapaian dan kemajuan anak dalam pendidikan.
							</p>
						</div>
					</div>      
				</div>
			</div>
		</div>
	</section>
	
	<!-- TENTANG KAMI -->
	<<section class="ftco-section ftco-no-pt ftco-no-pb">
		<div class="container">
		  <div class="row">
			<div class="col-md-5 order-md-last wrap-about py-5 wrap-about bg-light">
			  <div class="text px-4 ftco-animate">
				<h2 class="mb-4">Selamat Datang di Sekolah CITRALAND 5 SURABAYA</h2>
				<p>Kami berkomitmen untuk memberikan pendidikan berkualitas tinggi yang menginspirasi dan memberdayakan setiap siswa. Di sini, siswa kami menikmati pengalaman belajar yang holistik dan beragam, didukung oleh pengajar yang berpengalaman dan penuh dedikasi.</p>
				<p>Sekolah kami terletak di lingkungan yang indah dan tenang, jauh dari kebisingan kota, memberikan suasana belajar yang kondusif dan menyenangkan. Kami percaya bahwa setiap anak memiliki potensi unik yang harus dikembangkan dengan baik.</p>
				<p><a href="#" class="btn btn-secondary px-4 py-3">Baca Selengkapnya</a></p>
			  </div>
			</div>
			<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
			  <h2 class="mb-4">Keunggulan yang Kami Tawarkan</h2>
			  <p>Kami menawarkan berbagai program dan fasilitas yang dirancang untuk mendukung perkembangan akademis dan non-akademis siswa. Dari keamanan hingga kegiatan ekstrakurikuler, kami memastikan setiap siswa mendapatkan perhatian dan dukungan yang mereka butuhkan.</p>
			  <div class="row mt-5">
				<div class="col-lg-6">
				  <div class="services-2 d-flex">
					<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-shield-alt"></span></div>
					<div class="text">
					  <h3>Keamanan Utama</h3>
					  <p>Kami mengutamakan keamanan dan kesejahteraan siswa kami dengan sistem keamanan yang canggih dan staf yang terlatih.</p>
					</div>
				  </div>
				</div>
				<div class="col-lg-6">
				  <div class="services-2 d-flex">
				  	<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-book-reader"></span></div>
					<div class="text">
					  <h3>Kelas Interaktif</h3>
					  <p>Kelas kami dirancang untuk memberikan pengalaman belajar yang interaktif dan menyenangkan dengan kurikulum yang sesuai dengan kebutuhan siswa.</p>
					</div>
				  </div>
				</div>
				<div class="col-lg-6">
				  <div class="services-2 d-flex">
				  	<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-award"></span></div>
					<div class="text">
					  <h3>Guru Bersertifikat</h3>
					  <p>Guru-guru kami memiliki sertifikasi dan pelatihan yang memastikan mereka dapat memberikan pendidikan terbaik kepada siswa.</p>
					</div>
				  </div>
				</div>
				<div class="col-lg-6">
				  <div class="services-2 d-flex">
				  	<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-school"></span></div>
					<div class="text">
					  <h3>Kelas yang Nyaman</h3>
					  <p>Kami menyediakan ruang kelas yang nyaman dan dilengkapi dengan fasilitas modern untuk mendukung proses belajar mengajar.</p>
					</div>
				  </div>
				</div>
				<div class="col-lg-6">
				  <div class="services-2 d-flex">
				  <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-puzzle-piece"></span></div>
					<div class="text">
					  <h3>Pelajaran Kreatif</h3>
					  <p>Kami menawarkan pelajaran kreatif yang mendorong siswa untuk berpikir out-of-the-box dan mengembangkan imajinasi mereka.</p>
					</div>
				  </div>
				</div>
				<div class="col-lg-6">
				  <div class="services-2 d-flex">
				  	<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="fa fa-child"></span></div>
					<div class="text">
					  <h3>Fasilitas Olahraga</h3>
					  <p>Kami menyediakan fasilitas olahraga yang lengkap untuk mendukung perkembangan fisik dan kesehatan siswa.</p>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>  

<!-- GURU SERTIFIKASI -->
<section class="ftco-section ftco-no-pb">
	<div class="container">
	  <div class="row justify-content-center mb-5 pb-2">
		<div class="col-md-8 text-center heading-section ftco-animate">
		  <h2 class="mb-4"><span>Guru</span> Bersertifikat</h2>
		  <p>Terpisah mereka tinggal di. Sebuah sungai kecil bernama Duden mengalir di dekat tempat mereka dan menyediakan kebutuhan mereka dengan peraturan yang diperlukan. Ini adalah negara paradisematik</p>
		</div>
	  </div>
	  <section class="row">
		<div class="col-md-6 col-lg-3 ftco-animate">
		  <div class="staff">
			<div class="img-wrap d-flex align-items-stretch">
			  <div class="img align-self-stretch" style="background-image: url('{{ asset('image/landing/teacher-1.jpg') }}');"></div>
			</div>
			<div class="text pt-3 text-center">
			  <h3>Bianca Wilson</h3>
			  <span class="position mb-2">Guru Matematika</span>
			  <div class="faded">
				<p>Saya memiliki pengalaman lebih dari 10 tahun dalam mengajar matematika dan selalu berusaha memberikan pemahaman yang mendalam kepada siswa saya.</p>
				<ul class="ftco-social text-center">
					<li class="ftco-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
		  <div class="staff">
			<div class="img-wrap d-flex align-items-stretch">
			  <div class="img align-self-stretch" style="background-image: url('{{ asset('image/landing/teacher-2.jpg') }}');"></div>
			</div>
			<div class="text pt-3 text-center">
			  <h3>Mitch Parker</h3>
			  <span class="position mb-2">Guru Bahasa Inggris</span>
			  <div class="faded">
				<p>Saya berfokus pada pembelajaran Bahasa Inggris dengan metode interaktif yang membuat siswa merasa nyaman dan percaya diri.</p>
				<ul class="ftco-social text-center">
					<li class="ftco-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
		  <div class="staff">
			<div class="img-wrap d-flex align-items-stretch">
			  <div class="img align-self-stretch" style="background-image: url('{{ asset('image/landing/teacher-3.jpg') }}');"></div>
			</div>
			<div class="text pt-3 text-center">
			  <h3>Stella Smith</h3>
			  <span class="position mb-2">Guru Seni</span>
			  <div class="faded">
				<p>Saya sangat bersemangat dalam mengembangkan kreativitas siswa melalui berbagai kegiatan seni rupa dan desain grafis.</p>
				<ul class="ftco-social text-center">
					<li class="ftco-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
		<div class="col-md-6 col-lg-3 ftco-animate">
		  <div class="staff">
			<div class="img-wrap d-flex align-items-stretch">
			  <div class="img align-self-stretch" style="background-image: url('{{ asset('image/landing/person_4.jpg') }}');"></div>
			</div>
			<div class="text pt-3 text-center">
			  <h3>Monshe Henderson</h3>
			  <span class="position mb-2">Guru Sains</span>
			  <div class="faded">
				<p>Saya berkomitmen untuk membawa pengetahuan ilmiah kepada siswa dengan cara yang menyenangkan dan mudah dimengerti.</p>
				<ul class="ftco-social text-center">
					<li class="ftco-animate"><a href="#"><i class="fab fa-twitter"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
					<li class="ftco-animate"><a href="#"><i class="fab fa-instagram"></i></a></li>
				</ul>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	</div>
  </section>  

<!--EKSTRAKULIKULER  -->
<section class="ftco-section">
	<div class="container">
	  <div class="row justify-content-center mb-5 pb-2">
		<div class="col-md-8 text-center heading-section ftco-animate">
		  <h2 class="mb-4" style="white-space: nowrap;"><span>Ekstrakurikuler</span> Sekolah</h2>
		  <p>Kami mempunyai berbagai kegiatan ekstrakurikuler yang menarik dan bermanfaat untuk mengembangkan bakat dan minat siswa. Mulai dari klub seni,dan olahraga, setiap kegiatan dirancang untuk memfasilitasi perkembangan siswa. Bergabunglah dengan kami dan temukan passion Anda di lingkungan yang mendukung dan inspiratif.</p>
		</div>
	  </div>
  
  
	  <section class="ftco-section">
		<div class="container">
		  <div class="row">
			<div class="col-md-6 course d-lg-flex ftco-animate">
			  <div class="img" style="background-image: url('{{ asset('image/landing/course-1.jpg') }}');"></div>
			  <div class="text bg-light p-4">
				<h3><a href="#">Ekstrakulikuler Menggambar</a></h3>
				<p class="subheading"><span>Waktu Kelas:</span> 10:00 - 11:00</p>
				<p>Ekstrakulikuler Seni kami memberikan kesempatan bagi siswa untuk mengeksplorasi berbagai bentuk seni, seperti lukisan, patung, dan seni grafis. Program ini dirancang untuk membangkitkan kreativitas dan ekspresi artistik siswa melalui kegiatan seni yang menyenangkan dan mendidik.</p>
			  </div>
			</div>
			<div class="col-md-6 course d-lg-flex ftco-animate">
			  <div class="img" style="background-image: url('{{ asset('image/landing/Futsal.jpg') }}');"></div>
			  <div class="text bg-light p-4">
				<h3><a href="#">Ekstrakulikuler Futsal</a></h3>
				<p class="subheading"><span>Waktu Kelas:</span> 11:00 - 12:00</p>
				<p>Ekstrakulikuler Futsal kami mengajarkan teknik dasar futsal, strategi permainan, dan membangun semangat tim di antara para siswa. Program ini bertujuan untuk meningkatkan keterampilan bermain futsal serta kesehatan dan kebugaran fisik siswa.</p>
			  </div>
			</div>
			<div class="col-md-6 course d-lg-flex ftco-animate">
			  <div class="img" style="background-image: url('{{ asset('image/landing/Musik.jpg') }}');"></div>
			  <div class="text bg-light p-4">
				<h3><a href="#">Ekstrakulikuler Musik</a></h3>
				<p class="subheading"><span>Waktu Kelas:</span> 13:00 - 14:00</p>
				<p>Ekstrakulikuler Musik menawarkan berbagai pelajaran musik, mulai dari alat musik hingga vokal. Siswa dapat belajar bermain alat musik, menyanyi, dan berlatih dalam grup musik. Program ini mendukung perkembangan keterampilan musik dan apresiasi terhadap seni musik.</p>
			  </div>
			</div>
			<div class="col-md-6 course d-lg-flex ftco-animate">
			  <div class="img" style="background-image: url('{{ asset('image/landing/basket.jpg') }}');"></div>
			  <div class="text bg-light p-4">
				<h3><a href="#">Ekstrakulikuler Basket</a></h3>
				<p class="subheading"><span>Waktu Kelas:</span> 14:00 - 15:00</p>
				<p>Ekstrakulikuler Basket memberikan kesempatan bagi siswa untuk belajar teknik bermain basket, strategi permainan, serta meningkatkan keterampilan fisik dan kerja sama tim. Program ini juga mempromosikan olahraga sebagai aktivitas yang menyenangkan dan bermanfaat.</p>
			  </div>
			</div>
		  </div>
		</div>
	  </section>
	</div>		  
  </section>  
	
<!-- EXPERIENCE -->
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url('{{ asset('image/landing/bg_4.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
          <h2 class="mb-4"><span>20 Tahun</span> Pengalaman</h2>
          <p>Kami telah berkomitmen selama dua dekade untuk memberikan pendidikan yang unggul dan mendalam. Berada di tempat yang tenang, kami menciptakan lingkungan yang kondusif untuk belajar dan tumbuh bersama.</p>
        </div>
      </div>
      <div class="row d-md-flex align-items-center justify-content-center">
        <div class="col-lg-10">
          <div class="row d-md-flex align-items-center">
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="18">0</strong>
                  <span>Guru Bersertifikat</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="351">0</strong>
                  <span>Anak-Anak Berprestasi</span>
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="564">0</strong>
                  <span>Orang Tua Puas</span> 
                </div>
              </div>
            </div>
            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18">
                <div class="icon"><span class="flaticon-doctor"></span></div>
                <div class="text">
                  <strong class="number" data-number="300">0</strong>
                  <span>Penghargaan Diraih</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!-- Bagian Testimonial -->
  <section class="ftco-section testimony-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-2">
        <div class="col-md-8 text-center heading-section ftco-animate">
          <span class="subheading">Testimoni</span>
          <h2 class="mb-4"><span>"Kata Orang Tua</span> Tentang Kami"</h2>
          <p>Orang tua dan siswa kami adalah bagian penting dari komunitas kami. Berikut adalah beberapa kata mereka tentang pengalaman mereka bersama kami.</p>
        </div>
      </div>
      <div class="row ftco-animate justify-content-center">
        <div class="col-md-12">
          <div class="carousel-testimony owl-carousel">
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url('{{ asset('image/landing/Orang_tua1.jpg') }}')">
                </div>
                <div class="text ml-2 bg-light">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>"Anak saya sangat menikmati waktu mereka di sini. Guru-guru yang ramah dan lingkungan yang mendukung sangat membantu perkembangan mereka."</p>
                  <p class="name">Racky Gerung</p>
                  <span class="position">Ayah</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url('{{ asset('image/landing/Orang_tua2.jpg') }}')">
                </div>
                <div class="text ml-2 bg-light">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>"Sekolah ini sangat mendukung kreativitas dan rasa ingin tahu anak-anak. Mereka selalu datang dengan senyuman dan cerita baru setiap hari."</p>
                  <p class="name">Maria milea</p>
                  <span class="position">Ibu</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url('{{ asset('image/landing/Orang_tua4.jpg') }}')">
                </div>
                <div class="text ml-2 bg-light">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>"Lingkungan yang aman dan nyaman membuat saya tenang setiap kali meninggalkan anak-anak di sekolah. Stafnya sangat peduli dan profesional."</p>
                  <p class="name">Mark Sitanggang</p>
                  <span class="position">Ayah</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url('{{ asset('image/landing/Orang_tua3.jpg') }}')">
                </div>
                <div class="text ml-2 bg-light">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>"Program pendidikan yang disediakan sangat luar biasa. Anak saya berkembang pesat baik secara akademis maupun sosial."</p>
                  <p class="name">Pedro Ribeiro</p>
                  <span class="position">Ayah</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap d-flex">
                <div class="user-img mr-4" style="background-image: url('{{ asset('image/landing/Orang_tua5.jpg') }}');">
                </div>
                <div class="text ml-2 bg-light">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                  <p>"Saya sangat menghargai pendekatan personal yang diterapkan oleh sekolah ini. Setiap anak dianggap istimewa dan didukung sesuai kebutuhan mereka."</p>
                  <p class="name">Ancika Rosy</p>
                  <span class="position">Ibu</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>  

		<section class="ftco-gallery">
    		<div class="container-wrap">
    			<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="images/Siswa1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('image/landing/Siswa1.jpg') }}');">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="fab fa-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/Siswa2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('image/landing/Siswa2.jpg') }}');">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="fab fa-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/Siswa3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('image/landing/Siswa3.jpg') }}');">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="fab fa-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/Murid3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url('{{ asset('image/landing/Murid3.jpg') }}');">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="fab fa-instagram"></span>
    					</div>
						</a>
					</div>
        		</div>
    		</div>
    </section>

<!-- FOOTER -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2">Ada Pertanyaan?</h2>
            <div class="block-23 mb-3">
              <ul>
			  	<li><a href=""><span class="fa fa-map-marker-alt"></span><span class="text">198 Jalan Barat 21, Citraland Gang 5</span></a>
				</li>
				<li><a href="#"><span class="fa fa-phone"></span><span class="text">+62 8789 76892</span></a></li>
				<li><a href="#"><span class="fa fa-envelope"></span><span class="text">email77@email.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5 ml-md-4">
            <h2 class="ftco-heading-2">Tautan</h2>
            <ul class="list-unstyled">
				<li><a href="index.html"><span class="fa fa-chevron-circle-right mr-2"></span>Beranda</a></li>
				<li><a href="about.html"><span class="fa fa-chevron-circle-right mr-2"></span>Tentang Kami</a></li>
				<li><a href="teacher.html"><span class="fa fa-chevron-circle-right mr-2"></span>Pengajar</a></li>
				<li><a href="courses.html"><span class="fa fa-chevron-circle-right mr-2"></span>Ekstrakulikuler</a></li>
				<li><a href="contact.html"><span class="fa fa-chevron-circle-right mr-2"></span>Kontak</a></li>
            </ul>
          </div>
        </div>
  
        <div class="col-md-6 col-lg-3">
          <div class="ftco-footer-widget mb-5">
            <h2 class="ftco-heading-2 mb-0">Terhubung Dengan Kami</h2>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
				<li class="ftco-animate"><a href="#"><span class="fab fa-twitter"></span></a></li>
				<li class="ftco-animate"><a href="#"><span class="fab fa-facebook"></span></a></li>
				<li class="ftco-animate"><a href="#"><span class="fab fa-instagram"></span></a></li>
			</ul>

          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            Hak Cipta SDN CITRALAND 5 SURABAYA &copy; <script>document.write(new Date().getFullYear());</script> Semua hak dilindungi undang-undang <i class="fa fa-heart" aria-hidden="true"></i> oleh <a href="https://www.kemdikbud.go.id/" target="_blank" style="text-decoration: underline;">Kemendikbud</a>
          </p>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- pemuat -->
  <div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
  </div>
  
  <script src="js/landing/jquery.min.js"></script>
  <script src="js/landing/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/landing/popper.min.js"></script>
  <script src="js/landing/bootstrap.min.js"></script>
  <script src="js/landing/jquery.easing.1.3.js"></script>
  <script src="js/landing/jquery.waypoints.min.js"></script>
  <script src="js/landing/jquery.stellar.min.js"></script>
  <script src="js/landing/owl.carousel.min.js"></script>
  <script src="js/landing/jquery.magnific-popup.min.js"></script>
  <script src="js/landing/aos.js"></script>
  <script src="js/landing/jquery.animateNumber.min.js"></script>
  <script src="js/landing/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/landing/main.js"></script>
  <script src="https://kit.fontawesome.com/44b7190b1c.js" crossorigin="anonymous"></script>
  </body>

  </html>
