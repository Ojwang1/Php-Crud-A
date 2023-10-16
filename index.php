<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js."></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.4.0.js"></script> -->

      <!-- Bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootrap@5.1.3/dist/css/bootstrap.min.
    css" rel="stylesheet">
    integrity="sha384-18mE4khBq78iYhf1dvKuhfTAU8tT9wrHftjDbrCEXSU1oBoqy12QvZ6jIw3
    " crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloundflare.com/ajax/libs/font-awespme/
    6.1.1/css/all.min.css">
    integrity="sha512-KfkfwYDsLkIlwQp6LFn18zNdLGxu9YAA1QvwInks4PhcE1QSvqcyVLLD9aMhxd13
    uQjioXtEKNosWaZqXgelog=="crossorigin="anonymous" referrerpolicy="no-referrer"/


 <title>PHP Crud A</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">

        Php Crud Application

    </nav>

    <div class="container">
        <?php
        if (isset($_Get['msg'])) {
            $msg = $_GET['msg'];
            echo 'div class=alert alert-warning alert-dismissible fade show"role="alert">
        ' . $msg . '
        <button type="button" class="btn-close" date-bs-dismiss="alert"
        aria-label="Close"></button>
        </div>';
        }

        ?>


    <a href="add_new.php" class="btn btn-dark mb-3>Add New</a>

    <table class =" table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
     include "db_conn.php";

     $sql = "SELECT  * FROM  'Php Crud A";
     $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
     <th <?php echo $row['id'] ?></th>
     <th <?php echo $row['first_name'] ?></th>
     <th <?php echo $row['last_name'] ?></th>
     <th <?php echo $row['email'] ?></th>
     <th <?php echo $row['gender'] ?></th>

     <td>
  <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square  fs-5 ma-3></i></a>
 <a href=" delete.php?id=<?php echo $row['id'] ?>" class="link-dark"><i class="fa-solid fa-trash  fs-5 ma-3></i></a>
                    

                </td>
                </tr>
                <?php

                }

                ?>
       
        </tbody>

    </table>
</div>



    <!-- <div class=" container">
    <div class="text-center mb-4>
    <h3>Add New User</h3>
 <p class=" text-muted">Complete the form below to add a new user</p>

 </div>
   <div class="container d-flex justify-content-center">
   <form action="" method="post" style="width:50vw; min-width:300px;">
             <div class="row mb-3">
        <div class="col">
         <label class="form-label">First Name:</label>
        <input type="text" class="form-control" name="first_name" placeholder="Enter your first name">
        </div>


        <div class="col">
        <label class="form-label">Last Name:</label>
        <input type="text" class="form-control" name="last_name" placeholder="Enter your last name">
        </div>
        </div>

         <div class="mb-3>
        <label class=" form-label">Email</label>
      <input type="email" class="form-control" name="last_name" placeholder="email">
     </div>
     <div class="form-group mb-3">
       <label>Gender</label> &nbsp;
     <input type="radio" class="form-check-input" name="gender" id="male" value="male">
     <label for="male" class="form-input-label">Male</label>
        &nbsp;
    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
    <label for="female" class="form-input-label">Female</label>
     &nbsp;
     <input type="radio" class="form-check-input" name="gender" id="other" value="other">
     <label for="other" class="form-input-label">Other</label>
     </div>
         <div>
      <button type="submit" class="btn btn-success" name="submit">Save</button>
      <a href="index.php" class="btn btn-danger>Cancel</a>
        </div>
    </form>
    </div>
    </div> -->

    <!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/net/npm/bootrap@5.1.3/dist/js/bootrap.
bundle.min.js" integrity="sha384-ka75k0GIn4gmtz2M1QnikT1wXgYsOg+Omhup
+I1RH9sENBO0LRn5q+8nbTov4+1p" crossorigin ="anonymous"></script>

    
</body>
</html>