<?php
$title = 'outlet';
require'functions.php';


if(isset($_POST['btn-simpan'])){
    $nama   = $_POST['nama_outlet'];
    $alamat = $_POST['alamat_outlet'];
    $telp   = $_POST['telp_outlet'];

    $query = "INSERT INTO outlet (nama_outlet,alamat_outlet,telp_outlet) values ('$nama','$alamat','$telp')";
    
    $execute = bisa($conn,$query);
    if($execute == 1){
        $success = 'true';
        $title = 'Berhasil';
        $message = 'Berhasil Simpan Data';
        $type = 'success';
        header('location: outlet.php?crud='.$success.'&msg='.$message.'&type='.$type.'&title='.$title);
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
                    <label>Nama Outlet</label>
                    <input autocomplete="off" type="text" name="nama_outlet" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Outlet</label>
                    <textarea autocomplete="off" name="alamat_outlet" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input autocomplete="off" type="text" name="telp_outlet" class="form-control">
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