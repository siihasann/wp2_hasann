<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initialscale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>pustaka-booking | <?= $judul; ?></title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?= base_url('assets/'); ?>datatable/jquery.dataTables.js'; ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/'); ?>datatable/datatables.js'; ?>"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,30
0i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css">
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">Pustaka</a>
            <button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarNavAltMarkup" ariacontrols="navbarNavAltMarkup" aria-expanded="false" arialabel="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="<?= base_url(); ?>">Beranda <span class="sronly"></span></a>
                    <?php
                    if (!empty($this->session->userdata('email'))) { ?>
                        <a class="nav-item nav-link" href="#">Booking Buku</a>
                        <a class="nav-item nav-link" href="<?= base_url('member/myProfil'); ?>">Profil Saya</a>
                        <a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a>
                    <?php } else { ?>
                        <a class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal" href="#"><i class="fas fw fa-login"></i> Daftar</a>
                        <a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a>
                    <?php } ?>
                    <span class="nav-item nav-link navright" style="display:block; marginleft:20px;">Selamat Datang <b><?= $user; ?></b></span>
                </div>
            </div>
        </div>
    </nav>
    <!-- link -->
    <!-- last link -->
</body>