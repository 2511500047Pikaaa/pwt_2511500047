<div class="content">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Kelas</h1>
      </div>  
    </div>
  </div>
</div>

    <?php
    $kd = $_GET['kd'];
    $edit = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas='$kd' "));

    if(isset($_POST['tambah'])){
        $id_kelas = $_POST['id_mapel'];
        $nm_kelas = $_POST['nm_mapel'];

    $insert = mysqli_query($koneksi, "UPDATE kelas SET id_kelas='$id_kelas' WHERE nm_kelas='$nm_kelas' ");
        if ($insert) {
            echo '<div class="alert alert-info-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5> <i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Disimpan</h4></div';
            echo '<meta http-equiv="refresh" content="1;url=starter.php?page=kelas">';
        }else{
            echo 'div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5> <i class="icon fas fa-info"></i> Info </h5>
            <h4>Gagal Disimpan</h4></div';
        } 
    }
    ?>

     <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="card-body p-2">
                        <form method="POST" action="">
                            <div class="form-group">
                                <label for="kd-mapel">ID Kelas</label>
                                <input type="text" name="id_kelas" value="<?= $hasilkode; ?>" placeholder="Id Kat" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nm_mapel">Nama Kelas</label>
                                <input type="text" name="nm_kelas" id="nm_kelas" placeholder="Nama Mapel" class="form-control">
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>