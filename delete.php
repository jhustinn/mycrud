<?php 

    require_once "config.php";

    $id = $_GET['id'];

    $query = mysqli_query($conn, "DELETE FROM daftar WHERE no='$id'");
    header("Location: edit.php");   

?>