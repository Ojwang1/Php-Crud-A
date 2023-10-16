<?php
$id =$_GET['id'];

include "db_conn.php";

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];


    $sql = "UPDATE `php crud a` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header(" Location: index.php?msg=Data updated successfully");
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>
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

< title>PHP Crud A</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">

        Php Crud Application

    </nav>
    <div class="container">
        <div class="text-center mb-4>
        <h3>Edit User Information</h3>
        <p class=" text-muted">Click update after changing any information</p>

        </div>

<?php 

// $id =$_GET['id'];
$sql = "SELECT * FROM  Php Crud A WHERE id =$id LIM 1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
?>


 <div class="container d-flex justify-content-center">
 <form action="" method="post" style="width:50vw; min-width:300px;">
 <div class="row mb-3">
 <div class="col">
  <label class="form-label">First Name:</label>
 <input type="text" class="form-control" name="first_name" value="<  echo $row['first_name'] ?>">
    </div>


     <div class="col">
      <label class="form-label">Last Name:</label>
     <input type="text" class="form-control" name="last_name" value="<  echo $row['last_name'] ?>">
     </div>
    </div>

     <div class="mb-3>
        <label class=" form-label">Email</label>
     <input type="email" class="form-control" name="email" value="<  echo $row['email'] ?>">
     </div>
    <div class="form-group mb-3">
      <label>Gender</label> &nbsp;
    <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php echo ($row['gender']=='male')?
                    "check": ""; ?>>
    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
    <input type="radio" class="form-check-input" name="gender" id="female" value="female"<?php echo ($row['gender']=='female')?
                    "check": ""; ?> >
    <label for="female" class="form-input-label">Female</label>
                    &nbsp;
    <input type="radio" class="form-check-input" name="gender" id="other" value="other" <?php echo ($row['gender']=='other')?
                    "check": ""; ?>>
     <label for="other" class="form-input-label">Other</label>
    </div>
    <div>
     <button type="submit" class="btn btn-success" name="submit">Update</button>
    <a href="index.php" class="btn btn-danger>Cancel</a>
        </div>
    </form>
    </div>
    </div>
    <!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/net/npm/bootrap@5.1.3/dist/js/bootrap.
bundle.min.js" integrity="sha384-ka75k0GIn4gmtz2M1QnikT1wXgYsOg+Omhup
+I1RH9sENBO0LRn5q+8nbTov4+1p" crossorigin ="anonymous"></script>

    
</body>
</html>