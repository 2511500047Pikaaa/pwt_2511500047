<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Kelas</h1>
      </div>  
    </div>
  </div>
</div>

<?php
include "config/koneksi.php";

if(isset($_GET['action'])) {
  if($_GET['action'] == "hapus") {
    $kd = $_GET['kd'];
    $query = mysqli_query($conn, "DELETE FROM kelas where Id_kelas='$kd'");

    if ($query) {
      echo '
      <div class="alert alert-warning alert-dismissible">
      Berhasil Di Hapus</div>';
      echo '<meta http-equiv="refresh" content="1;url=starter.php?page=kelas">';
    }
  }
}
?>
<div class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">
        <a href="starter.php?page=tambah_kelas" class="btn btn-primary btn-sm">
      Tambah kelas</a>
      <table class="table table-strapped">
        <thead>
          <tr>
            <th>NO</tr>
            <th>ID Kelas</th>
            <th>Nama kelas</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <?php
        $no = 0;
        $query = mysqli_query($conn, "SELECT * FROM kelas");
        while ($result = mysqli_fetch_array($query)) {
            $no++
        ?>
        <tr>
           <td><?=$no; ?></td>
           <td><?=$result['Id_kelas']; ?></td>
           <td><?=$result['Nm_kelas']; ?></td>
           <td>
             <a href="starter.php?page=kelas&action=hapus&kd=<? $result['Id_kelas']?>" tittle=""><span class="badge badge-danger">Hapus</span></a>
             <a href="starter.php?page=edit_kelas&kd=<?= $result['Id_kelas'] ?>" tittle =""><span class="badge badge-warning">Edit</span></a>
             </td>
           </tr>
           </tbody>
        <?php } ?>
     </table>
   </div>
 </div>
</div>
</div> 