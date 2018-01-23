<?php
include('../koneksi.php');
session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:../login/login.html');
 } else {
$jut = $_SESSION['id_admin'];
$query = "SELECT * FROM tb_login where m_id_user='$jut'";
           $result = $dbh->query($query)->fetch();

$query3= "SELECT * FROM tb_category";
           $result3 = $dbh->query($query3)->fetchAll();
?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Peminjaman ITS</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="css/responsive.bootstrap.min.css">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
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
                                <?php echo $result['m_user_name']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="logout.php">
                                        <svg class="glyph stroked cancel">
                                            <use xlink:href="#stroked-cancel"></use>
                                        </svg> Logout</a>
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
                <li>
                    <a href="mail.php">
                        <svg class="glyph stroked table">
                            <use xlink:href="#stroked-table"></use>
                        </svg> Mail System</a>
                </li>
                <li class="active">
                    <a href="settings.php">
                        <svg class="glyph stroked app-window">
                            <use xlink:href="#stroked-app-window"></use>
                        </svg> Tambah Season </a>
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
                    <h1 class="page-header">Setting</h1> </div>
            </div>
            <!--/.row-->
            <div class="container">
                <div class="col-md-8"> </div>
                <!--/.row-->
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6 top-footer1">
                                <div class="form-group">
                                    <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Nama kategori</th>
                                                
                                                <th>Aksi Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ( $result3 as $r3 ) 
            { ?>
                                                <tr>
                                                    <td>
                                                        <?php 
             echo $r3['c_nama_kategori'];
              ?>
                                                    </td>
                                                    
                                                        
                                                    
                                                    <form method="POST" action="delete_a_folder.php">
                                                        <td>
                                                            <input type="hidden" name="id1" id="hx" value="<?php echo $r3['p_id_category']; ?>">
                                                            <input type="submit" name="submit" value="Hapus" class="btn btn-primary"> </td>
                                                    </form>
                                                </tr>
                                                <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                                <h3>Tambah kategori</h3>
                                <form method="POST" action="p_folder_ins.php">
                                    <input type="text" name="foldername" style="border-radius:4px 4px 4px 4px" id="foldername">
                                    <input type="submit" name="submit" class="btn btn-primary" value="Create" /> </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.row-->
                <div class="col-md-8"> </div>
                <!--/.row-->
            </div>
            <div class="row">
                <div class="col-md-8"> </div>
                <!--/.col-->
                <div class="col-md-4"> </div>
                <!--/.col-->
            </div>
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
        <script>
            $('#calendar').datepicker({});
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