<?php 
require_once('function.php');
require_once('cek.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Didietin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Didietin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="asupan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Asupan
                            </a>
                            <a class="nav-link" href="aktivitas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Aktivitas
                            </a>
                            <a class="nav-link" href="bmi.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Hitung BMI
                            </a>
                            <a class="nav-link" href="tips.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tips!
                            </a>
                            <a class="nav-link" href="logout.php">
                                Logout
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h2 class="mt-4">Pehitungan BMI (Body Mass Index)</h2><br>
                        <div>
                            <h4>Apa itu BMI?</h4>
                                <p>Body Mass Index (BMI) adalah cara menghitung berat badan ideal berdasarkan tinggi dan berat badan. <br>
                                Eits, tapii BMI juga dapat dibedakan berdasarkan usia loh. <br>
                                <h4>Apa itu Pehitungan BMI?</h4>
                                Perhitungan BMI adalah alat untuk mengidentifikasi apakah berat badan kamu termasuk dalam kategori ideal atau tidak. <br><br>
                                <h4>Hal yang perlu diperhatikan pada Kalkulator BMI:</h4>
                                BMI Normal berada pada kisaran 17-25<br>
                                Jika angka BMI melebihi 25, maka kamu memiliki berat badan berlebih<br>
                                Jika angka BMI berada di bawah 17, maka kamu memiliki berat badan rendah<br>
                                Jika angka BMI sudah melebihi angka 27, sebaiknya segera dilakukan penanganan untuk mencegah timbulnya penyakit<br><br>
                                <h4>Peringatan!</h4>
                                Pehitungan ini dapat digunakan oleh seseorang yang berusia 20 tahun ke atas. <br>
                                Perlu diingat bahwa Kalkulator BMI ini tidak dapat diaplikasikan untuk ibu hamil dan anak-anak karena standar BMI yang berbeda.<br><br>
                            </p>
                            <div class>
                                <div>
                                    <h4>Yuk hitung BMI Kamu!</h4><br>
                                        <div class="card-header">
                                            <!-- Button to Open the Modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                                Hitung BMI
                                            </button>

                                            <!-- perhitungan -->
                                        <div class="alert alert-light" role="alert">
                                        <?php 
                                            if(isset($_GET['hitung'])){    
                                                $tinggi = $_GET['tinggi'];
                                                $berat = $_GET['berat'];

                                                $hitung = $berat/($tinggi*$tinggi);

                                                if($hitung <18.5){
                                                    $hasil="Underweight: " . $hitung;
                                                }else if($hitung >= 18.6 && $hitung <= 24.9){
                                                    $hasil= "Yaaa ideal wak badanmu: " . $hitung;
                                                }else if($hitung >= 25 && $hitung <= 29.9){
                                                    $hasil= "Overweight: " . $hitung;
                                                }else{
                                                    $hasil= "Obese, ayoo diet" . $hitung;
                                                }
                                                echo($hasil);
                                            }
                                        ?>
                                        </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>

    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Pehitungan BMI</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="get">
                <div class="modal-header">
                    <input type="float" name="tinggi" id="tinggi" placeholder="Tinggi(m)" class="form-control" required>
                    <br>
                    <input type="number" name="berat"  id="berat" placeholder="Berat(kg)" class="form-control" required>
                    <br>
                    <button class="btn btn-primary" name="hitung" onclick="hasil" >Hitung</button><br><br>
                </div>
            </form>
            </div>
        </div>
    </div>
</html>
