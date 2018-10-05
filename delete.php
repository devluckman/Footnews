<?php
include_once 'koneksi.php';
$id=$_GET['id'];
$proses=$mysqli->query("delete from sepakbola where id='$id'");
if ($proses) {
    echo "<script> alert ('Data Berhasil Dihapus'); document.location='index.php'</script>";
}
else{
    echo "<script> alert ('Data Gagal Dihapus'); document.location='index.php'</script>";
}


?>