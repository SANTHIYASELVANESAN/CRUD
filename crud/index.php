<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Student Details</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Students List</h1>
            <div>
               <a href="create.php" class="btn btn-primary">Add new student</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["create"];
                unset($_SESSION["create"]);
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        
        if (isset($_SESSION["edit"])) {
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["edit"];
                unset($_SESSION["edit"]);
                ?>
            </div>
            <?php
        }
        ?>
        <?php
        
        if (isset($_SESSION["delete"])) {
            ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION["delete"];
                unset($_SESSION["delete"]);
                ?>
            </div>
            <?php
        }

        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                   <th>id</th>
                   <th>Name</th>
                   <th>Email</th>
                   <th>Year</th>
                   <th>Action</th>
                </tr>
            </head>
            <body>
                 <?php
                 include("connect.php");
                 $sql = "SELECT * FROM student";
                 $result = mysqli_query($conn,$sql);
                 while ($row = mysqli_fetch_array($result)) {
                 ?>
                    <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["Name"]; ?></td>
                    <td><?php echo $row[ "Email"]; ?></td>
                    <td><?php echo $row ["Year"]; ?></td>
                  
                    <td>
                    <a href="view.php?id=<?php echo $row["id"]; ?> " class="btn btn-info">Read More</a>
                    <a href="edit.php?id=<?php echo $row["id"]; ?> " class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $row["id"]; ?> " class="btn btn-danger"  onclick="return confirm('Are you sure to delete?')">Delete</a>
                    </td>
                    </tr>
                    <?php
                 }
                 ?>
            </body>
        </table>
    <div>
</html>