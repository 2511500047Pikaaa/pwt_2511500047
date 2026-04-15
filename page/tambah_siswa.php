<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Data Siswa</h1>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "config/koneksi.php";
    //kode otomatis
    $carikode = mysqli_query($conn, "select max(Nis) from siswa") or die (mysqli_error());
    $datakode = mysqli_fetch_array($carikode);
    if($datakode[0] != NULL) {
        $nilaikode = substr($datakode[0], 2);
        $kode = (int) $nilaikode;
        $kode = $kode + 1;
    } else {
        $hasilkode = "M-";
    }

    if(isset($_POST['tambah'])){
        $Nis = $_POST['Nis'];
        $Id_user = $_POST['Id_user'];
        $Nm_siswa = $_POST['Nm_siswa'];
        $Jenkel = $_POST['Jenkel'];
        $Hp = $_POST['Hp'];
        $Id_kelas = $_POST['Id_kelas'];

        $insert = mysqli_query($conn, "INSERT INTO siswa values ('$Nis','$Id_user','$Nm_siswa','$Jenkel','$Hp','$Id_kelas')");
        if ($insert) {
            echo '<div class="alert alert-info-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            <h5><i class="icon fas fa-info"></i> Info </h5>
            <h4>Berhasil Disimpan</h4></div';
            echo '<meta http-equiv="refresh" content="1;url=starter.php?page=siswa">';
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
                                 <label for="Nis">NIS</label>
                                <input type="text" name="Nis" value="<?= $hasilkode; ?>" placeholder="Id Kat" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="Nm_siswa">Nama Siswa</label>
                                <input type="text" name="Nm_siswa" id="Nm_siswa" placeholder="Nama Siswa" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Jenkel">Jenis Kelamin</label>
                                <input type="text" name="Jenkel" id="Jenkel" placeholder="Jenis Kelamin" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Hp">HP</label>
                                <input type="text" name="Hp" id="Hp" placeholder="HP" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Id_kelas">ID Kelas</label>
                                <input type="text" name="Id_kelas" id="Id_kelas" placeholder="ID Kelas" class="form-control">
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>