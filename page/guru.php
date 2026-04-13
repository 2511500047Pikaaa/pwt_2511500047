<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Guru</h1>
      </div>  
    </div>
  </div>
</div>

<?php
if(isset($_GET['action'])) {
  if($_GET['action'] == "hapus") {
    $kd = $_GET['kd'];
    $query = mysqli_query($koneksi, "DELETE FROM mapel where kd_guru='$kd'");

    if ($query) {
      echo '
      <div class="alert alert-warning alert-dismissible">
      Berhasil Di Hapus</div>';
      echo '<meta http-equiv="refresh" content="1;url=starter.php?page=mapel">';
    }
  }
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <a href="starter.php?page=tambah_guru" class="btn btn-primary btn-sm">
      Tambah Guru</a>
      <table class="table table-strapped">
        <tread>
          <tr>
            <th>NO</tr>
            <th>Kd Guru</th>
            <th>Id User</th>
            <th>Nama Guru</th>
            <th>Jenis Kelamin</th>
            <th>Pendidikan Terakhir</th>
            <th>HP</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        <tread>
        <?php
        $no = 0;
        $query = mysqli_query($koneksi, "SELECT * FROM guru");
        while ($result = mysqli_fetch_array($query) ) {
          $no++
        ?>
        <tbody>
          <tr>
           <td><?= $no;?></td>
           <td><?=$result['kd_guru']; ?></td>
           <td><?=$result['id_user']; ?></td>
           <td><?=$result['nm_guru']; ?></td>
           <td><?=$result['jenkel']; ?></td>
           <td><?=$result['pend_terakhir']; ?></td>
           <td><?=$result['hp']; ?></td>
           <td><?=$result['alamat']; ?></td>
           <td>
             <a href="starter.php?page=guru&action=hapus&kd=<? $result['kd_guru']?>" tittle=""><span class="badge badge-danger">Hapus</span></a>
             <a href="starter.php?page=edit_guru&kd=<?= $result['kd_guru'] ?>" tittle =""><span class="badge badge-warning">Edit</span></a>
             </td>
           </tr>
           </tbody>
        <?php } ?>
     </table>
   </div>
 </div>
</div>
</div> 