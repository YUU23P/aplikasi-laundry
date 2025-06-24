<?php
$title = 'pelanggan';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT * FROM member';
$data = ambildata($conn,$query);
?> 
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title"><i class="fa fa-shopping-cart fa-fw" aria-hidden="true"></i> Pilih Pelanggan</h4> </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="alert alert-info" role="alert">    
					Jika pelanggan belum terdaftar maka daftarkan dulu lewat menu pelanggan
					</div>
                <div class="table-responsive">
                    <table class="table table-striped"" id="table">
                        <thead>
                            <tr>
                                <th width="5%" class="text-center">No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>JK</th>
                                <th>Telepon</th>
                                <th>No KTP</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $member): ?>
                                <tr>
                                    <td class="text-center"></td>
                                    <td><?= $member['nama_member'] ?></td>
                                    <td><?= $member['alamat_member'] ?></td>
                                    <td><?= $member['jenis_kelamin'] ?></td>
                                    <td><?= $member['telp_member'] ?></td>
                                    <td><?= $member['no_ktp'] ?></td>
                                    <td align="center">
                                          <a href="transaksi_tambah.php?id=<?= $member['id_member']; ?>" data-toggle="tooltip" data-placement="bottom" title="Pilih" class="btn btn-success btn-block"><i class="fa fa-check fa-fw"></i> Pilih</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- table -->
    <!-- ============================================================== -->
    <div class="row">
        
    </div>
</div>
<?php
require'layout_footer.php';
