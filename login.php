<?php
session_start();
?>


<!DOCTYPE html>
<html>
    <Head>
        <title>Login<</title>
        
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NDPFMWPP');</script>
<!-- End Google Tag Manager -->

        </head>
        <body>
            
            <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDPFMWPP"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

            <style type="text/css">
                #text{
                    height:25px;
                    border-radius:5px;
                    padding: 4px;
                    border: solid thin #aaa;
                    width:80%;
                }
                #button{
                    padding: 10px;
                    width: 100px;
                    colour: white;
                    background-color: lightblue;
                    border: none;
                }
                #box{
                    background-color: grey;
                    margin: auto;
                    width: 300px;
                    padding: 20;
                }
                
            </style>
            
<div id="box">
<form action="login_process.php" method="POST">
    <div style="fontsize: 20px;margin: 10px;color:white;">Login</div>
  <input id="text" type="email" name="email" placeholder="Email" required><br><br>
  <input id="text" type="password" name="password" placeholder="Password" required><br><br>
<button type="submit">Login</button>
<a href= "signup.php">Click to Signup</a><br><br>
  
</form>

<a href="forgot_password.php">Forgot Password?</a>

</div>
</body>
</html>