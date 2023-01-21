<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = mysqli_real_escape_string($db,$_POST['nama']);
    $alamat = mysqli_real_escape_string($db,$_POST['alamat']);
    $jk = mysqli_real_escape_string($db,$_POST['jenis_kelamin']);
    $agama = mysqli_real_escape_string($db,$_POST['agama']);
    $sekolah = mysqli_real_escape_string($db,$_POST['sekolah_asal']);

    // buat query
    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>