<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>KOST</title>
        <!-- Bootstrap CSS -->
        <?php require_once('template/css.php'); ?>
        <style>
            .carousel-item {
                height: 100vh;
                min-height: 350px;
                background: no-repeat center center scroll;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <?php include "template/nav.php"; ?>
        <?php include "template/header.php"; ?>

        <!-- Page Content -->
        <section class="py-5">
            <div class="container">
                <div class="row">

                    <?php
                    include "config/config.php";
                    $data = mysqli_query($koneksi,"SELECT * FROM kost");
                    ?>

                    <?php while ($kost = mysqli_fetch_array($data)): ?>
                    <div class="col-md-3">

                        <div class="card">
                            <img class="card-img-top" src="<?= 'data/'.$kost['gambar']; ?>" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?= substr($kost['nama'],0,13); ?></h4>
                                <h4 class="card-title"><?= "Rp. ".rupiah($kost['harga']); ?></h4>
                                <p class="card-text"><?= substr($kost['keterangan'],0,100); ?></p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="btn btn-primary">Buy!</a>
                            </div>
                        </div>

                    </div>
                    <?php endwhile; ?>

                </div>


            </div>
        </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php require_once('template/js.php'); ?>
    </body>
</html>