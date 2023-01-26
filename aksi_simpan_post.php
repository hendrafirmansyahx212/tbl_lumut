<?php

include "lib/koneksi2.php";

$title =$_POST['title'];
$content =$_POST['content'];





$querySimpan = mysqli_query($koneksi, "INSERT INTO post(title, content) VALUES  ('$title','$content')");
            if ($querySimpan) {
                echo "<script> alert('Data Berhasil Ditambahkan'); window.location='post.php';</script>";
            } else {
                echo "<script> alert('Data Gagal Ditambahkan'); window.location='tambah_form.php'; </script>";
            }


?>


