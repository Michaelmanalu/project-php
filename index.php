<?php 
session_start();
require_once('koneksi/database.php');
require_once('koneksi/auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MICHAEL MANALU PROFIL</title>
  <!-- bOOStap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- FOnt Google -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <!-- VENDOR -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->
  <link href="assets/boostrap/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/boxicons/css/boxicons.min.css" rel="stylesheet">

  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/503704af2c.js" crossorigin="anonymous"></script>
  <!-- Main css -->
  <link rel="stylesheet" href="main.css">

  <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-md-2">
            <a class="nav-link active" href="#">HOME</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#about">ABOUT</a>
          </li>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#resume">RESUME</a>
          <li class="nav-item mx-md-2">
            <a class="nav-link" href="#contact">CONTACT</a>
          </li>
          <?php if(checkLogin()) : ?>
                  <a href="admin.php" style="background: #FF9900;
    padding: 10px 35px;
    color: #fff;
    font-weight: 600;
    border-radius: 4px;" class="btn btn-contact">Admin</a>
              <?php else: ?>
                  <a href="login.php" style="background: #FF9900;
    padding: 10px 35px;
    color: #fff;
    font-weight: 600;
    border-radius: 4px;" class="btn btn-contact">Login</a>
                  
              <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>
  <header class="hero">
    <div class="container">
      <div id="particles-js"></div>
      <div class="section-hero" id="hero">


        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 align-self-center">
            <h1 class="animate__slideInDown">MICHAEL MANALU</h1>
            <h3>
              Hello I'm <span id="typed2"></span>
            </h3>

            <div class="text-center">
              <a href="#contact" class="btn btn-contact mt-2 mt-lg-4 " data-aos="fade-up"
                data-aos-duration="3000">CONTACT</a>
            </div>
          </div>
          <div class="col-lg-5 col-md-12 col-sm-12 align-self-center py-4 mx-auto d-block">
            <img src="assets/img/ux.png" class="img-animate img-fluid" alt="">
            <!-- <a href="https://storyset.com/web">Illustration by Freepik Storyset</a> -->
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <section class="section-about mt-4 py-4" id="about">
      <div class="container">
        <div class="card card-about shadow p- 3 py-4 ">
          <div class="row">
            <div class="col my-4">
              <h2 class="text-center">
                ABOUT
              </h2>
              <p class="text-center">Profil Pengenalan Diri</p>
            </div>
          </div>
          <div class="row px-5 py-4">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="img\Michaelmanalu.png" class="img-fluid">
            </div>
            <div data-aos="fade-up" data-aos-anchor-placement="center-center">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h4>JUNIOR DEVELOPER</h4>
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua.
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul type="none">
                    <li><i class="bi bi-chevron-right"></i> <strong>Nama:</strong> <span> Michael Manalu</span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Tanggal Lahir:</strong> <span>9 Januari 2000</span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Umur:</strong> <span>23 Tahun</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Asal:</strong> <span>Medan</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul type="none">
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>kaelmnl99@gmail.com</span>
                    </li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Pekerjaan:</strong> <span>Freelance</span></li>
                  </ul>

                </div>
              </div>
              <p>
                Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et
                ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque.
                Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium
                dolores.
              </p>
            </div>

          </div>
          <div class="row mt-5">
            <div class="col">
              <h3>FAMILIAR</h3>
            </div>
          </div>
          <div class="row py-4 px-2">

            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-down">
                <p class="text-center">HTML</p>

              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4" data-aos="fade-down">
              <div class="skill-box">
                <p class="text-center">CSS</p>
              </div>

            </div>
            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-down">
                <p class="text-center"> Java Script</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-down">
                <p class="text-center">Bootstrap</p>
              </div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col">
              <h3>TERTARIK/SUKA</h3>
            </div>

          </div>
          <div class="row py-4 px-2">

            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-up">
                <p class="text-center">Web Developer</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-up">
                <p class="text-center">Membaca</p>
              </div>

            </div>
            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-up">
                <p class="text-center">Berkebun</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-up">
                <p class="text-center">Beternak</p>
              </div>
            </div>
          </div>
          <div class="row pb-5 px-2">
            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-up">
                <p class="text-center">Marketing</p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-up">
                <p class="text-center">Futsal</p>
              </div>

            </div>
            <div class="col-lg-3 col-md-6 mt-4">
              <div class="skill-box" data-aos="fade-up">
                <p class="text-center">Lari</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-resume py-4" id="resume">
      <div class="container">
        <div class="card card-resume shadow p-3 py-4">
          <div class="row">
            <div class="col my-4">
              <h2 class="text-center">
                RESUME
              </h2>
              <p class="text-center">Pendidikan & Pengalaman</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 py-3">
              <h3>Pendidikan</h3>
              <div class="resume-item mt-3">
                <h4>Politeknik Pertanian Negeri Samarinda</h4>
                <span>2021 -</span>
                <h5>Teknologi Rekayasa Perangkat Lunak (TRPL)</h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem explicabo, ex fugit atque delectus
                  placeat neque architecto, optio corporis libero recusandae at possimus? Reprehenderit sit tenetur,
                  blanditiis eum cum dolor.
                </p>
              </div>
              <div class="resume-item">
                <h4>SMK 1 YAPIM MEDAN </h4>
                <span>2015 - 2018</span>
                <h5>Teknik Kendaraan Ringan</h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem explicabo, ex fugit atque delectus
                  placeat neque architecto, optio corporis libero recusandae at possimus? Reprehenderit sit tenetur,
                  blanditiis eum cum dolor.
                </p>
              </div>

            </div>
            <div class="col-lg-6 py-3">
              <h3>Pengalaman</h3>
              <?php
                $queryExp = "SELECT * FROM penglaman ORDER BY id ASC";
                $resultExp = mysqli_query($connectDb, $queryExp);
                
                while ($data = mysqli_fetch_array($resultExp)) : ?>
                  <div class="resume-item">
                    <h4><?= $data['nama_perusahaan']; ?></h4>
                    <span><?php 
                    $startDate = $data['mulai'];
                    echo date("Y", strtotime($startDate));
                    ?>
                    -
                    <?php 
                    $startEnd = $data['akhir'];
                    echo date("Y", strtotime($startEnd));
                    ?>   
                  </span>
                    <h5><?= $data['jabatan']; ?></h5>
                    <p>
                    <?= $data['deskripsi']; ?>
                    </p>
                  </div>
                  <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-contact py-4" id="contact">
      <div class="container">
        <div class="card card-contact shadow p-3 py-4 px-5">
          <div class="row">
            <div class="col my-4">
              <h2 class="text-center">
                CONTACT
              </h2>
              <p class="text-center">Hubungi kontak di Bawah Ini</p>
            </div>
          </div>
          <div class="row box-contact">

            <div class="col-md-6 d-flex align-items-stretch">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Alamat Tinggal</h3>
                <p>Jl. Soekarno Hatta Km.6 Loa Janan, Kalimantan Timur</p>
              </div>
            </div>


            <div class="col-md-6 mt-4 d-flex align-items-stretch">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Saya</h3>
                <p>kaelmnl99@gmail.com</p>
              </div>
            </div>
            <div class="col-md-6 mt-4 d-flex align-items-stretch">
              <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Hubungi</h3>
                <p>+62 822 6796 1368 </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <form action="contact-save.php " method="post" role="form" class="php-email-form needs-validation mt-4"
                novalidate >
                <div class="form-row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Your nama"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="col-md-6 form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                      data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subjek" id="subjek" placeholder="subjek"
                    data-rule="minlen:4" data-msg="Please enter at least 8 chars of subjek" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="pesan" rows="5" data-rule="required"
                    data-msg="Please write something for us" placeholder="pesan"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


  </main>
  <footer>
    <div class="container-fluid">
      <div class="card-footer">
        <div class="row justify-content-center footer-c">
          <p>Copyright 2023</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>


  <script src="assets/scripts/main.js"></script>
  <script>
    var typed2 = new Typed('#typed2', {
      strings: ['Michael Manalu,', 'Student At Politeknik Pertanian Negeri Samarinda.'],
      typeSpeed: 0,
      backSpeed: 0,
      fadeOut: true,
      loop: true
    });
  </script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    particlesJS.load('particles-js', 'assets/particles.json', function () {
      console.log('callback - particles.js config loaded');
    });
  </script>
</body>

</html>