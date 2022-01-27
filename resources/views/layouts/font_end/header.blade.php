<!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      <!--  <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">  </a>
        <i class="bi bi-phone-fill phone-icon"></i>  -->
      </div>
      <!-- <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a> -->
      </div>
    </div>
  </section> 

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.php">SAMARN</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Room</a></li>
          <li><a class="nav-link scrollto" href="#services">About</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Idea</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Detail</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li class="dropdown"><a href="#"><span>Log in</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('login')}}">Log in</a></li>
              <li><a href="{{route('register')}}">Register</a></li>
              <!-- <li><a href="#">Drop Down 3</a></li> -->
             
            </ul>
          </li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->