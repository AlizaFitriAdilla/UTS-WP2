<h1>Form Tambah Data</h1>

<form method="POST">
    JUDUL : <input type="text" name="judul" id="judul"><br>
    PENULIS : <input type="text" name="penulis" id="penulis"><br>
    PENERBIT : <input type="text" name="penerbit" id="penerbit"><br>
    <input type="submit" value="Simpan">
</form>

<?php
    if(isset($_POST['judul']) and !empty($_POST['judul'])) {
        include('koneksi.php');
        $sql = "insert into masterbuku(judul_buku, penulis, penerbit) values('".$_POST['judul']."','".$_POST['penulis']."','".$_POST['penerbit']."') ";
        $result = pg_affected_rows(pg_query($sql));
        if($result == 1) {
            echo '<script type="text/javascript">';
            echo 'alert("Data telah tersimpan");';
            echo 'window.location.href = "index.php";';
            echo '</script>'; 
        }
    }
?>