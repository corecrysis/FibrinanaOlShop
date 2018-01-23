<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Web Katalog</title>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Web Katalog" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<style>
.dropdown-header {
			color : black;
		}
		ul.dropdown-menu{
			left:0px;
		}
</style>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body>
<!--header-->
 <div class="header">
           
            <div class="container">
                <div class="head-top">
                    <div class="n-avigation">
                        <nav class="navbar nav_bottom" role="navigation">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header nav_2">
                                <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <a class="navbar-brand" href="#"></a>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                <ul class="nav navbar-nav nav_1">
                                    <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                                        <h1><a href="index.php">Web  <span>Wulan</span></a></h1> </div>
                                    <li><a href="index.php">Beranda</a></li>
                                    <li><a href="products.php">Products</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk Unggulan <b class="caret"></b></a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <ul>
                                                    <li class="dropdown-header">Season 1</li>
                                                    <li><a href="#">Tipe 1</a></li>
                                                    <li><a href="#">Tipe 2</a></li>
                                                    <li class="divider"></li>
                                                    <li class="dropdown-header">Season 2</li>
                                                    <li><a href="#">Tipe 1</a></li>
                                                    <li><a href="#">Tipe 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </li>
                                    <li><a href="tentang.html">Tentang Kami</a></li>
                                    <li class="last"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <div class="clearfix"> </div>
                    <!---pop-up-box---->
                    <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                    <script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!---//pop-up-box---->
                    <div id="small-dialog" class="mfp-hide">
                        <div class="search-top">
                            <div class="login">
                                <form action="#" method="post">
                                    <input type="submit" value="">
                                    <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"> </form>
                            </div>
                            <p> Shopping</p>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            $('.popup-with-zoom-anim').magnificPopup({
                                type: 'inline'
                                , fixedContentPos: false
                                , fixedBgPos: true
                                , overflowY: 'auto'
                                , closeBtnInside: true
                                , preloader: false
                                , midClick: true
                                , removalDelay: 300
                                , mainClass: 'my-mfp-zoom-in'
                            });
                        });
                    </script>
                    <!---->
                </div>
            </div>
        </div>
<!--//header-->
<div class="contact">
			<div class="container">
				<h3>Contact</h3>
				
				<div class="contact-grids">
					<div class="contact-form">
							<form action="#" method="post">
								<div class="contact-bottom">
									<div class="col-md-4 in-contact">
										<p>Name</p>
										<input type="text" name="name">
									</div>
									<div class="col-md-4 in-contact">
										<p>Email</p>
										<input type="text" name="email" >
									</div>
									<div class="col-md-4 in-contact">
										<p>Phone Number</p>
										<input type="text" name="phonenumber">
									</div>
									<div class="clearfix"> </div>
								</div>
							
								<div class="contact-bottom-top">
									<p>Message</p>
									<textarea  name="message"> </textarea>								
									</div>
								<input type="submit" value="Send">
							</form>
						</div>
				
			</div>
		</div>
	</div>
<!--//content-->
<!--map-->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7272384838166!2d112.75563781450884!3d-7.2718476947511475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd38ea51a2f%3A0x2640d21feb8c9fd8!2sUniversitas+Airlangga!5e0!3m2!1sid!2sid!4v1478346984309" width="100%" height="" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
<!--//map-->
<!--footer-->
<div class="footer">
           
            <div class="footer-bottom">
                <div class="container">
                    <div class="address">
					<div class=" address-more">
						<div class="col-md-4 address-grid">
							<i class="glyphicon glyphicon-map-marker"></i>
							<div class="address1">
								<p>Surabaya</p>
								<p>PO BOX 17111</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-phone"></i>
							<div class="address1">
								<p>+123 456 78</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="col-md-4 address-grid ">
							<i class="glyphicon glyphicon-envelope"></i>
							<div class="address1">
								<p><a href="mailto:@example.com"> info@example.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
                    <div class="clearfix"> </div>
                    <p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2017 Web Katalog</p>
                </div>
            </div>
        </div>
<!--footer-->
</body>
</html>