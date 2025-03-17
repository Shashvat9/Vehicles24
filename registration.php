<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  // header("Location: login.php");
}
if(isset($_POST["submit"])){

  $id = $_POST["id"];
  $username = $_POST["username"];
  $fullname = $_POST["fullname"];
  $pnumber = $_POST["pnumber"];
  $gender= $_POST["gender"];
  $address= $_POST["address"];

  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('$id','$username','$fullname','$pnumber','$gender','$address','$email','$password', '$confirmpassword')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      header("Location: login1.php"); 
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./registration.css?v=<?php echo time(); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <title>Registration</title>
</head>

<body>
    <div class="bg">
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="p-3" style="background-color:#758b8d; border-radius: 10px;">
            <div class="form">
            <div class="h2 center mb-4" >
Registration Form</div>
                <form id="form" method="POST">
                    <div class="user_detail">
                        <div class="user">
                            <input class="form-control mb-3" type="text" name="fullname" id = "fullname" placeholder="Fullname"
                                aria-label="Disabled input example" required>
                            <input class="form-control mb-3" type="text" name="username" id = "username" placeholder="Username"
                                aria-label="Disabled input example" required>
                            <input class="form-control mb-3" type="text" id="address" name="address" placeholder="Address"
                                aria-label="Disabled input example" required>
                            <div class="mb-3">
                    <div class="form-check me-2 " style=" display:inline-block !important;" >
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male"> Male</label>
                            </div>
                            <div class="form-check" style=" display:inline-block !important;">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            </div>
                            <input class="form-control mb-3" type="tel" name="pnumber" id="pnumber" pattern="[6789][0-9]{9}" minlength="10" maxlength="10" placeholder="Mobile No."
                                aria-label="Disabled input example" required>
                            <input class="form-control mb-3" type="email" name="email" id = "email" placeholder="Email"
                                aria-label="Disabled input example" required>
                            <input class="form-control mb-3" type="password" name="password" id = "password" placeholder="Password"
                                aria-label="Disabled input example" required>
                            <input class="form-control mb-3" type="password" name="confirmpassword" id = "confirmpassword" placeholder="Confirm Password"
                                aria-label="Disabled input example" required>

                        </div>
                        <div class="center">
                            <input type="submit" id="submit" name="submit" class="btn btn-primary">
                        </div>


                    </div>
                </form>
            </div>
        </div>

</div>
   </body>

</html>