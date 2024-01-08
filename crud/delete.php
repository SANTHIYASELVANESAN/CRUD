<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM student WHERE id = $id";
    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["delete"] = "Data deleted successfully";
        header("Location:index.php");
    }
}
?>