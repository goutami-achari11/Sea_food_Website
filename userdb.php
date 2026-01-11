
<?php 
session_start();
if($_SESSION['EMAIL'] == FALSE)
{
	header('location:login.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OcianBites</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/log.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>          
       .y{
         border-radius: 50%;
         width: 300px;
            height: 300px;
            animation:  duration timing-function delay iteration-count direction fill-mode;
       }
         .m {
          background-image: url('assets/img/menu/x4.jpg');
            position: relative;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background-color: rgba(219, 219, 219, 0.5);
            box-shadow: 
                0 10px 8px rgba(16, 16, 16, 0.2),
                inset 0 0 20px rgba(255, 255, 255, 0.5);
            animation: rotateContainer 20s linear infinite;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .f1 {
            position: absolute;
            width: 35%;
            height: 35%;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: transform 0.3s ease;
        }
        #bn{
        padding: 12px 24px;
            background-color: rgb(239, 12, 12);
            color: white;
            border: none;
            border-radius: 30px;
            
            justify-items: center;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: all 0.3s ease;
            animation: blink 2.5s infinite;
        }
        #bn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.25);
        }
        #bn:active {
            transform: translateY(1px);
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
       
        /* Middle image */
        .x {
            position: absolute;
           width: 30%;
            height: 30%;
            z-index: 10;
            border-radius: 50%;
            animation: rotate-center 8s linear infinite;
        }

        /* Positioning and animating the surrounding images */
        .f1:nth-child(1) {
            transform: rotate(0deg) translate(200px) rotate(0deg);
            animation: orbit 16s linear infinite;
        }

        .f1:nth-child(2) {
            transform: rotate(72deg) translate(200px) rotate(-72deg);
            animation: orbit 16s linear infinite -4s;
        }

        .f1:nth-child(3) {
            transform: rotate(144deg) translate(200px) rotate(-144deg);
            animation: orbit 16s linear infinite -8s;
        }

        .f1:nth-child(4) {
            transform: rotate(216deg) translate(200px) rotate(-216deg);
            animation: orbit 16s linear infinite -12s;
        }

        .f1:nth-child(5) {
            transform: rotate(288deg) translate(200px) rotate(-288deg);
            animation: orbit 16s linear infinite -16s;
        }

        @keyframes orbit {
            0% {
                transform: rotate(0deg) translate(200px) rotate(0deg);
            }
            100% {
                transform: rotate(360deg) translate(200px) rotate(-360deg);
            }
        }

        @keyframes rotate-center {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

       
        /* Responsive design */
        @media (max-width: 600px) {
            .m {
                width: 300px;
                height: 300px;
            }
            
            .f1 {
                width: 60px;
                height: 60px;
            }
            
            .x{
                width: 80px;
                height: 80px;
            }
            
            .f1:nth-child(1),
            .f1:nth-child(2),
            .f1:nth-child(3),
            .f1:nth-child(4),
            .f1:nth-child(5) {
                transform-origin: center;
                transform: rotate(var(--angle)) translate(120px) rotate(calc(-1 * var(--angle)));
            }
        }
             /* Hover effects */
        .f1:hover {
            transform: scale(1.2) translate(-50%, -50%);
            z-index: 10;
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }
  
  </style>
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/log.png" alt="">
        <h1 class="sitename">Ocian Bites</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home<br></a></li>
         
          <li><a href="#menu">Menu</a></li>
          <li><a href="#gallery">Gallery</a></li>
          
          <li><a href="feedback.html">Contact</a></li>
          <li><a href="logout.php">LogOut</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">
     
 <p style="font-family: 'Brush Script MT', cursive;font-weight: bold;color: black; text-align: center;font-size: 30px;">WELCOME TO<span><br><img src="assets/img/log.png"  style="width: 100px;height: 100px;" alt=""></span> OceanBites - <br><?php
			   echo $_SESSION['NAME'];?></p>
      <div class="container">
           
        <div class="row gy-4 justify-content-center justify-content-lg-between">
          <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <div class="m">
               <img src="assets/img/menu/h2.jpeg" class="f1">
                <img src="assets/img/menu/c2.png" class="f1">
                 <img src="assets/img/menu/f7.jpg" class="f1">
                  <img src="assets/img/menu/f3.jpg" class="f1">
                  <img src="assets/img/menu/t1.png" class="x">

            </div> 
          </div>

                <script>
        // Optional: Add interactive functionality if needed
        document.querySelectorAll('.f1').forEach(img => {
            img.addEventListener('mouseenter', () => {
                img.style.transition = 'transform 0.5s ease, box-shadow 0.3s ease';
            });
            
            img.addEventListener('mouseleave', () => {
                img.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';
            });
        });
    </script>

          <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
            <img src="assets/img/menu/c1.png" style="border-radius: 40%;" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->



    <!-- Why Us Section -->
    <section id="why-us" class="why-us section light-background">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="why-box">
              <h3>Why OcianBites</h3>
              <p style="font-size: 20px;"><br><br>
                OceanBite brings the freshest seafood from the ocean to your home, with fast delivery and exceptional service.
              </p>

            </div>
          </div><!-- End Why Box -->
         
          <div class="col-lg-8 d-flex align-items-stretch">
            <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">

              <div class="col-xl-4">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                 
                  <i class="bi "> <img src="assets/img/t.png" style="width: 80px;height: 80px;"></i>
                  <h3>Fresh Catch</h3>
                        <p>We source our seafood daily from local fishermen to ensure maximum freshness and quality.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                 <i class="bi "> <img src="assets/img/t1.png" style="width: 80px;height: 80px;"></i>
                 <h3>Fast Delivery</h3>
                        <p>Our streamlined delivery system gets your order to you in under 45 minutes or it's free.</p>
                </div>
              </div><!-- End Icon Box -->

              <div class="col-xl-4" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box d-flex flex-column justify-content-center align-items-center">
                  <i class="bi "> <img src="assets/img/t2.png" style="width: 80px;height: 80px;"></i>
                  <h3>Premium Quality</h3>
                        <p>Only the highest grade seafood makes it to your plate, prepared by our master chefs.</p>
                </div>
              </div><!-- End Icon Box -->

            </div>
          </div>

        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section dark-background">

      <img src="assets/img/menu/w33.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Menu Section -->
    <section id="menu" class="menu section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Menu</h2>
        <p><span>Check Our</span> <span class="description-title">Yummy Menu</span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">


        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              
              <h3>MENU</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/i1.jpg"  class="glightbox"><img src="assets/img/menu/p1.png" class="y" class="menu-img img-fluid" alt=""></a>
                <h4>Prawn Ghee Roas</h4>
               
                <p class="price" id="price">
                  Rs:250/-
                </p>
                <a href="menu.php" id="bn">ORDER</a>
               
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/l.png" class="glightbox"><img src="assets/img/menu/l.png" class="y" class="menu-img img-fluid" alt=""></a>
                <h4>Lobster Roll</h4>
                <p class="price" id="price">
                  Rs:110/-
                </p>
               <a href="menu.php" id="bn">ORDER</a>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/g1.jpg" class="glightbox"><img src="assets/img/menu/g1.jpg" class="y" class="menu-img img-fluid" alt=""></a>
                <h4>Fish Curry</h4>
                
                <p class="price" id="price">
                  Rs:150/-
                </p>
                <a href="menu.php" id="bn">ORDER</a>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/f7.jpg" class="glightbox"><img src="assets/img/menu/f7.jpg" class="y" class="menu-img img-fluid" alt=""></a>
                <h4>POMPHRET MASALA FRY</h4>
              
                <p class="price" id="price">
                  Rs:120/-
                </p>
                <a href="menu.php" id="bn">ORDER</a>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/v6.jpg"  class="glightbox"><img src="assets/img/menu/v6.jpg" class="y" class="menu-img img-fluid" alt=""></a>
                <h4>Stone Crab claws</h4>
                
                <p class="price" id="price">
                  Rs:270/-
                </p>
              <a href="menu.php" id="bn">ORDER</a>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/v7.png"  class="glightbox"><img src="assets/img/menu/v7.png" class="y" class="menu-img img-fluid" alt=""></a>
                <h4>Shrimp Scampi</h4>
                
                <p class="price" id="price">
                  Rs:200/-
                </p>
                <a href="menu.php" id="bn">ORDER</a>
              </div><!-- Menu Item -->
               <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/v4.png"  class="glightbox"><img src="assets/img/menu/v4.png" class="y" class="menu-img img-fluid" alt=""></a>
                <h4>Grilled Squid with Garlic and Chili </h4>
               
                <p class="price" id="price">
                  Rs:290/-
                </p>
                <button  id="bn">ADD</button>
              </div><!-- Menu Item -->
               <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/k.png"  class="glightbox"><img src="assets/img/menu/k.png" class="y" class="menu-img img-fluid" alt=""></a>
                <h4>Shrimp Sausage And Broccoli</h4>
            
                <p class="price" id="price">
                   Rs:250/-
                </p>
                <button  id="bn">ADD</button>
              </div><!-- Menu Item -->
               <div class="col-lg-4 menu-item">
                <a href="assets/img/menu/p0.jpg"  class="glightbox"><img src="assets/img/menu/p0.jpg" class="y" class="menu-img img-fluid" alt=""></a>
                <h4> Baby Shrimp & Mango Salad</h4>
                <p class="price" id="price">
                  Rs:210/-
                </p>
                <a href="menu.php" id="bn">ORDER</a>
              </div><!-- Menu Item -->


            </div>
          </div><!-- End Starter Menu Content -->

        </div>

      </div>

    </section><!-- /Menu Section -->

    
   
    <!-- Gallery Section -->
    <section id="gallery" class="gallery section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p><span>Check</span> <span class="description-title">Our Gallery</span></p>
      </div><!-- End Section Title -->

      <div style="width: 100%;height: 70%;" class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 500
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 0
                },
                "768": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 5,
                  "spaceBetween": 20
                }
              }
            }
          </script>
          <div  class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/menu/b1.png"><img src="assets/img/menu/b1.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/menu/p0.jpg"><img src="assets/img/menu/p0.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/menu/v7.png"><img src="assets/img/menu/v7.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/menu/v8.png"><img src="assets/img/menu/v8.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/menu/sh.png"><img src="assets/img/menu/sh.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/menu/g3.jpg"><img src="assets/img/menu/g3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/menu/v.png"><img src="assets/img/menu/v.png" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="assets/img/menu/OIP.webp"><img src="assets/img/menu/OIP.webp" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Gallery Section -->

   

  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Address</h4>
            <p>OcianBites, Kadri</p>
            <p>Manglore 535022</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contact</h4>
            <p>
              <strong>Phone:</strong> <span>7338516780</span><br>
              <strong>Email:</strong> <span>ocianbits@gmail.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat:</strong> <span>11AM - 11PM</span><br>
              <strong>Sunday</strong>: <span>Closed</span>
            </p>
          </div>
        </div>

      

      </div>
    </div>

   

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>