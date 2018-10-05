<?php
include 'koneksi.php';
$judul        = $_POST['judul'];
$tanggal      = $_POST['tanggal'];
$nama_gambar = $_FILES['gambar']['name'];
$file_gambar = $_FILES['gambar']['tmp_name'];
$directory = "image/$nama_gambar";
$move = move_uploaded_file($file_gambar, $directory);
$deskgambar = $_POST['deskimg'];
$desk1 = $_POST['desk1'];
$desk2 = $_POST['desk2'];
$desk3 = $_POST['desk3'];


$proses = $mysqli->query("INSERT INTO sepakbola (judul_berita, tanggal, gambar, deskripsi_gambar, deskripsi_berita1, deskripsi_berita2, deskripsi_berita3) 
values('$judul','$tanggal','$nama_gambar','$deskgambar','$desk1','$desk2','$desk3')");

//lakukan validasi jika inputan behasil menggunakan if

    if ($proses) { //jika isi variable $proses bernilai true maka
        echo "<script>alert('Berhasil Disimpan');document.location = 'index.php'</script>";
    }