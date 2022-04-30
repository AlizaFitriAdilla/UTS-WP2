<?php
$conn_str= "host=john.db.elephantsql.com" .
    "port=5342 " .
    "user=oubsrwvv " .
    "dbname=oubsrwvv ".
    "password=HQ_SYmWoFQjGjqmSVLoiRbvBvvSeMJMa ";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi Gagal Tersambung</h3>";
}

?>
