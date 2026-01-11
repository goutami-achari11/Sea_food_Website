
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
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
        :root {
            --primary-color: #2e7d32;
            --secondary-color: #81c784;
            --accent-color: #ffd54f;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-image:url("assets/img/menu/w33.jpg");
            backdrop-filter: blur(3px);
             height: 700px;
            -webkit-backdrop-filter: blur(3px);
            color: #333;
        }
        
        .order-form-container {
			margin-top:120px;
            max-width: 800px;
           margin-left:240px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .order-form-container:hover {
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .form-header {
				
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 25px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .form-header h2 {
            font-weight: 700;
            margin: 0;
            position: relative;
            z-index: 1;
        }
        
        .form-header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            transform: rotate(45deg);
        }
        
        .form-body {
            background-color: white;
            padding: 30px;
        }
        
        .form-floating label {
            color: #666;
        }
        
        .form-control, .form-select {
            border-radius: 10px;
            height: 50px;
            padding: 10px 15px;
            border: 2px solid #e0e0e0;
            transition: all 0.3s;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(46, 125, 50, 0.25);
        }
        
        .user-detail-box {
            background-color: #f5f5f5;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            border-left: 4px solid var(--primary-color);
        }
        
        .user-info-label {
            font-size: 0.8rem;
            color: #777;
            margin-bottom: 5px;
        }
        
        .user-info-value {
            font-weight: 600;
            color: #333;
        }
        
        .submit-btn {
            background-color: var(--primary-color);
            border: none;
            border-radius: 50px;
            padding: 12px 30px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .submit-btn:hover {
            background-color: #1b5e20;
            transform: translateY(-2px);
        }
        
        .submit-btn:active {
            transform: translateY(0);
        }
        
        .submit-btn::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.5);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%, -50%);
            transform-origin: 50% 50%;
        }
        
        .submit-btn:focus:not(:active)::after {
            animation: ripple 0.6s ease-out;
        }
        
        @keyframes ripple {
            0% {
                transform: scale(0, 0);
                opacity: 1;
            }
            100% {
                transform: scale(20, 20);
                opacity: 0;
            }
        }
        
        .order-success {
            display: none;
            background-color: #e8f5e9;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
            border-left: 4px solid var(--primary-color);
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .loading-spinner {
            display: none;
            width: 40px;
            height: 40px;
            margin: 20px auto;
            border: 4px solid rgba(0,0,0,0.1);
            border-radius: 50%;
            border-top-color: var(--primary-color);
            animation: spin 1s ease-in-out infinite;
        }
        
        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
	
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="assets/img/log.png" alt="">
        <h1 class="sitename">Ocian Bites</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="userdb.php" class="active">Home<br></a></li>
         
          <li><a href="#menu">Menu</a></li>
          <li><a href="#gallery">Gallery</a></li>
     
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>
    <div class="container">
        <div class="order-form-container animate__animated animate__fadeIn">
            <div class="form-header">
                <h2>Place Your Order</h2>
            </div>
            <div class="form-body">
                <form action="order.php" method="post" role="form" id="orderForm">
                    <div class="row g-4">
                        <!-- User Information (Read-only) -->
                        <div class="col-md-4">
                            <div class="user-detail-box">
                                <div class="user-info-label">Your Name</div>
                                <div class="user-info-value"><?php echo $_SESSION['NAME']; ?></div>
                                <input type="hidden" name="name" value="<?php echo $_SESSION['NAME']; ?>">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="user-detail-box">
                                <div class="user-info-label">Email Address</div>
                                <div class="user-info-value"><?php echo $_SESSION['EMAIL']; ?></div>
                                <input type="hidden" name="email" value="<?php echo $_SESSION['EMAIL']; ?>">
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="user-detail-box">
                                <div class="user-info-label">Phone Number</div>
                                <div class="user-info-value"><?php echo $_SESSION['PHONE']; ?></div>
                                <input type="hidden" name="phone" value="<?php echo $_SESSION['PHONE']; ?>">
                            </div>
                        </div>
                        
                        <!-- Order Information -->
<!-- Quantity Input 
<div class="col-md-12">
    <div class="form-floating">
        <input type="number" class="form-control" name="people" id="people" value="1" placeholder="# of people" required min="1" max="20">
        <label for="people">Quantity</label>
    </div>
</div>-->

<!-- Total Price Display 
<div class="col-md-4">
    <div class="user-detail-box">
        <div class="user-info-label">Total Price</div>
        <div id="total-price">₹0</div> 
        <input type="hidden" name="price" id="price"> 
    </div>
</div>-->

<!-- JavaScript to Calculate Total Price 
<script>
    document.addEventListener('DOMContentLoaded', function () {
        fetch('userdb.php') // PHP file that echoes price like: echo 150;
            .then(response => response.text())
            .then(priceText => {
                const basePrice = parseFloat(priceText);
                const priceInput = document.getElementById('price');
                const quantityInput = document.getElementById('people');
                const totalPriceDisplay = document.getElementById('total-price');

                priceInput.value = basePrice;

                function updateTotalPrice() {
                    let quantity = parseInt(quantityInput.value);

                    // Always default to 1 if invalid
                    if (!quantity || quantity < 1) {
                        quantity = 1;
                        quantityInput.value = 1; // Reset visually too
                    }

                    const total = basePrice * quantity;
                    totalPriceDisplay.textContent = `₹${total}`;
                }

                // Call once on load
                updateTotalPrice();

                // Update on change/input
                quantityInput.addEventListener('input', updateTotalPrice);
            })
            .catch(error => {
                console.error('Error fetching price:', error);
            });
    });
</script>-->


                        <div class="col-md-6" style="width:1000px">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="address" id="address" placeholder="Delivery Address" required>
                                <label for="address">Delivery Address</label>
                            </div>
                        </div>
                        
                        
                    
                    <div class="text-center mt-4">
                        <div class="loading-spinner"></div>
                        <div class="error-message text-danger"></div>
                        <button type="submit" name="btnsubmit" class="btn submit-btn">
                            <span id="btnText">Confirm Order</span>
                        </button>
                        <div class="order-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-circle">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            Your order has been confirmed! Will be delivered soon. Thank you!
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('orderForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading spinner
            document.querySelector('.loading-spinner').style.display = 'block';
            document.querySelector('.error-message').textContent = '';
            document.querySelector('.order-success').style.display = 'none';
            document.getElementById('btnText').textContent = 'Processing...';
            
            // Simulate form submission with AJAX (replace with actual AJAX call)
            setTimeout(function() {
                document.querySelector('.loading-spinner').style.display = 'none';
                
                // For demo purposes, we'll always show success
                document.querySelector('.order-success').style.display = 'block';
                document.getElementById('orderForm').reset();
                document.getElementById('btnText').textContent = 'Order Placed ✓';
                
                // Scroll to success message
                document.querySelector('.order-success').scrollIntoView({ behavior: 'smooth' });
            }, 2000);
        });
        
        // Set default delivery time to current time + 1 hour
        const now = new Date();
        now.setHours(now.getHours() + 1);
        const formattedDateTime = now.toISOString().slice(0, 16);
        document.getElementById('delivery_time').value = formattedDateTime;
    </script>
</body>
</html>