<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
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
    <title>Homepage</title>
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NDPFMWPP');</script>
<!-- End Google Tag Manager -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDPFMWPP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="container mt-5 text-center">

    <h2>Welcome, <?php echo $_SESSION['user_name']; ?> 👋</h2>

    <p>You are successfully logged in.</p>

    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>

</div>
<script>
const urlParams = new URLSearchParams(window.location.search);

if (urlParams.get('signup') === 'success') {
    gtag('event', 'signup_success', {
        event_category: 'engagement',
        event_label: 'User Signup'
    });
}
</script>
</body>
</html>