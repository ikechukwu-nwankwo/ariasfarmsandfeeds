<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arias Farms and Feeds Limited</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon_1.png" />
	<link rel="stylesheet" href="assets/css/main-color03-green.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

     <!-- HEADER -->
    <?php include('includes/navbar.php');?> 

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Sign Up</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Sign Up</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain login-page">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            <div class="container">

                <div class="row">

                    <!--Form Sign In-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="signin-container">
                            <form action="#" name="frm-login" method="post">
							
							
								<p class="form-row">
                                    <label for="uemail">Name:<span class="requite">*</span></label>
                                    <input type="text" id="uname" name="uname" value="" class="txt-input">
                                </p>
							
                                <p class="form-row">
                                    <label for="uemail">Email Address:<span class="requite">*</span></label>
                                    <input type="email" id="uemail" name="uemail" value="" class="txt-input">
                                </p>
								
								<p class="form-row">
                                    <label for="uphome">Mobile No:<span class="requite">*</span></label>
                                    <input type="text" id="uphone" name="uphone" value="" class="txt-input">
                                </p>
								
                                <p class="form-row">
                                    <label for="upass">Password:<span class="requite">*</span></label>
                                    <input type="password" id="upass" name="upass" value="" class="txt-input">
                                </p>
								
								<p class="form-row">
                                    <label for="confirmpass">Confirm Password:<span class="requite">*</span></label>
                                    <input type="password" id="confirmpass" name="confirmpass" value="" class="txt-input">
                                </p>
                                <p class="form-row wrap-btn">
                                    <button class="btn btn-submit btn-bold" type="submit">sign up</button>
                                </p>
                            </form>
                        </div>
                    </div>

                    <!--Go to Login form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="register-in-container">
                            <div class="intro">
                                <h4 class="box-title">Existing Customer?</h4>
                                <p class="sub-title">Login and you will be to:</p>
                                <ul class="lis">
                                    <li>Check out faster</li>
                                    <li>Save multiple shipping anddesses</li>
                                    <li>Access your order history</li>
                                    <li>Track new orders</li>
                                    <li>Save items to your Wishlist</li>
                                </ul>
                                <a href="login.html" class="btn btn-bold">Login</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

   <!-- FOOTER -->
       <?php include('includes/footer.php');?> 

</body>

</html>