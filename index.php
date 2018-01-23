<?php
include('koneksi.php');
session_start();
$statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
unset($_SESSION['msg']);
$query= "select * from tb_gallery g  join tb_prod_gallery p on g.g_id_gallery = p.g_id_gallery  join tb_category c on c.p_id_category=g.g_category group by g.g_id_gallery limit 4";
$result = $dbh->query($query)->fetchAll();
$query2 = "select * from tb_garmen order by rand() limit 6";
$result2 = $dbh->query($query2)->fetchAll();
?>
    <!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
    <!DOCTYPE html>
    <html class="loading">

    <head>
        <title>Wulan Store</title>
        <link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Wulan Store" />
        <script type="application/x-javascript">
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <!-- start menu -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/simpleCart.min.js">
        </script>
        <!-- slide -->
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: false
                    , speed: 500
                    , namespace: "callbacks"
                    , pager: true
                , });
            });
            $("html").removeClass("loading");
        </script>
        <!-- animation-effect -->
        <link href="css/animate.min.css" rel="stylesheet">
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!-- //animation-effect -->
        <script>
            function deselect(e) {
                $('.pop').slideFadeToggle(function () {
                    e.removeClass('selected');
                });
            }
            $(function () {
                $('#contact').on('click', function () {
                    if ($(this).hasClass('selected')) {
                        deselect($(this));
                    }
                    else {
                        $(this).addClass('selected');
                        $('.pop').slideFadeToggle();
                    }
                    return false;
                });
                $('.close').on('click', function () {
                    deselect($('#contact'));
                    return false;
                });
            });
            $.fn.slideFadeToggle = function (easing, callback) {
                return this.animate({
                    opacity: 'toggle'
                    , height: 'toggle'
                }, 'fast', easing, callback);
            };
        </script>
        <style>
		
		.dropdown-header {
			color : black;
		}
		ul.dropdown-menu{
			left:0px;
		}
            a.selected {
                background-color: #1F75CC;
                color: black;
            }
            
            .messagepop {
                background-color: #FFFFFF;
                border: 1px solid #999999;
                cursor: default;
                display: none;
                margin-top: 5px;
                position: relative;
                top: -100px;
                text-align: left;
                width: 400px;
                padding: 25px 25px 20px;
            }
            
            label {
                display: block;
                margin-bottom: 3px;
                padding-left: 15px;
                text-indent: -15px;
            }
            
            .messagepop p,
            .messagepop.div {
                border-bottom: 1px solid #EFEFEF;
                margin: 8px 0;
                padding-bottom: 5px;
            }
            
            .modal-footer {
                background: #e5e6eb
            }
          .img {
                width: 100%;
                height: auto;
            }
            
            /* The Close Button */
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .modal-header {
                padding: 2px 16px;
                background-color: #be9b7b;
                color: white;
            }

            .modal-body {padding: 2px 16px;}

            .modal-footer {
                padding: 2px 16px;
                background-color: #be9b7b;
                color: white;
            }
            .form-style-5{
                    max-width: 500px;
                    padding: 10px 20px;
                    background: #f4f7f8;
                    margin: 10px auto;
                    padding: 20px;
                    background: #f4f7f8;
                    border-radius: 8px;
                    font-family: Georgia, "Times New Roman", Times, serif;
                }
                .form-style-5 fieldset{
                    border: none;
                }
                .form-style-5 legend {
                    font-size: 1.4em;
                    margin-bottom: 10px;
                }
                .form-style-5 label {
                    display: block;
                    margin-bottom: 8px;
                }
                .form-style-5 input[type="text"],
                .form-style-5 input[type="date"],
                .form-style-5 input[type="datetime"],
                .form-style-5 input[type="email"],
                .form-style-5 input[type="number"],
                .form-style-5 input[type="search"],
                .form-style-5 input[type="time"],
                .form-style-5 input[type="url"],
                .form-style-5 textarea,
                .form-style-5 select {
                    font-family: Georgia, "Times New Roman", Times, serif;
                    background: rgba(255,255,255,.1);
                    border: none;
                    border-radius: 4px;
                    font-size: 16px;
                    margin: 0;
                    outline: 0;
                    padding: 7px;
                    width: 100%;
                    box-sizing: border-box; 
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box; 
                    background-color: #e8eeef;
                    color:#8a97a0;
                    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                    margin-bottom: 30px;

                }
                .form-style-5 input[type="text"]:focus,
                .form-style-5 input[type="date"]:focus,
                .form-style-5 input[type="datetime"]:focus,
                .form-style-5 input[type="email"]:focus,
                .form-style-5 input[type="number"]:focus,
                .form-style-5 input[type="search"]:focus,
                .form-style-5 input[type="time"]:focus,
                .form-style-5 input[type="url"]:focus,
                .form-style-5 textarea:focus,
                .form-style-5 select:focus{
                    background: #d2d9dd;
                }
                .form-style-5 select{
                    -webkit-appearance: menulist-button;
                    height:35px;
                }
                .form-style-5 .number {
                    background: #1abc9c;
                    color: #fff;
                    height: 30px;
                    width: 30px;
                    display: inline-block;
                    font-size: 0.8em;
                    margin-right: 4px;
                    line-height: 30px;
                    text-align: center;
                    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                    border-radius: 15px 15px 15px 0px;
                }

                .form-style-5 input[type="submit"],
                .form-style-5 input[type="button"]
                {
                    position: relative;
                    display: block;
                    padding: 19px 39px 18px 39px;
                    color: #FFF;
                    margin: 0 auto;
                    background: #be9b7b;
                    font-size: 18px;
                    text-align: center;
                    font-style: normal;
                    width: 100%;
                    border: 1px solid #be9b7b;
                    border-width: 1px 1px 3px;
                    margin-bottom: 10px;
                }
                .form-style-5 input[type="submit"]:hover,
                .form-style-5 input[type="button"]:hover
                {
                    background: #4b3832;
					border: 1px solid #4b3832;
                }
        </style>
    </head>

    <body>
        <!--Modal COba-->
        
        <!-- Modal -->
        <div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 style="line-height: 2.4;" class="modal-title" id="memberModalLabel">Halo, Selamat Datang !</h3> </div>
                    <center>
                        <div class="modal-body">
                            <div class="form-style-5">
                            <form method="post" action="subs_cus.php">
                            <fieldset>
                            <legend>Subscribe Us</legend>
                                <input type="text" name="fname" placeholder="Your First Name *" id="first">
                                <input type="text" name="lname" placeholder="Your Last Name *" id="last">
                                <input type="text" name="city" placeholder="Your City *" id="city">
                                <input type="text" name="email" placeholder="Your Email *" id="email">
                            </fieldset>
                            <input type="submit" value="Subscribe" class="btn btn-primary" name="submit" id="message_submit" />
                            </form>
                            </div>
                            </div>
                    </center>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
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
                                        <h1><a href="index.php">Wulan <span>Store</span></a></h1> </div>
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
													<hr>
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
        <!--banner-->
        <div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="background-image: url('image/wulan1.jpg');">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <h1 class="super-heading">Produk Terkini !</h1>
                        </div>
                </div>
                <div class="item" style="background-image: url('image/wulan1.jpg');">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                         <h1 class="super-heading">Produk Terkini !</h1>
                    </div>
                </div>
                <div class="item" style="background-image: url('image/wulan1.jpg');">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                         <h1 class="super-heading">Produk Terkini !</h1>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--//banner-->
    <!--content-->
        <div class="products">
            <div class="container">
                <h2>TOP WORKSHOP</h2>
                <div class="con-tp">
		<div class="container">
            <?php foreach($result2 as $r2){ ?>
			<div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
				<a href="#">
					<div class="content-grid-effect slow-zoom vertical">
						<div class="img-box"><img src="<?php echo $r2['tmp_garmen']; ?>" alt="image" class="img-responsive zoom-img"></div>
						<div class="info-box">
							<div class="info-content simpleCart_shelfItem">
										<h4>Workshop</h4>
							</div>
						</div>
					</div>
				</a>
			</div>
			<?php } ?>
		</div>
	</div>
            </div>
        </div>
    
        <!--content-->
        <div class="products">
            <div class="container">
                <h2>TOP BRAND</h2>
                <div class="content-top">
			<div class="content-top1">
					
			</div>
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
                </div>
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
        <script>
            $(document).ready(function () {
                $('#memberModal').modal('show');
            });
        </script>
        
    </body>

    </html>