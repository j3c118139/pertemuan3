<?php 
    include 'koneksi.php';
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $olahraga_favorit = implode(",",$_POST['olahraga_favorit']);
    $foto = $_POST['foto'];

    mysqli_query($kon,"UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', agama='$agama', olahraga_favorit='$olahraga_favorit', foto='$foto' WHERE id='$id'") or die(mysqli_error(''));

    header("location:view.php");
    ?>  