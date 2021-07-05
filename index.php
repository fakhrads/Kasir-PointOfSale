<?php
session_start();
require('config/mainconfig.php');

if(!isset($_SESSION['user'])) {
	header('location:login.php');
} else {
	$username = $_SESSION['user'];
}

?>

<?php include("layouts/header.php") ?>
<!-- Content Wrapper. Contains page content -->

    <?php
    if(isset($_GET['content'])) {
        $content = $_GET['content'];
        if ($content == "profile") {
            include_once "content/profile.php";
        } else if ($content == "kategori-barang") {
            include_once "content/kategori-barang.php";
        }
    } else {
        include_once "content/index.php";
    }
    ?>
<?php include("layouts/footer.php") ?>