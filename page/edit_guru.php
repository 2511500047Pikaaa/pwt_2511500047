<div class="content">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Edit Guru</h1>
      </div>  
    </div>
  </div>
</div>

    <?php
    $kd = $_GET['kd'];
    $edit = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM mapel WHERE kd_guru='$kd' "));

    if(isset($_POST['tambah'])){
        $kd_guru = $_POST['kd_guru'];
        $id_user = $_POST['id_user'];
        $nm_guru = $_POST['nm_guru'];
        $jenkel = $_POST['jenkel'];
        $pend_terakhir = $_POST['pend_terakhir'];
        $hp = $_POST['hp'];
        $alamat = $_POST['alamat'];

    $insert = mysqli_query($conn, "UPDATE guru SET kd_guru='$kd_guru', id_user='$id_user', nm_guru='$nm_guru', jenkel='$jenkel', pend_terakhir='$pend_terakhir', hp='$hp', alamat='$alamat'  WHERE kd_mapel='$kd_mapel' ");
        if ($insert) {
            echo '<div class="alert alert-info-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5> <i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Disimpan</h4></div';
            echo '<meta http-equiv="refresh" content="1;url=starter.php?page=mapel">';
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
                                <label for="kd-guru">Kode Guru</label>
                                <input type="text" name="kd_guru" value="<?= $hasilkode; ?>" placeholder="Id Kat" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id_user">ID User</label>
                                <input type="text" name="id_user" id="id_user" placeholder="ID User" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="nm_guru">Nama Guru</label>
                                <input type="text" name="nm_guru" id="nm_guru" placeholder="Nama Guru" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenkel">Jenis Kelamin</label>
                                <input type="text" name="jenkel" id="jenkel" placeholder="Jenis Kelamin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pend_terakhir">Pendidikan Terakhir</label>
                                <input type="text" name="pend_terakhir" id="pend_terakhir" placeholder="Nama Guru" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="hp">HP</label>
                                <input type="text" name="hp" id="hp" placeholder="HP" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control">
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>