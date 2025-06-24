<?php
$title = 'pelanggan';
require'functions.php';

$id_member = $_GET['id'];
$queryedit = "SELECT * FROM member WHERE id_member = '$id_member'";
$edit = ambilsatubaris($conn,$queryedit);

if(isset($_POST['btn-simpan'])){
    $nama     = $_POST['nama_member'];
    $alamat_member = $_POST['alamat_member'];
    $no_ktp     = $_POST['no_ktp']; 
    $telp_member     = $_POST['telp_member']; 
    $jenis_kelamin     = $_POST['jenis_kelamin']; 
    $query = "UPDATE member SET nama_member = '$nama', alamat_member = '$alamat_member', no_ktp = '$no_ktp', telp_member = '$telp_member', jenis_kelamin = '$jenis_kelamin' WHERE id_member ='$id_member'";
    
    $execute = bisa($conn,$query);
    if($execute == 1){
        $success = 'true';
        $title = 'Berhasil';
        $message = 'Berhasil mengubah pelanggan';
        $type = 'success';
        header('location: pelanggan.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
    }else{
        echo "Gagal Tambah Data";
    }
}


require'layout_header.php';
?> 
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <div class="white-box">
                <form method="post" action="">
                <div class="form-group">
                    <label>No KTP Member</label>
                    <input autocomplete="off" type="text" name="no_ktp" class="form-control" value="<?= $edit['no_ktp'] ?>">
                </div>
                <div class="form-group">
                    <label>Nama Member</label>
                    <input autocomplete="off" type="text" name="nama_member" class="form-control" value="<?= $edit['nama_member'] ?>">
                </div>
                <div class="form-group">
                    <label>Alamat Member</label>
                    <input autocomplete="off" type="text" name="alamat_member" class="form-control" value="<?= $edit['alamat_member'] ?>">
                </div>
                <div class="form-group">
                    <label>No Telepon</label>
                    <input autocomplete="off" type="text" name="telp_member" class="form-control" value="<?= $edit['telp_member'] ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="L" <?php if($edit['jenis_kelamin']  == 'L'){echo "selected";} ?>>Laki-laki</option>
                        <option value="P" <?php if($edit['jenis_kelamin']  == 'P'){echo "selected";} ?>>Perempuan</option>
                    </select>
                </div>
                <div class="text-right">
                    <a href="javascript:void(0)" onclick="window.history.back();" class="btn btn-primary"><i class="fa fa-arrow-left fa-fw"></i> Kembali</a>
                    <button type="reset" class="btn btn-danger"><i class="fa fa-refresh fa-fw"></i> Reset</button>
                    <button type="submit" name="btn-simpan" class="btn btn-success"><i class="fa fa-save fa-fw"></i> Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require'layout_footer.php';
?> 