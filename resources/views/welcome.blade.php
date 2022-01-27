@include('layouts.font_end.head')

<body>

@include('layouts.font_end.header')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Samarn mantion apartment</h1>
      <h2>ยินดีต้อนรับสู่เว็บไซต์อพาร์ทเม้นท์สมานแมนชั่น</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
            <img src="{{asset('front_end/assets/img/room1.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
            <h3>ภาพรวม</h3>
            <p class="fst-italic">
            Overview
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> มีห้องพักทั้งหมด 40 ห้อง</li>
              <li><i class="bi bi-check-circle"></i> มีขนาดตั้งแต่ 40 ตรม.ขึ้นไป</li>
              <li><i class="bi bi-check-circle"></i> มีอุปกรณ์อำนวยความสะดวกและความสบาย</li>
            </ul>
            <p>
            The rooms are equipped with kitchenware and amenities and has various
            electrical appliances and a bathroom inside The rooms are spacious, have a lot of space and are decorated.
            </p>
          </div>
        </div>
      </div>
    </section>




    <!-- End About Section -->
    <!-- ======= Clients Section ======= -->


    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>ABOUT</span>
          <h2>ABOUT</h2>
          <p>Information about the room</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-bed"></i></div>
              <h4><a href="">จัดการเรื่องที่นอน</a></h4>
              <p>เชื่อหรือไม่ว่าการเพียงแค่คุณจัดการให้เบาะนอนอยู่บนเตียง หรือแท่นที่นอน มันจะทำให้บรรยากาศของห้องดีขึ้น
              แตกต่างจากการวางเบาะนอนไว้บนพื้นเพียงอย่างเดียว</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-home"></i></div>
              <h4><a href="">การทำความสะอาดห้อง</a></h4>
              <p>แน่นอนว่าเจ้าของบ้าน หรือผู้เช่าคนเดิมอาจจะทำความสะอาดห้องไว้ให้ก่อนที่คุณจะเข้าไปเช่าเป็นคนต่อไป
               แต่ถ้าจะให้ดี คุณควรทำความสะอาดห้องอีกครั้ง ปัดฝุ่นเล็กๆ น้อยๆ</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-bath"></i></div>
              <h4><a href="">การจัดการห้องน้ำ</a></h4>
              <p>การเติมของใช้ต่างๆ เข้าไปในห้องน้ำ เช่นม่านกั้นห้องอาบน้ำ ผ้าเช็ดตัว สบู่ล้างมือ เจลอาบน้ำ แชมพู
            หรือแม้แต่แผ่นยางกันลื่น จะทำให้ห้องน้ำดูน่าใช้มากยิ่งขึ้น</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-music"></i></div>
              <h4><a href="">จัดมุมเสียงเพลง</a></h4>
              <p>การเพิ่มเสียงเพลงเข้าไปภายในห้องเช่า จะทำให้คุณรู้สึกเหมือนอยู่ภายในบ้านของตัวเอง</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">ติดตั้งระบบอินเทอร์เน็ต</a></h4>
              <p>ยุคสมัยนี้ใครๆ ก็ผูกติดอยู่กับโลกออนไลน์ การที่คุณย้ายออกจากบ้านเพื่อมาเช่าห้องอยู่ข้างนอก
                  คุณก็ควรจะติดตั้งอินเทอร์เน็ตไว้ภายในห้องพักของคุณเช่นกัน</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-sun"></i></div>
              <h4><a href="">แสงสว่างจากแสงเทียน</a></h4>
              <p>แสงสว่างจากเทียนหรือแม้แต่กลิ่นหอมจากเทียนหอม จะทำให้ให้คุณนึกถึงสถานที่ที่คุณเคยจากมาเป็นสถานที่สุดท้าย</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>IDEA</span>
          <h2>IDEA</h2>
          <p>Idea to make the room</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Luxury</li>
              <li data-filter=".filter-card">Dark</li>
              <li data-filter=".filter-web">Minimal</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

            @foreach($rooms as $room)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('admin/img/'.$room->image)}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{ $room->name }}</h4>
              <p>{{ $room->room_member }}</p>
              <a href="{{asset('admin/img/'.$room->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{ $room->name }}"><i class="bx bx-plus"></i></a>
              {{-- <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>                                                                                                                                                               --}}
            </div>
          </div>
          @endforeach

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('front_end/assets/img/portfolio/i2.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('front_end/assets/img/portfolio/i2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('front_end/assets/img/portfolio/i3.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="{{asset('front_end/assets/img/portfolio/i3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('front_end/assets/img/portfolio/i4.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="{{asset('front_end/assets/img/portfolio/i4.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('front_end/assets/img/portfolio/i10.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="{{asset('front_end/assets/img/portfolio/i10.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="{{asset('front_end/assets/img/portfolio/i6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="{{asset('front_end/assets/img/portfolio/i6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('front_end/assets/img/portfolio/i7.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="{{asset('front_end/assets/img/portfolio/i7.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="{{asset('front_end/assets/img/portfolio/i6.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="{{asset('front_end/assets/img/portfolio/i6.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="{{asset('front_end/assets/img/portfolio/i9.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="{{asset('front_end/assets/img/portfolio/i9.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <span>Detail</span>
          <h2>Detail</h2>
          <p>Detail of the room and Reserve the room</p>
        </div>

        <div class="row">

        <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box">
              <h3>1 DAY</h3>
              <h4><sup>฿</sup>300<span> / DAY</span></h4>
              <ul><h6>
                <li>ห้องขนาด 20 ตรว.</li>
                <li>ห้องน้ำในตัว</li>
                <li>พักได้ 1 ท่าน</li>
                <li class="na">มีระเบียง</li>
                <li class="na">เครื่องปรับอากาศ</li>
                </h6></ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3>1 WEEK</h3>
              <h4><sup>฿</sup>2,000<span> / WEEK</span></h4>
              <ul><h6>
                <li>ห้องขนาด 25 ตรว.</li>
                <li>ห้องน้ำในตัว</li>
                <li>พักได้ 2 ท่าน</li>
                <li>มีระเบียง</li>
                <li class="na">เครื่องปรับอากาศ</li>
                </h6></ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>1 MONTH</h3>
              <h4><sup>฿</sup>7,500<span> / MONTH</span></h4>
              <ul><h6>
                <li>ห้องขนาด 30 ตรว.</li>
                <li>ห้องน้ำในตัว</li>
                <li>พักได้ 3 ท่าน</li>
                <li>มีระเบียง</li>
                <li>เครื่องปรับอากาศ</li>
                </h6></ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <span>Team</span>
          <h2>Team</h2>
          <p>Team to make the website</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="{{asset('front_end/assets/img/team/team-1.jpg')}}" alt="">
              <h4>นายธนวัต สาระเวก</h4>
              <span>Front End</span>
              
              <div class="social">

                <a href="https://www.facebook.com/thanawat.bom.359"><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="{{asset('front_end/assets/img/team/team-2.jpg')}}" alt="">
              <h4>นายนาราชา บุญประเสริฐ</h4>
              <span>Tester</span>
              
              <div class="social">

                <a href="https://www.facebook.com/naracha.boonpasert"><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="{{asset('front_end/assets/img/team/team-3.jpg')}}" alt="">
              <h4>นายณัชพล ภัทรเสรี</h4>
              <span>ฺBack end</span>
             
              <div class="social">

                <a href="https://www.facebook.com/nutchapol.nut/"><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>

              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
          <p>Contact to owner website</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Address</h3>
              <p>269/10 หมู้บ้านทิพย์สุวรรณ ถนนบางกรวย-ไทรน้อย </p>
              <p>ตำบลโสนลอย อำเภอบางบัวทอง จังหวังนนทบุรี 11110</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>samarn@hotmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>087-517-1646</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-12 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61962.19174344462!2d100.38259686376279!3d13.920633600923438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e28f9f89fc74c1%3A0x60bb62021900da6d!2z4LiL4Lit4LiiIOC4iuC4uOC4oeC4iuC4meC4leC4peC4suC4lOC5gOC4geC5iOC4siDguJXguLPguJrguKXguYLguKrguJnguKXguK3guKIg4Lit4Liz4LmA4Lig4Lit4Lia4Liy4LiH4Lia4Lix4Lin4LiX4Lit4LiHIOC4meC4meC4l-C4muC4uOC4o-C4tSAxMTExMA!5e0!3m2!1sth!2sth!4v1628485920526!5m2!1sth!2sth" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

         
             

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('layouts.font_end.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('front_end/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('front_end/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('front_end/assets/js/main.js')}}"></script>

</body>

</html>
