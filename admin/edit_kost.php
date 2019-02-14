<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gentelella Alela! | </title>

        <?php require_once("template/css.php"); ?>
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
                        </div>
                        
                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="../assets/img/img.jpg" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2>Ichad</h2>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
                        <?php require_once("template/sidebar.php"); ?>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <?php require_once("template/nav.php"); ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Manajemen Kost</h3>
                            </div>

                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                        <?php
                        include "../config/config.php";
                        $id = $_GET['id'];
                        $kost = mysqli_query($koneksi,"SELECT * FROM kost WHERE id='$id'");
                        ?>
                        <?php foreach($kost as $k):?>
                        <form action="../config/kost/do_edit.php" method="post">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                            
                                <div class="x_title">
                                    <h2>Kost</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li>
                                            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <input type="hidden" name="id" value="<?=$k['id'];?>">
                                    
                                    <div class="form-group">
                                        <label for="nama_kost" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Kost</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input value="<?=$k['nama'];?>" id="nama_kost" class="form-control col-md-7 col-xs-12" type="text" name="nama_kost">
                                    </div>

                                    <div class="clearfix"></div>
                                    
                                    <div class="form-group">
                                        <label for="harga" class="control-label col-md-3 col-sm-3 col-xs-12">Harga / Bulan</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input value="<?=$k['harga'];?>" id="harga" class="form-control col-md-7 col-xs-12" type="text" name="harga">
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="form-group">
                                        <label for="gambar" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Gambar</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="gambar" class="form-control col-md-7 col-xs-12" value="<?=$k['gambar'];?>" type="text" placeholder="contoh: rumah1.jpg" name="gambar">
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="form-group">
                                    <label for="keterangan" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control" name="keterangan" id="keterangan"><?=$k['keterangan'];?></textarea>
                                </div>
                            
                                <br />
                                <br />

                                <div class="ln_solid"></div>
                                <input type="submit" id="submit-btn" value="Edit" class="btn btn-primary">

                                </div>
                            </div>
                        </div>
                        </form>
                        <?php endforeach; ?>
                        </div>

                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
                <?php require_once("template/footer.php"); ?> 
                <!-- /footer content -->
            </div>

        <?php require_once("template/js.php"); ?>

    </body>
</html>