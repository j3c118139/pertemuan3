 <?php
    if (isset($_POST['submit'])){
    include "koneksi.php";
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $olahraga_favorit = implode(',',$_POST['olahraga_favorit']);
        $foto = $_FILES['foto']['name'];
        $lokasi =$_FILES['foto']['tmp_name'];
        move_uploaded_file($lokasi,"img/".$foto);
        mysqli_query($kon," INSERT INTO mahasiswa (nim, nama, jenis_kelamin, agama, olahraga_favorit, foto) VALUES ('$nim','$nama','$jenis_kelamin','$agama','$olahraga_favorit','$foto')");

        header("location:view.php");
    };
?>