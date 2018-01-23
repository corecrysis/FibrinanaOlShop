<?php
include('koneksi.php');
session_start();
$ax = $_SESSION['kategori'];
$query= "select * from tb_gallery g  join tb_prod_gallery p on g.g_id_gallery = p.g_id_gallery  join tb_category c on c.p_id_category=g.g_category where  c.p_id_category=$ax  group by g.g_id_gallery ";
$result = $dbh->query($query)->fetchAll();
$query_category="select * from tb_category limit 5";
$result_cat = $dbh->query($query_category)->fetchAll();

?>
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
		a.ar {
			color: grey;
		}
		a.ar:hover {
			color: black;
			text-decoration: none;
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
                                        <h1><a href="index.php">Web  <span>Unair</span></a></h1> </div>
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
		
<!--content-->
<div class="products">
	<div class="container">
		<h2>Products</h2>
		<div class="col-md-9">
<div class="content-top1">
                            
                    <?php foreach($result as $r){ ?>
                       <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                            <div class="col-md1 simpleCart_shelfItem"> 
                                <a href="sess_as.php?id=<?php echo $r['g_id_gallery']; ?>">
							<img class="img-responsive" src="g4j4h_duduk/<?php echo $r['p_tmp_pict']; ?>" alt="" />
						</a>
                                <h3><a href="sess_as.php?id=<?php echo $r['g_id_gallery']; ?>"><?php echo $r['c_nama_kategori']; ?></a></h3>
                                <div class="price"> <a href="sess_as.php?id=<?php echo $r['g_id_gallery']; ?>" class="item_add">Detil</a>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                            			<div class="clearfix"> </div>
                           		</div>	
			
            
			
			<div class="clearfix"> </div>
			
		</div>
		<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
                    <h3 class="cate">Kategori</h3>
							 <ul class="menu-drop">
                                 <?php foreach($result_cat as $rc){ ?> 
							<a class="ar" href="sess_kategori.php?id=<?php echo $rc['p_id_category']; ?>"><?php echo $rc['c_nama_kategori']; ?></a>
								<br>
							
							<?php } ?>
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
<!--
				<div class="product-bottom">
						<h3 class="cate">Informasi Terkini</h3>
                    <?php foreach($result_same as $rs){ ?>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="sess_as.php?id=<?php echo $rs['g_id_gallery']; ?>"><img class="img-responsive " src="g4j4h_duduk/<?php echo $rs['p_tmp_pict']; ?>" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="sess_as.php?id=<?php echo $rs['g_id_gallery']; ?>" >Harga asli menarik  </a></h6>
							<span class=" price-in1"> <?php echo $rs['g_nama_produk']; ?></span>
						</div>	
						<div class="clearfix"> </div>
					</div>
						<?php } ?>		
				</div>
-->

<!--//seller-->
<!--tag-->
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--footer-->
<div class="footer">
     <div align="center" class="container">
                <div class="footer-top">
                    <div class="col-md-12 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
                        <h3>Follow Us On</h3>
                        <div class="social-icons">
                            <ul class="social">
                                <li><a href="#"><i></i></a> </li>
                                <li><a href="#"><i class="facebook"></i></a></li>
                                <li><a href="#"><i class="google"></i> </a></li>
                                <li><a href="#"><i class="linked"></i> </a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                  
                    <div class="clearfix"> </div>
                </div>
            </div>
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