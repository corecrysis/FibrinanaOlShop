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
            $query1= "SELECT * FROM `tb_gallery` g join tb_category c on g.g_category = c.p_id_category join tb_prod_gallery pg on g.g_id_gallery = pg.g_id_gallery group by g.g_id_gallery desc";
           $result1 = $dbh->query($query1)->fetchAll();
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
        <!--        <link href="css/dropzone.css" rel="stylesheet">-->
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
                <li >
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
                <li>
                    <a href="mail.php">
                        <svg class="glyph stroked table">
                            <use xlink:href="#stroked-table"></use>
                        </svg> Mail System</a>
                </li>
                <li>
                    <a href="settings.php">
                        <svg class="glyph stroked app-window">
                            <use xlink:href="#stroked-app-window"></use>
                        </svg> Tambah Season </a>
                </li>
                <li class="active">
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
            <div >
                <div class="row">
                    <div class="container">
                        <input type="button" onclick="location.href='gallery.php'" value="Tambah Produk">
<!--                        <button><a href="gallery.php">Tambah Produk</a></button>-->
<!--                        <input type="button" href="gallery.php" value="Tambah Produk">-->
                        <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="90%">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Produk</th>
                                                <th>Kategori</th>
                                                <th>Gambar</th>
<!--                                                <th>Aksi</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $x = 1; foreach ( $result1 as $r1 ) 
            { ?>
                                                <tr>
                                                    <td><?php echo $x; ?></td>
                                                    <td><?php echo $r1['g_nama_produk']; ?></td>
                                                    <td><?php echo $r1['g_category']; ?></td>
                                                    <td><center><img width="150px" src="<?php echo $r1['p_tmp_pict']; ?>"></center></td>
                                                    
                                                    
                                                        
                                                    
<!--
                                                    <form method="POST" action="delete_a_folder.php">
                                                        <td>
                                                            <input type="hidden" name="id1" id="hx" value="<?php echo $r3['p_id_category']; ?>">
                                                            <input type="submit" name="submit" value="Hapus" class="btn btn-primary"> </td>
                                                    </form>
-->
                                                </tr>
                                                <?php $x++; }?>
                                        </tbody>
                                    </table>
                        <!--
                    <div class="col-md-6">
                        <div id="dropzone">
                        <form action="upload.php" class="dropzone needsclick dz-clickable"></form>
                        </div>
                    </div>
--></div>
                </div>
                <!--/.row-->
                <div class="row"> </div>
                <!--/.row-->
                <div class="row"> </div>
                <!--/.row-->
                <div class="row"> </div>
                <!--/.row-->
                <div class="row"> </div>
                <!--/.row-->
            </div>
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
            <!--        <script src="js/dropzone.js"></script>-->
            <!-- DataTables -->
            <script src="https://code.jquery.com/jquery-1.12.3.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
            <script src="https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js"></script>
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