<?php session_start(); ?>
<?php require_once 'send.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Primary Meta Tags -->
  <title>Contact Us &vert; The Royal Family Corporation &mdash; Empowering Individuals with IDD in Chicagoland</title>
  <meta name="title" content="The Royal Family Corporation &mdash; Empowering Individuals with IDD in Chicagoland">
  <meta name="description" content="The Royal Family Corporation provides compassionate, inclusive, and luxurious support services for individuals with intellectual and developmental disabilities across Illinois.">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://theroyalfamilycorporation.org/" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://theroyalfamilycorporation.org/">
  <meta property="og:title" content="Services &vert; The Royal Family Corporation &mdash; Empowering Individuals with IDD in Chicagoland">
  <meta property="og:description" content="Discover how we help children and adults with intellectual and developmental disabilities live independently with dignity.">
  <meta property="og:image" content="https://theroyalfamilycorporation.org/assets/images/og-preview.jpg">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://theroyalfamilycorporation.org/">
  <meta property="twitter:title" content="Services &vert; The Royal Family Corporation &mdash; Empowering Individuals with IDD in Chicagoland">
  <meta property="twitter:description" content="Discover how we help children and adults with intellectual and developmental disabilities live independently with dignity.">
  <meta property="twitter:image" content="https://theroyalfamilycorporation.org/assets/images/og-preview.jpg">

  <!-- Favicon -->
  <link rel="icon" href="./assets/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon-16x16.png">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Marcellus&display=swap" rel="stylesheet">

  <!-- Vendors -->
  <link rel="stylesheet" href="./assets/vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/vendors/aos/aos.css">
  <link rel="stylesheet" href="./assets/vendors/swiper/swiper-bundle.min.css">
  
  <!-- CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/responsiveness.css">

  <!-- FontAwesome -->
  <script src="https://kit.fontawesome.com/14243d0b86.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav>
        <div class="navbar">
            <div class="brand">
                <a href="">
                    <img src="./assets/images/logo.png" alt="" class="img-fluid">
                </a>
            </div>
            <div class="nav-links">
                <li class="nav-item"><a href="./" class="text-primary-1">Home</a></li>
                <li class="nav-item"><a href="./about" class="text-primary-1">About Us</a></li>
                <li class="nav-item"><a href="./services" class="text-primary-1">Services</a></li>
                <li class="nav-item"><a href="./contact" class="text-primary-1">Contact</a></li>
                <li class="nav-item"><a href="https://donate.stripe.com/7sY28s2y30903Mp5mb2cg00" target="_blank" class="btn btn-primary">Donate</a></li>
            </div>
            <div class="nav-links-mobile">
                <li class="nav-item"><a href="https://donate.stripe.com/7sY28s2y30903Mp5mb2cg00" target="_blank" class="btn btn-primary">Donate</a></li>
                <li class="nav-item"><button type="button" id="mobile-nav-toggle">
                    <img src="./assets/images/menu-icon.png" alt="" class="img-fluid">
                </button></li>
            </div>
        </div>
    </nav>
    
    <header class="pages" id="home">
        <div class="dark-overlay"></div>
        <div class="hero-header marcellus">
            <div class="page-link text-center" data-aos="fade-up">
                <div><a href="./">Home</a></div>
                <div><i class="fa-solid fa-angle-right"></i></div>
                <div>Contact Us</div>
            </div>
        </div>
    </header>

    <section id="contact" class="container py-5">
        <h2 class="section-title text-center core-head">Contact Us</h2>
        <div class="row g-5" style="margin-bottom: 40px;">
            <!-- Contact Details -->
            <div class="col-md-6">
                <div class="mb-4">
                    <h5><i class="fas fa-map-marker-alt me-2 text-warning"></i>Our Location</h5>
                    <p>1440 W Taylor St #2727 Chicago IL 60607, USA</p>
                    
                </div>
                <div class="mb-4">
                    <h5><i class="fas fa-phone me-2 text-warning"></i>Phone</h5>
                    <p>(123) 456-7890</p>
                </div>
                <div class="mb-4">
                    <h5><i class="fas fa-envelope me-2 text-warning"></i>Email</h5>
                    <p>support@theroyalfamily.org</p>
                </div>
                <div>
                    <h5><i class="fas fa-clock me-2 text-warning"></i>Operating Hours</h5>
                    <p>
                        Mon - Fri: 9:00 AM - 6:00 PM <br>
                        Sun: Closed
                    </p>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-md-6">
                <?php if (isset($_SESSION['form_status'])): ?>
                    <?php list($type, $msg) = $_SESSION['form_status']; ?>
                    <div class="alert alert-<?php echo $type === 'success' ? 'success' : 'danger'; ?>">
                        <?php echo htmlspecialchars($msg); ?>
                    </div>
                    <?php unset($_SESSION['form_status']); ?>
                <?php endif; ?>

                <form method="POST" action="">
                    <input type="hidden" name="form_token" value="<?php echo md5('secure123'); ?>">
                    <div style="display:none;">
                        <input type="text" name="website" value="">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
        <div class="ratio ratio-16x9 rounded overflow-hidden" style="height: 400px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.0877824086374!2d-87.66590128841868!3d41.86945777112277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c910dd28e9d%3A0x16469cf8a3561043!2s1440%20W%20Taylor%20St%20%232727%2C%20Chicago%2C%20IL%2060607%2C%20USA!5e0!3m2!1sen!2sng!4v1752838671222!5m2!1sen!2sng" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- How to help -->
    <section>
        <div class="volunteer">
            <div class="v-circle-1">
                <div class="v-circle-2">
                    <div class="v-circle-3">
                        <div class="v-head">
                            How You Can Help
                        </div>
                        <div class="lead">
                            Every action counts. Your time, support, or voice can help someone feel truly seen and valued.
                        </div>
                        <div class="v-btns">
                            <div>
                                <a href="" class="btn btn-sm btn-primary">Donate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="row">
        <div class="col-md-3">
            <h2 class="text-secondary-2">The Royal Family Corporation</h2>
            <p class="text-secondary-2">
                The Royal Family Corporation serves families across Chicagoland with a model that blends expert support, beautiful living spaces, and an unshakable belief in every individual's worth.
            </p>
        </div>
        <div class="col-md-3">
            <h3 class="text-secondary-2">Quick Links</h3>
            <div class="footer-links">
                <li>
                    <a href="./" class="text-secondary-2">Home <i class="fa-solid fa-angle-right"></i></a>
                </li>
                <li>
                    <a href="./about" class="text-secondary-2">About <i class="fa-solid fa-angle-right"></i></a>
                </li>
                <li>
                    <a href="./services" class="text-secondary-2">Services <i class="fa-solid fa-angle-right"></i></a>
                </li>
                <li>
                    <a href="./contact" class="text-secondary-2">Contact <i class="fa-solid fa-angle-right"></i></a>
                </li>
                <li>
                    <a href="https://donate.stripe.com/7sY28s2y30903Mp5mb2cg00" target="_blank" class="text-secondary-2">Donate <i class="fa-solid fa-angle-right"></i></a>
                </li>
            </div>
        </div>
        <div class="col-md-3">
            <h3 class="text-secondary-2">Services</h3>
            <div class="footer-links text-secondary-2">
                <li>
                    Community Living (CILA)
                </li>
                <li>
                    Assistance with ADLs
                </li>
                <li>
                    Life Skills & Vocational Training
                </li>
                <li>
                    Community Integration
                </li>
                <li>
                    Caregiver & Respite Services
                </li>
            </div>
        </div>
        <div class="col-md-3 mbbb">
            <div class="text-secondary-2 mb-4">
                Every action counts. Your time, support, or voice can help someone feel truly seen and valued.
            </div>
            <div class="">
                <a href="https://donate.stripe.com/7sY28s2y30903Mp5mb2cg00" target="_blank" class="btn btn-sm btn-light">Donate</a>
            </div>
        </div>
        <div class="base-footer text-secondary-2">
            <div class="">
                Copyright &copy; 2025. All Rights Reserved
            </div>
            <div class="">
                Designed with <i class="fa-solid fa-heart"></i> by 
                <a class="irobbott r-tooltip text-secondary-2" href="https://iconicrobbott.com" target="_blank">
                    iRobbott
                    <span class="r-tooltiptext">www.iconicrobbott.com - AI, code, and tech!</span>
                </a>
            </div>
        </div>
    </footer>
    


    <!-- Mobile navigation -->
    <div class="mobile-nav" id="mobileNav">
        <div class="cancel">
            <button type="button" id="mobile-nav-close">
                <i class="fa-solid fa-x text-secondary-2 fa-2x"></i>
            </button>
        </div>
        <div class="mobile-logo fade-up">
            <img src="./assets/images/logo-white.png" alt="" class="img-fluid">
        </div>
        <div class="menu-line fade-up"></div>
        <div class="mobile-nav-links">
            <li class="nav-item fade-up"><a href="./" class="text-secondary-2">Home</a></li>
            <li class="nav-item fade-up"><a href="./about" class="text-secondary-2">About Us</a></li>
            <li class="nav-item fade-up"><a href="./services" class="text-secondary-2">Services</a></li>
            <li class="nav-item fade-up"><a href="./contact" class="text-secondary-2">Contact</a></li>
            <li class="nav-item fade-up"><a href="https://donate.stripe.com/7sY28s2y30903Mp5mb2cg00" target="_blank" class="btn btn-primary">Donate</a></li>
        </div>
    </div>
    
    <!-- Bootstrap -->
    <script src="./assets/vendors/bootstrap/bootstrap.min.js"></script>
    <!-- AOS -->
    <script src="./assets/vendors/aos/aos.js"></script>
    <!-- Lazysizes -->
    <script src="./assets/vendors/swiper/swiper-bundle.min.js"></script>
    <!-- Vanilla JS -->
    <script src="./assets/js/main.js"></script>
    <script>
        // AOS
        AOS.init();
    </script>
</body>
</html>