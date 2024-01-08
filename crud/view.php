<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Student Details</title>
</head>
<body>
    <style>
        .StudentDetails{
            background: #f5f5f5;
            padding: 50px;
        }
    </style>
    <div class="container">
       <header class="d-flex justify-content-between my-4">
            <h1>Students Details</h1>
            <div>
               <a href="index.php" class="btn btn-primary">Back</a>
            </div>
       </header>
       <div class="StudentDetails my-4">
                   <?php
                       if(isset ($_GET ["id"])){
                           $id = $_GET["id"];
                           include("connect.php");
                           $_Sql = "SELECT * FROM student WHERE id=$id";
                           $result = mysqli_query($conn, $_Sql);
                           $row = mysqli_fetch_array($result);
                       ?>
                       <h2>Name</h2>
                       <p><?php echo $row["Name"]; ?></p>
                       <h2>course</h2>
                       <p><?php echo $row["course"]; ?></p>
                       <h2>Year</h2>
                       <p><?php echo $row["Year"]; ?></p>
                       <h2>Email</h2>
                       <p><?php echo $row["Email"]; ?></p>
                       <?php
                       }
                    ?>
        </div>
    </div>
</body>
</html>