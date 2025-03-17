<?php
session_start();
require 'config.php';
if(!empty($_SESSION["id"])){
  //  header("Location: pages/form.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
    
      $_SESSION["login"] = true;
     $id=$_SESSION['id'];
      $username=$_SESSION['username'];
      $_SESSION["id"] = $row["id"];
      $_SESSION["username"] = $row["username"];
      echo '<script>
     console.log(`'.$row['username'] .'`);
      const temp= "' .$row['username'] . '";

      
 localStorage.setItem("user1", temp )
 location.replace("http://localhost/home/pages/index.php")
 </script>';
       

    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>
<!DOCTYPE html>

<?php
 
 $host="localhost";
 $user="root";
 $pass="";
 $db="vehicle";
 
 $x=mysqli_connect($host,$user,$pass,$db);

    $y="Select username from tb_user";
    $z=mysqli_query($x,$y);
?>


<html lang="en" dir="ltr">
  <head>
    
    <?php
    while($row=mysqli_fetch_array($z))
    {
?>   
<script>

</script>
<?php  
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login1.css?v=<?php echo time(); ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <title>Login</title>
</head>

<body>
    <div class="bg">
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="p-3" style="background-color:#758b8d; border-radius: 10px;">
                <div class="form">
                    <div class="h2 center mb-5 mt-5">
                        Login Form</div>
                    <form id="form" method="POST">
                        <div class="user_detail">
                            <div class="user">



                                <input class="form-control mb-3" type="text" name="usernameemail" id = "usernameemail" placeholder="Email or Username"
                                    aria-label="Disabled input example" required>
                                <input class="form-control mb-3" type="password" placeholder="Password" name="password" id = "password" 
                                aria-label="Disabled input example" required>
                                <div class="forget mb-5 ">
                                    <a href="reset_pass.php" style="color:#86b7fe;">Forgot Password?</a>
                                </div>

                            </div>

                        </div>
                        <div class="center">
                            <input type="submit" id="submit" name="submit" class="btn mb-3 btn-primary">
                            <div class="sinup mb-5 ">
                            Not a member?<a href="registration.php" style="color:#86b7fe;">Signup now</a></div>

                        </div>

                </div>


            </div>
            </form>
        </div>
    </div>

</body>

</html>