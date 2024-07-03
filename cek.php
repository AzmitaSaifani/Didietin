<?php 
// kalo blm login makka didirect ke sini dulu
if(isset($_SESSION['log'])){

}else{
    header('location:login.php');
}
?>