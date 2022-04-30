<?php
    include('koneksi.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buku</title>
</head>
<body>
    <h3>Aplikasi Toko Buku</h3>

    <br>
    <a href="tambah.php">Tambah</a>
    <br>

    <table border="1">
        <thead>
            <tr>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $sql = "select * from masterbuku";
                $resuly = pg_query($sql);

                while ($row = pg_fetch_object($result)) {
                    ?>
                    <tr>
                        <td><?= $row->judul_buku ?></td>
                        <td><?= $row->penulis ?></td>
                        <td><?= $row->penerbit?></td>
                        <td>
                            <?php
                            echo '<a href="hapus.php?judul_buku=' .$row->judul_buku . '">Hapus</a></td>';
                            echo '<td><a href="ubah.php?judul_buku=' . $row->judul_buku . '">Ubah</a>';
                            ?>

                        </td>
                    </tr>
                <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>