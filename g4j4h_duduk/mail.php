<?php
include('../koneksi.php');
session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:login.html');
 } else {
$jut = $_SESSION['id_admin'];
$query = "SELECT * FROM tb_login where m_id_user='$jut'";
           $result = $dbh->query($query)->fetch();
//$query1= "SELECT COUNT(*) AS masuk FROM b_member where m_id_member > 1";ORDER BY r_id_news DESC LIMIT 10 OFFSET 0
//           $result1 = $dbh->query($query1)->fetch();  where t_nama_mobil =''
//            $query1= "SELECT * FROM t_mobil";
//           $result1 = $dbh->query($query1)->fetchAll();
//           $query2= "SELECT * FROM t_fasilitas  ";
//           $result2 = $dbh->query($query2)->fetchAll();
//           $query3= "SELECT * FROM t_ruang  ";
//           $result3 = $dbh->query($query3)->fetchAll();
//           $query4= "SELECT COUNT(*) AS ruang FROM t_ruang  ";
//           $result4 = $dbh->query($query4)->fetch();
//           $query5= "SELECT COUNT(*) AS ruang FROM t_fasilitas  ";
//           $result5 = $dbh->query($query5)->fetch();
//           $query6= "SELECT COUNT(*) AS ruang FROM t_mobil  ";
//           $result6 = $dbh->query($query6)->fetch();
//           $query_pinjam= "SELECT * FROM t_data_pinjam  ";
//           $result_pinjam = $dbh->query($query_pinjam)->fetchAll();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wulan Fashion</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="../ckeditor/styles.js" type="text/javascript"></script>
        <script src="../ckeditor/config.js" type="text/javascript"></script>
        <script src="../ckeditor/lang/en.js" type="text/javascript"></script>
        <!--Icons-->
        <script src="js/lumino.glyphs.js"></script>
        <!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#"><span>Wulan</span>Fashion</a>
                    <ul class="user-menu">
                        <li class="dropdown pull-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <svg class="glyph stroked male-user">
                                    <use xlink:href="#stroked-male-user"></use>
                                </svg>
                                <?php echo $result['m_user_name'];?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="logout.php">
                                        <svg class="glyph stroked cancel">
                                            <use xlink:href="#stroked-cancel"></use>
                                        </svg> Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <!--				<input type="text" class="form-control" placeholder="Search">-->
                </div>
            </form>
            <ul class="nav menu">
                <li>
                    <a href="index.php">
                        <svg class="glyph stroked dashboard-dial">
                            <use xlink:href="#stroked-dashboard-dial"></use>
                        </svg> Dashboard</a>
                </li>
                <!--
                <li>
                    <a href="form_pengajuan.php">
                        <svg class="glyph stroked table">
                            <use xlink:href="#stroked-table"></use>
                        </svg> Form Pengajuan</a>
                </li>
-->
                <li class="active">
                    <a href="mail.php">
                        <svg class="glyph stroked table">
                            <use xlink:href="#stroked-table"></use>
                        </svg> Mail System</a>
                </li>
                <li>
                    <a href="settings.php">
                        <svg class="glyph stroked app-window">
                            <use xlink:href="#stroked-app-window"></use>
                        </svg> Folder Setting </a>
                </li>
                <li>
                    <a href="gallery.php">
                        <svg class="glyph stroked app-window">
                            <use xlink:href="#stroked-app-window"></use>
                        </svg> Gallery </a>
                </li>
            </ul>
        </div>
        <!--/.sidebar-->
        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <div class="row">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.php">
                            <svg class="glyph stroked home">
                                <use xlink:href="#stroked-home"></use>
                            </svg>
                        </a>
                    </li>
                </ol>
            </div>
            <!--/.row-->
            <div class="row">
                <div class="col-lg-12">
                    <center>
                        <h1 class="page-header">kirim eail to subscriber</h1> </center>
                </div>
            </div>
            <!--/.row-->
            <div class="row">
                <table class="zebra-table">
                    <form action="email.php" method="post" role="form" style="display: block;">
                        <div class="users">
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Judul</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="p_judul" placeholder="subject" required> </div>
                            </div>
                            <br/>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Deskripsi</label>
                                <div class="col-sm-12">
                                    <textarea id="editor1" name="r_news_data" class="text" value=""></textarea>
                                </div>
                            </div>
                             
                            <div class="form-group">
                            <label for="inputEmail3" class="col-sm-4 control-label"></label>
                            <div class="col-sm-4">
                                <button type="submit" name="submit" class="btn btn-primary" value="simpan">Submit</button>
                                <button type="reset" class="btn btn-primary" value="reset" onclick="return confirm('hapus data yang telah diinput?')">Reset</button>
                            </div>
                        </div>
                            
                        </div>
                    </form>
                </table>
                </div>
                <!--/.row-->
                <div class="row"> </div>
                <!--/.row-->
                <div class="row"> </div>
                <!--/.row-->
                <div class="row"> </div>
                <!--/.row-->
            </div>
            <!--/.main-->
            <script src="js/jquery-1.11.1.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/chart.min.js"></script>
            <script src="js/chart-data.js"></script>
            <script src="js/easypiechart.js"></script>
            <script src="js/easypiechart-data.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
            <script src="js/bootstrap-table.js"></script>
            <!-- DataTables -->
            <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js"></script>
            <script type="text/javascript">
                if (typeof CKEDITOR != "undefined") {
                    var editor = CKEDITOR.replace('editor1');
                    CKFinder.setupCKEditor(editor, '');
                }
                if (typeof CKEDITOR == 'undefined') {
                    document.write('CKEditor not found');
                }
                else {
                    jQuery(document).ready(function () {
                        var editor = CKEDITOR.replace('editor1');
                    });
                    CKFinder.setupCKEditor(editor, '');
                }
            </script>
            <script>
                $(document).ready(function () {
                    $('#example1').DataTable();
                });
            </script>
            <!-- Menu Toggle Script -->
            <script>
                $("#menu-toggle").click(function (e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });
            </script>
            <script>
                ! function ($) {
                    $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                        $(this).find('em:first').toggleClass("glyphicon-minus");
                    });
                    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
                }(window.jQuery);
                $(window).on('resize', function () {
                    if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
                })
                $(window).on('resize', function () {
                    if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
                })
            </script>
    </body>

    </html>
    <?php } ?>