<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
     <title>Edit Details</title>
</head>
<body>
    <div class="container mt-5">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Details</h1>
            <div>
                <a href="index.php"class="btn btn-primary">Back</a>
            </div>
        </header>
        <?php
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            include("connect.php");
            $_sql = "SELECT * FROM student WHERE id=$id";
            $result = mysqli_query($conn,$_sql);
            $row = mysqli_fetch_array($result);

            ?>
            <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="Sname" value="<?php echo $row["Name"]; ?>" placeholder="student Name:">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" value="<?php echo $row["Email"]; ?>" name="Email" placeholder="Email id:">
            </div>
            <div class="form-element my-4">
               <select name="type"class="form-control"  >
                 <option value="">III year:</option>
                 <option value="select year"> select year:</option>
                 <option value="I year" <?php if ($row[ 'Year' ] =="Adventure"){echo "selected";} ?>>I year</option>
                 <option value="II year" <?php if ($row[ 'Year' ] =="Adventure"){echo "selected";} ?>>II year</option>
                 <option value="IV year" <?php if ($row[ 'Year' ] =="Adventure"){echo "selected";} ?>>IV year</option>
               </select>
            </div>
            <div class="form-element my-4">
                 <input type="text" class="form-control" value="<?php echo $row["course"]; ?>"  name="description" placeholder="student course:">
            </div>
            <input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
            <div class="form-element my-4">
                 <input type="submit" class="btn btn-success" name="edit" value="edit student ">
            </div>
        </form>

        <?php
        }
        ?>
        
</div>
</body>
</html>