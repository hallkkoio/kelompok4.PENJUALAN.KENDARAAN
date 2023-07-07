<?php
require 'function.php';
require 'cek.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Kelompok 3</div>
                <div class="list-group list-group-flush">
                    
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logout</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                        <div class="card mb-4">
                            <div class="card-header">
                               <a href="tambahdata.php" class="btn btn-primary">Tambah Data Pembelian</a>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kendaraan</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal Data Masuk</th>
                                                <th>Pembeli</th>
                                                <th>Aksi</th>
                                                
                                            </tr>
                                        </thead>
                                        
                                        <tbody>
                                            <?php
                                            $ambilsemuadatastok = mysqli_query($koneksi, "SELECT * FROM pembelian");
                                            $i = 1;
                                            while($data=mysqli_fetch_array($ambilsemuadatastok)){
                                               
                                                $kendaraan = $data['kendaraan'];
                                                $deskripsi = $data['deskripsi'];
                                                $tanggal = $data['tanggal'];
                                                $pembeli = $data['pembeli'];      
                                                $idb = $data['idbeli'];                                    

                                            ?>


                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$kendaraan;?></td>
                                                <td><?=$deskripsi;?></td>
                                                <td><?=$tanggal;?></td>
                                                <td><?=$pembeli;?></td>
                                                <td>
                                                    <input type="hidden" name="idbarangygmaudihapus" value="<?=$idb;?>">
                                                    <a href="hapusdata.php" type="button" class="btn btn-danger">
                                                        Hapus
                                                    </a>
                                                                   
                                                </td>
                                                
                                            </tr>
                                            <?php
                                            };
                                            ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
