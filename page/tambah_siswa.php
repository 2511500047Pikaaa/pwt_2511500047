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
$carikode = mysqli_query($koneksi, "select max(nis) from siswa") or die (
    mysqli_error());
$datakode = mysqli_fetch_array($carikode);
if($datakode != NULL) {
    $nilaikode = substr($datakode[0], 2);
    $kode = (int) $nilaikode;
    $kode = $kode + 1;
    $hasilkode ="N-" .str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {$hasilkode ="N-"; }
$_SESSION["KODE"] = $hasilkode;

if(isset($_POST['tambah'])){
    $nis = $_POST['nis'];
    $id_user = $_POST['id_user'];
    $nm_siswa = $_POST['nm_siswa'];
    $jenkel = $_POST['jenkel'];
    $hp = $_POST['hp'];
    $id_kelas = $_POST['id_kelas'];

    $insert = mysqli_query($koneksi,"INSERT INTO siswa value ('$nis','$id_user','$nm_siswa','$jenkel','$hp','$id_kelas')");
    if($insert) {
        echo '<div class="alert alert-info-dismissible">
        <button type="button" class="close" data-dismiss="alert"
        aria-hidden="true">X</button>
        <h5><i class="icon fas fa-info"></i> Info </h5>
        <h4>Berhasil Di Simpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=siswa">';
    }else{
        echo '<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"
        aria-hidden="true">X</button
        <h5> <i class="icon fas fa-info"></i> Info </h5>
        <h4>Gagal Di Simpan</h4></div>';
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
                                <label for="nis">NIS Siswa</label>
                                <input type="text" name="nis" value="<?= $hasilkode; ?>" placeholder="NIS" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <Label for="id_user">ID User</label>
                                <input type="text" name="id_user" id="id_user" placeholder="ID User" class="form-control">
                            </div>
                             <div class="form-group">
                                <Label for="nm_siswa">Nama Siswa</label>
                                <input type="text" name="nm_siswa" id="nm_siswa" placeholder="Nama Siswa" class="form-control">
                            </div>
                             <div class="form-group">
                                <Label for="jenkel">Jenis Kelamin</label>
                                <input type="text" name="jenkel" id="jenkel" placeholder="Jenis Kelamin" class="form-control">
                            </div>
                             <div class="form-group">
                                <Label for="hp">No HP</label>
                                <input type="text" name="hp" id="hp" placeholder="No HP" class="form-control">
                            </div>
                            <div class="form-group">
                                <Label for="id_kelas">ID Kelas</label>
                                <input type="text" name="id_kelas" id="id_kelas" placeholder="ID Kelas" class="form-control">
                            </div>
                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>