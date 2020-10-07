<?php
include "koneksi.php";

    if(isset($_GET['id'])){
            
        $sql = "DELETE FROM mahasiswa WHERE id=".$_GET['id'];
        $query = mysqli_query($kon, $sql);

        if( $query ){
            header("location:view.php");
        } else {
            die("gagal menghapus...");
        }

    } else {
        die("akses dilarang...");
    }

?>
