<?php
require 'db.php';

if (isset($_POST['hapus_produk'])){
    $id = $_POST['hapus_produk'];
    $sql = "DELETE FROM tb_keranjang WHERE idkeranjang='".$id."'";
    $query = mysqli_query($conn, $sql);
    header("Location:cart.php");
}
?>