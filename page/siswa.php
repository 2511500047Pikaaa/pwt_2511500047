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

if(isset($_GET['action'])) {
  if($_GET['action'] == "hapus") {
    $kd = $_GET['kd'];
    $query = mysqli_query($conn, "DELETE FROM siswa where Nis='$kd'");

   if ($query) {
      echo '
      <div class="alert alert-warning alert-dismissible">
      Berhasil Di Hapus</div>';
      echo '<meta http-equiv="refresh" content="1;url=starter.php?page=siswa">';
    }
  }
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <a href="starter.php?page=tambah_siswa" class="btn btn-primary btn-sm">
      Tambah Siswa</a>
      <table class="table table-strapped">
        <tread>
          <tr>
            <th>NO</tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Jenis Kelamin</th>
            <th>HP</th>
            <th>ID Kelas</th>
            <th>Aksi</th>
          </tr>
        <tread>
        <?php
        $no = 0;
        $query = mysqli_query($conn, "SELECT * FROM siswa");
        while ($result = mysqli_fetch_array($query) ) {
          $no++
        ?>
        <tbody>
          <tr>
           <td><?= $no;?></td>
           <td><?=$result['Nis']; ?></td>
           <td><?=$result['Nm_siswa']; ?></td>
           <td><?=$result['Jenkel']; ?></td>
           <td><?=$result['Hp']; ?></td>
           <td><?=$result['Id_kelas']; ?></td>
           <td>
             <a href="starter.php?page=siswa&action=hapus&kd=<? $result['Nis']?>" tittle=""><span class="badge badge-danger">Hapus</span></a>
             <a href="starter.php?page=edit_siswa&kd=<?= $result['Nis'] ?>" tittle =""><span class="badge badge-warning">Edit</span></a>
             </td>
           </tr>
           </tbody>
        <?php } ?>
     </table>
   </div>
 </div>
</div>
</div> 