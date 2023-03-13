<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Pembayaran SPP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fliud">
            <div class="col-md-12">
                <h2>Edit Pembayaran SPP</h2>
            <?php
            include "koneksi.php";
            $id_kelas=$_GET['id_kelas'];
            $data=mysqli_query($koneksi,"SELECT*from kelas WHERE id_kelas='$id_kelas'");
            while($row=mysqli_fetch_array($data)){
            ?>
            <form action="p_edit_kelas.php" method="POST">
            <div class="form-group">
            <label>Id Kelas</label>
            <input type="text" name="id_kelas" class="form-control" value="<?php echo $row['id_kelas'];?>">
             </div>
        <div class="form-group">
            <label>Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control" value="<?php echo $row['nama_kelas'];?>">
             </div>
            <div class="form-group">
                <label>Kompetensi Keahlian</label>
                <input type="text" name="kompetensi_keahlian" class="form-control" value="<?php echo $row['kompetensi_keahlian'];?>">
        </div>
        <input type="submit" class="btn btn-success btn-block" value="Simpan Perubahan">
        </form>
        <?php }?>
    </div>
    </div>
  </body>
</html>