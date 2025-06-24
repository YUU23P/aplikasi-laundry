<?php
$title = 'outlet';
require 'functions.php';
require 'layout_header.php';
$query = 'SELECT outlet.*, user.nama_user FROM outlet LEFT JOIN user ON user.outlet_id = outlet.id_outlet';
$data = ambildata($conn, $query);
?>
<div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title"><i class="fa fa-suitcase fa-fw" aria-hidden="true"></i> Data Outlet</h4>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-6">
                        <a href="outlet_tambah.php" class="btn btn-success box-title"><i class="fa fa-plus fa-fw"></i> Tambah Data</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button id="btn-refresh" class="btn btn-primary box-title text-right" title="Refresh Data"><i class="fa fa-refresh" id="ic-refresh"></i></button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped" id="table">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Nama</th>
                                <th>Owner</th>
                                <th>No Telepon</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data as $outlet) : ?>
                                <tr>
                                    <td class="text-center"></td>
                                    <td><?= $outlet['nama_outlet'] ?></td>
                                    <td>
                                        <?php if ($outlet['nama_user'] == null) {
                                            echo 'Belum Ada Owner';
                                        } else {
                                            echo $outlet['nama_user'];
                                        } ?>
                                    </td>
                                    <td><?= $outlet['telp_outlet'] ?></td>
                                    <td><?= $outlet['alamat_outlet'] ?></td>
                                    <td align="center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="outlet_edit.php?id=<?= $outlet['id_outlet']; ?>" data-toggle="tooltip" data-placement="bottom" title="Edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="outlet_hapus.php?id=<?= $outlet['id_outlet']; ?>" onclick="return confirm('Yakin hapus data ? ');" data-toggle="tooltip" data-placement="bottom" title="Hapus" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
require 'layout_footer.php';
