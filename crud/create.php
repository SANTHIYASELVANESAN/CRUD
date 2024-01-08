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
       <div class="container mt-5">
          <header class="d-flex justify-content-between my-4">
           <h1>Student Details</h1>
        <div>
           <a href=""class="btn btn-primary">Back</a>
        </div>
          </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="Sname" placeholder="student Name: ">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="Email" placeholder="Email id:">
            </div>
        <div class="form-element my-4">
               <select name="type"class="form-control"  >
                  <option value="select year">select year:</option>
                  <option value="I year">I year</option>
                  <option value="II year">II year</option>
                  <option value="III year">III year</option>
                  <option value="IV year">IV year</option>
              </select>
       </div>
       <div class="form-element my-4">
             <input type="text" class="form-control" name="description" placeholder="student course:">
       </div>
       <div class="form-element my-4">
             <input type="submit" class="btn btn-success" name="create" value="Add new student ">
        </div>
        </form>
        </div>
   </body>
</html>