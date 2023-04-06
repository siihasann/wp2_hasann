<?= $this->session->flashdata('pesan'); ?>
<div style="padding: 25px;">
    <div class="x_panel">
        <div class="x_content">
            <!-- Tampilkan semua produk -->
            <div class="row">
                <?php foreach ($buku as $buku) { ?>
                    <div class="col-md-4">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $buku->image; ?>" style="max-width:100%; maxheight: 100%; height: 200px; width: 180px">
                                </div>
                                <div class="caption col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $buku->pengarang ?></h5>
                                        <h5><?= $buku->penerbit ?></h5>
                                        <h5><?= substr($buku->tahun_terbit, 0, 4) ?></h5>
                                        <p class="card-text">
                                            <?php
                                            if ($buku->stok < 1) {
                                                "<i > Booking&nbsp;&nbsp 0</i>";
                                            } else {
                                                echo "<a class='btn btn-outline-primary fas fa-shopping-cart' href=" . base_url('booking/tambahBooking/' . $buku->id) . "> Booking</a>";
                                            }
                                            ?>
                                            <a class="btn btn-outline-warning fas fa-search" href="<?= base_url('home/detailBuku/' . $buku->id); ?>"> Detail</a>
                                        </p>
                                        </p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><?php } ?>
            </div>
        </div>
    </div>
</div>