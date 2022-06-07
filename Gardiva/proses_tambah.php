<?php
include("connect.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['telp'];
    $prodi = $_POST['prodi'];

    mysqli_query($db, "INSERT INTO mahasiswa VALUES
    ('','$nama', '$alamat', '$telp', '$prodi')");

    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
}