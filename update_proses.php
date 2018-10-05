<?php
if (isset($_POST['update'])) {
    $judul        = $_POST['judul'];
    $tanggal      = $_POST['tanggal'];
    $nama_gambar = $_FILES['gambar']['name'];
    $file_gambar = $_FILES['gambar']['tmp_name'];
    $directory = "image/$nama_gambar";
    $move = move_uploaded_file($file_gambar, $directory);
    $deskgambar   = $_POST['isigambar'];
    $desk1        = $_POST['desk1'];
    $desk2        = $_POST['desk2'];
    $desk3        = $_POST['desk3'];
    $id=$_POST['id'];

    include_once 'koneksi.php';
    $proses=$mysqli->query("UPDATE sepakbola SET judul_berita='$judul', tanggal='$tanggal', gambar='$nama_gambar', deskripsi_gambar='$deskgambar', deskripsi_berita1='$desk1', deskripsi_berita2='$desk2', deskripsi_berita3='$desk3'
    where id='$id'");
    if ($proses) {
        echo "<script> alert('Data berhasil di Update'); document.location='index.php' </script>";
    }
    else{
        echo "<script> alert('Data gagal di Update'); document.location='index.php' </script>";
    }
}
?>