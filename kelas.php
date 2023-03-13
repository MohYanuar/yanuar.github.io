<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pembayaran SPP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center"><h3>Aplikasi Pembayaran SPP</h3></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class=" d-grid gap-2 col-md-4">
                    <a href="index.php" class="btn btn-outline-warning btn-lg" type="button">Home</a>
                    <a href="siswa.php" class="btn btn-outline-success btn-lg" type="button">Data Siswa</a>
                    <a href="kelas.php" class="btn btn-outline-warning btn-lg" type="button">Data Kelas</a>
                    <a href="spp.php" class="btn btn-outline-success btn-lg" type="button"> Data SPP</a>
                    <a href="pembayaran.php" class="btn btn-outline-warning btn-lg" type="button">Pembayaran SPP</a>
                    <a href="pengaturan.php" class="btn btn-outline-success btn-lg" type="button">Pengaturan Pengguna</a>
                    <a href="logout.php" class="btn btn-danger btn-lg" type="button">Logout</a>
                </div>
                <div class="col-md-8 bg-default">
                    <div class="row">
                    <div class="col-md-4">
                        <h3>Form Kelas</h3>
                        <form action="p_kelas.php" method="POST">
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="nama_kelas" class="form-control" placeholder="contoh XII">
                            </div>
                            <div class="form-group">
                                <label>Kompetensi Keahlian</label>
                                <select name="kompetensi_keahlian">
                                <option value="Akutansi Keuangan Lembaga">Akutansi Keuangan Lembaga</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Teknik Kendaraan Ringan">Teknik Kendaraan Ringan</option>
                                </select>
                                </div>
                                <br>
                                <div class="d-grid gap-2">
                                <input type="submit" name="btnSimpan" class="btn btn-success btn-block" value="Simpan">
                            </div>
                            
                        </form>
                    </div>
                    <div class="col-md-8">
                        <h3>Data Kelas</h3>
                        <table class="table table-hover">
                            <tr>
                                <th>ID Kelas</th>
                                <th>Nama Kelas</th>
                                <th>Kompetensi Keahlian</th>
                                <th>Menu</th>
                            </tr>
                            <?php
                            include "koneksi.php";
                            $data = mysqli_query($koneksi,"SELECT*from kelas");
                            while($row= mysqli_fetch_array($data)){
                            ?>
                            <tr>
                                <td><?php echo $row['id_kelas']; ?></td>
                                <td><?php echo $row['nama_kelas']; ?></td>
                                <td><?php echo $row['kompetensi_keahlian']; ?></td>
                                <td>
                                    <a href="edit_kelas.php? id_kelas=<?php echo $row['id_kelas'];?>" >Edit</a>
                                    <a href="hapus_kelas.php? id_kelas=<?php echo $row['id_kelas'];?>" >Hapus</a>
                            </td>
                            </tr>
                            <?php }?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">Copyright 2023 | Moh. Y</div>
            </div>
        </div>
    </body>
</html>