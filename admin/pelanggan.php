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
            <h4 class="page-title"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Data Pelanggan</h4> </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                        <a href="pelanggan_tambah.php" class="btn btn-success box-title"><i class="fa fa-plus fa-fw"></i> Tambah Data</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped" id="table">
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
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                          <a href="pelanggan_edit.php?id=<?= $member['id_member']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                          <a href="pengguna_hapus.php?id=<?= $member['id_member']; ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </div>
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
