<?php 
session_start();

// koneksi ke database
$conn = mysqli_connect("localhost", "u2203040113", "u2203040113", "dbu2203040113");
if (mysqli_connect_errno()) {
    die("Connection Failed:" . mysqli_connect_error());
}


// menambah makanan minuman baru
if(isset($_POST['addnewmenu'])){
    $namamenu = $_POST['namamenu'];
    $kalori = $_POST['kalori'];

    $addtotable = mysqli_query($conn,"INSERT INTO nutrisi (nama, kalori) VALUES ('$namamenu','$kalori')");
    if($addtotable){
        header('location: index.php');
    }else{
        echo'Gagal';
        header('location: index.php');
    }
}

// menambah menu asupan
if(isset($_POST['menuasupan'])){
    $id_nutrisi = $_POST['id_nutrisi'];
    $kalori_masuk = $_POST['kalori_masuk'];

    $addtoasupan = mysqli_query($conn,"INSERT INTO asupan (id_nutrisi, kalori_masuk) VALUES ('$id_nutrisi','$kalori_masuk')");
    if($addtoasupan){
        header('location: asupan.php');     
    }else{
        echo'Gagal';
        header('location: asupan.php');
    }
}

// menambah menu aktivitas
if(isset($_POST['addnewaktivitas'])){
    $namaaktivitas = $_POST['namaaktivitas'];
    $kalori = $_POST['kalori'];

    $addtoaktivitas = mysqli_query($conn,"INSERT INTO aktivitas (nama_aktivitas, kalori) VALUES('$namaaktivitas','$kalori')");
    if($addtoaktivitas){
        header('location: aktivitas.php');
    }else{
        echo'Gagal';
        header('location: aktivitas.php');
    }
}

// hapus menu dari nama menu
if(isset($_POST['hapusmenu'])){
    $id_nutrisi = $_POST['id_nutrisi'];

    $hapus = mysqli_query($conn,"DELETE FROM nutrisi WHERE id_nutrisi='$id_nutrisi'");
    if($hapus){
        header('location: index.php');
    }else{
        echo 'Gagal';
        header('location: index.php');
    }
}
?>