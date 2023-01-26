<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $role = $_SESSION['role'];
}
?> 
       <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <a class="nav-link" href="post.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Post
                            </a>
                            <a class="nav-link" href="akun.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Akun
                            </a>
                            <?php
                                if ( isset($role)){

                                     ?>
                                     <a class="nav-link" href="Logout.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Logout <?php echo $role; ?>
                                    </a>
                                    <?php 
                                } else { 
                                    ?>

                                   <a class="nav-link" href="Login.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Login
                                    </a>
                                   
                                <?php } ?>
                            
                            
                </nav>
            </div>