<?php
$conn_str = "host=salt.db.elephantsql.com " .
    "port=5432 " .
    "user=djfzkzkf " .
    "dbname=djfzkzkf " .
    "password=iuxj82I-pv-gNavpByzCslyKhFvDKOcE";
$conn = pg_connect($conn_str);

if($conn) {
    echo "<h3>Koneksi Berhasil</h3>";
} else {
    echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
}
?>