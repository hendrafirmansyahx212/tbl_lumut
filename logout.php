<?php 
session_start();


    echo "
        <script>
            alert('berhasil Logout');
            window.location='index.php';
        </script>";

session_destroy();

 ?>