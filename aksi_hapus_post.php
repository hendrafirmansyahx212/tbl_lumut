<?php

    include "lib/koneksi2.php";
    
    $idpost = $_GET['idpost'];

    $QueryHapus = mysqli_query($koneksi, "DELETE FROM post WHERE idpost = '$idpost'");
    if ($QueryHapus) {
        echo "
        <script>
            alert('Data berhasil dihapus');
            window.location='post.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus');
            window.location ='post.php';
        </script>";
    }
