<?php 
session_start(); 
$logged_in = isset($_SESSION['user_id']);
$user_name = $_SESSION['user_name'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-9M8CGG4ZGZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9M8CGG4ZGZ');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG Autos</title>

    <link rel="icon" type="image/x-icon" href="./IMG-favicon.ico.jpg">
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NDPFMWPP');</script>
<!-- End Google Tag Manager -->

    <style>
        body{
            font-family: Arial, sans-serif;
            margin:0;
            background:#d9d8df;
        }

        header{
            background:#047594;
            color:#fff;
            padding:40px;
            text-align:center;
        }

        /* NAVIGATION */
        nav{
            background:#070914;
            padding:10px;
            position: relative;  
            z-index: 1000;   
        }

        nav ul{
            list-style:none;
            margin:0;
            padding:0;
            display:flex;
            justify-content:center;
        }

        nav ul li{
            position:relative;
        }

        nav ul li a{
            color:white;
            margin:0 15px;
            text-decoration:none;
            font-weight:bold;
        }

        /* DROPDOWN */
        nav ul li ul{
            display:none;
            position:absolute;
            background:#005599;
            top:30px;
            padding:10px;
            z-index: 2000;
        }

        nav ul li:hover ul{
            display:block;
        }

        nav ul li ul li{
            display:block;
            margin:5px 0;
        }

        /* SLIDER */
        .slider{
            width:100%;
            height:400px;
            overflow:hidden;
            position: relative; 
            z-index: 1;    
        }

        .slides{
            display:flex;
            width:400%;
            animation: slide 40s infinite;
        }

        .slides img{
            width:25%;
            height:400px;
            object-fit:cover;
        }

        @keyframes slide{
            0%, 20%{transform:translateX(0);}
            25%, 45%{transform:translateX(-25%);}
            50%, 70%{transform:translateX(-50%);}
            75%, 95%{transform:translateX(-75%);}
            100%{transform:translateX(0);}
        }

        /* HERO */
        .hero{
            background:url("./IMG-Peugeot%20408%20-1.jpg");
            background-size:cover;
            background-position:center;
            height:400px;
            display:flex;
            align-items:center;
            justify-content:center;
            color:white;
        }

        .hero h1{
            font-size:50px;
            background:rgba(0,0,0,0.5);
            padding:20px;
        }

        .container{
            width:85%;
            margin:auto;
            padding:40px 0;
        }

        img{
            margin:10px;
        }

        /* CONTACT FORM */
        .contact{
            padding:30px;
            background:#fff;
        }

        .contact input, .contact textarea{
            width:100%;
            padding:10px;
            margin:10px 0;
        }

        .contact button{
            padding:10px 20px;
            background:#003366;
            color:white;
            border:none;
        }
        /* FOOTER */
        footer{
            background:#222;
            color:white;
            text-align:center;
            padding:20px;
        }

        .header-user {
            margin-top: 10px;
            font-size: 16px;
        }
        .header-user a {
            color: yellow;
            text-decoration: none;
        }
        .header-user a:hover {
            text-decoration: underline;
        }
        
        /* GENERAL */
* {
    box-sizing: border-box;
}

.container{
    width:90%;
    margin:auto;
    padding:20px 0;
}

/* RESPONSIVE NAV */
nav ul{
    display:flex;
    flex-wrap:wrap;
    justify-content:center;
}

nav ul li{
    margin:5px 10px;
}

/* MOBILE MENU (STACK) */
@media (max-width: 768px){
    nav ul{
        flex-direction:column;
        align-items:center;
    }
}

/* SLIDER */
.slider{
    width:100%;
    height:250px;
}

.slides img{
    height:250px;
}

/* HERO */
.hero{
    height:250px;
    text-align:center;
}

.hero h1{
    font-size:24px;
    padding:10px;
}

/* IMAGES */
.container img{
    width:100%;
    max-width:250px;
    height:auto;
}

/* MAKE IMAGES GRID */
.container{
    display:flex;
    flex-direction:column;
    align-items:center;
}

/* VIDEO RESPONSIVE */
.video-container{
    position:relative;
    width:100%;
    padding-bottom:56.25%;
}

.video-container iframe{
    position:absolute;
    width:100%;
    height:100%;
}

/* CONTACT FORM */
.contact{
    padding:20px;
}

.contact input,
.contact textarea{
    width:100%;
}

/* HEADER TEXT */
header h1{
    font-size:28px;
}

header h2{
    font-size:18px;
}

/* SMALL DEVICES */
@media (max-width: 480px){
    header{
        padding:20px;
    }

    .hero h1{
        font-size:20px;
    }
}
      
      .responsive-img{
    width:100%;
    max-width:250px;
    height:auto;
}  
    </style>
    
    
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDPFMWPP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <h1>PG AUTOS</h1>
    <h2>AUTO IMPORT</h2>
    
    <?php if($logged_in): ?>
    <div class="header-user">
        Welcome, <?php echo htmlspecialchars($user_name); ?> | 
        <a href="logout.php">Logout</a>
    </div>
    <?php endif; ?>
</header>

<!-- NAVIGATION -->
<nav>
    <ul>
        <li><a href="index.html">Home</a></li>

        <li>
            <a href="#">Services</a>
            <ul>
                <li><a href="sourcing.html">Sourcing</a></li>
                <li><a href="car-import.html">Car Import</a></li>
                <li><a href="shipping.html">Shipping</a></li>
                <li><a href="documentation.html">Documentation</a></li>
                <li><a href="consultation.html">Consultation</a></li>
            </ul>
        </li>

        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>

        <!-- ✅ Show Login/Signup ONLY if NOT logged in -->
        <?php if(!$logged_in): ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <?php endif; ?>

        <li>
            <div class="custom-select" style="width:150px;">
                <select onchange="goToCar(this.value)">
                    <option value="">Select Car Brand</option>
                    <option value="audi.html">Audi</option>
                    <option value="bmw.html">BMW</option>
                    <option value="toyota.html">Toyota</option>
                </select>
            </div>
        </li>
    </ul>
</nav>

<script>
function goToCar(page) {
    if (page !== "") {
        window.location.href = page;
    }
}
</script>

<!-- SLIDER -->
<div class="slider">
    <div class="slides">
        <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70" class="responsive-img">
        <img src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c">
        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a">
        <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a">
    </div>
</div>

<!-- HERO -->
<div class="hero">
    <h1>Direct Vehicle Importation</h1>
</div>

<!-- CONTENT -->
<div class="container">
    <h3>Direct Vehicle Importation from China to Ghana</h3>
    <p>Pre-Order Your Preferred Vehicle - We Ship It For You</p>

    <img src="./IMG-Peugeot%20408%20-1.jpg" width="200">
    <img src="./IMG-Peugeot%20408-%202.jpg" width="200">
    <img src="./IMG-Car-WA.jpg" width="200">
    <img src="./IMG-Motor%20bike-WA0068.jpg" width="250">

    <p>
        Customers can pre-order their preferred vehicle, and we handle sourcing,
        inspection, documentation, and shipping directly from trusted manufacturers in China.
    </p>

    <h3>Pre-order Yours Today</h3>

    <a href="https://datavendo.shop/pg-data-hub">Visit PG Data Hub</a>
</div>

<!-- VIDEO -->
<div class="video-container">
    <iframe 
        src="https://garr.tv/videos/embed/1c1F684WhqMd9HfH3D5PeW"
        frameborder="0" 
        allowfullscreen>
    </iframe>
</div>

<!-- CONTACT -->
<section class="contact" id="contact">
    <h2>Contact Us</h2>

    <form action="send.php" method="post">

        <input type="text" name="name" placeholder="Your Name" required>

        <input type="email" name="email" placeholder="Your Email" required>

        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>

        <button type="submit">Send Message</button>

    </form>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-content">
      <div class="footer-section">
        <h3>Quick Links</h3>
        <a href="#about">About</a>
        <a href="#Cars">Cars</a>
        <a href="#service">Services</a>
        <a href="#contact">Contact</a>
      </div>
    <p>© 2026 PG Autos. All Rights Reserved.</p>
    <p>Contact: +233 0246638223 | dupontten2010@gmail.com</p>
    <p>Location: Aburi-Akuapem</p>
</footer>
<a href="https://wa.me/233505196360" target="_blank" style="
position:fixed;
bottom:20px;
right:20px;
background:#25D366;
color:white;
padding:15px;
border-radius:50px;
text-decoration:none;">
Chat on WhatsApp
</a>
</body>
</html>