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
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/stylehome.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <ul class="navbar-nav ml-auto">


                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->


                    <li class="nav-item dropdown no-arrow">
                        <?php if (!isset($user['email'])) : ?>

                            <!-- <a href="auth" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm my-3">LogIn</a> -->
                            <a class="nav-link bg btn-block " href="autentifikasi">
                                Login
                            </a>

                        <?php endif; ?>
                        <?php if (isset($user['email'])) : ?>
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image'] ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('user') ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="<?= base_url('user/edit') ?>">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        <?php endif; ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- link -->
    <ul class="nav navlink sticky-top  justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="home.html">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/about/about.html">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/books/books.html">Books</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/main-blog/blog.html">blogs</a>
        </li>
    </ul>
    <!-- last link -->
</body>