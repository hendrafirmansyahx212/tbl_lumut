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
                            <div>
                                <button><a href="tambah_post.php">Tambah</a></button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>title</th>
                                            <th>date</th>
                                            <th>content</th>
                                            <th>username</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>title</th>
                                            <th>date</th>
                                            <th>content</th>
                                            <th>username</th>
                                        </tr>
                                    </tfoot>
                                    <?php
                                            $sql = "SELECT * FROM post ";
                                            $q = mysqli_query($koneksi, $sql);
                                            $i=1;
                                        ?>
                                        <?php
                                            while($data = mysqli_fetch_array($q)){
                                           
                                        ?>
                                        <tbody class="border border-danger">
                                            <tr>

                                                <td><?php echo $i++?></td>
                                                <td class="font-8 font-weight-large"><?php echo $data['title']; ?></td>
                                                <td><?php echo substr($data['content'],0,40) ?></td>
                                                <td><?php echo substr($data['date'],0,40) ?></td>
                                                <td><?php echo substr($data['username'],0,40) ?></td>
                                                <td>
                                                    <div class="popover-icon">
                                                        <a class="btn btn-danger text-white font-20 rounded-circle btn-circle "
                                                            href="form_edit_post.php?idpost=<?= $data['idpost']; ?>"><i class="fas fa-edit"></i></a>
                                                        <a class="btn btn-danger text-white font-20 rounded-circle btn-circle "
                                                            href="<?php echo $baseUrl; ?>aksi_hapus_post.php?idpost=<?= $data['idpost']; ?>" onclick="return confirm('Hapus Data ini?')"><i class="fa fa-times"></i></a>  
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                        <?php
                                            }
                                        ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

<?php
include "footer.php";
 ?>