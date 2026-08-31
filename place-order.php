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
        <h1 class="page-title">Place Order</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav nav-86px">
            <ul>
                <li class="nav-item"><a href="index.html" class="permal-link">Home</a></li>
                <li class="nav-item"><span class="current-page">Place Order</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain contact-us">

        <!-- Main content -->
        <div id="main-content" class="main-content">
            
            <div class="container">

                <div class="row">

                    <!--Contact info-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-info-container sm-margin-top-27px xs-margin-bottom-60px xs-margin-top-60px">
                            <h4 class="box-title">Place Your Order</h4>
                            <p class="frst-desc">You can easily place your order online by filling the order form below or offline by calling the phone number below or visiting our farm</p>
                            <ul class="addr-info">
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Addess:</b>
                                        <p class="dsc">Plot 14 Farm Road, Abara Etche, Off Rivers State University of Agriculture Extension, Rivers State</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Phone:</b>
                                        <p class="dsc">(+234)-806-153-3444</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Email:</b>
                                        <p class="dsc">ariasfarmsandfeeds@gmail.com ||  ariasfarmsandfeedsltd@yahoo.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="if-item">
                                        <b class="tie">Open:</b>
                                        <p class="dsc">8am - 08pm, Mon - Sat</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--Contact form-->
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form-container sm-margin-top-112px">
                            <form action="#" name="frm-contact" >
                                <p class="form-row">
                                    <input type="text" name="name" id="name" value="" placeholder="Your Name" class="txt-input">
                                </p>
                                <p class="form-row">
                                    <input type="email" name="email" id="email" value="" placeholder="Email Address" class="txt-input">
                                </p>
								
                                <p class="form-row">
                                    <input type="tel" name="phone" id="phone" value="" placeholder="Phone Number" class="txt-input">
                                </p>
								
								<p class="form-row">
                                    <input type="text" name="product_type" id="product_type" value="" placeholder="Product Name" class="txt-input">
                                </p>
								
								<p class="form-row">
                                    <input type="text" name="quantity" id="quantity" value="" placeholder="Quantity" class="txt-input">
                                </p>
								
								
                                <p class="form-row">
                                    <textarea name="delivery_address" id="mes-1" cols="30" rows="9" placeholder="Delivery Address"></textarea>
                                </p>
                                <p class="form-row">
                                    <button class="btn btn-submit" type="submit">place order</button>
                                </p>
                            </form>
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