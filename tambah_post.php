<?php
include "header.php";
?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>


            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                        <form action="aksi_simpan_post.php" method="POST">
                            <table >
                                <thead>
                                    <tr>
                                        <th>title</th>
                                        <th>Content</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                        <td><input type="text" class="form-control border border-danger" name="title"></td>
                                        <td ><input type="text" class="form-control border border-danger" name="content"></td>                                            
                                        <td>
                                            <button type="submit" class="btn btn-success">Tambah</button>
                                            <button><a href="post.php" class="btn btn-danger">Kembali </a></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <?php
        include "footer.php";
    ?>