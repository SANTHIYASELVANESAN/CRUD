<?php
include("connect.php");
if (isset($_POST["create"])) {
    $Sname = mysqli_real_escape_string($conn,$_POST["Sname"]);
    $Email = mysqli_real_escape_string($conn,$_POST["Email"]);
    $type = mysqli_real_escape_string($conn,$_POST["type"]);
    $description = mysqli_real_escape_string($conn,$_POST["description"]);
    $sql = "INSERT INTO student (Name, Email, Year, course) VALUES ('$Sname',  '$Email', '$type',  '$description')"; 
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["create"] = "Data added successfully";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}

if (isset($_POST["edit"])) {
    $Sname = mysqli_real_escape_string($conn,$_POST["Sname"]);
    $Email = mysqli_real_escape_string($conn,$_POST["Email"]);
    $type = mysqli_real_escape_string($conn,$_POST["type"]);
    $description = mysqli_real_escape_string($conn,$_POST["description"]);
    $id = mysqli_real_escape_string($conn,$_POST["id"]);
    $sql = "UPDATE student SET Name = '$Sname', Email = '$Email', Year = '$type', course = '$description' WHERE id=$id"; 
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION["update"] = "Data updated successfully";
        header("Location:index.php");
    }else{
        die("Something went wrong");
    }
}
?>