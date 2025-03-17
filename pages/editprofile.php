<?php
 session_start();
 include 'config.php';

 $username=$_SESSION['username'];
 
 $x = mysqli_connect($host, $user, $pass, $db);

     if(isset($_POST["submit"]))
     {    

$fullname=$_POST['fullname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$pnumber=$_POST['pnumber'];
$email=$_POST['email'];




    $update = "update tb_user set fullname='$fullname',address='$address',gender='$gender',phonenumber='$pnumber',email='$email' where username='$username'";

  mysqli_query($conn,$update);
       echo '<script>alert("Profile Updated Successfully")</script>';   
    echo '<script>location.replace("http://localhost/home/pages/profile1.php")</script>'; 
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <title>Profile</title>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="p-3" style="background-color:#758b8d; border-radius: 10px;"> <div class="form">
            <div class="h2 center mb-4">
                <h1>Edit Profile</h1>
            </div>
                  <?php
                  include 'config.php';
;                      $username=$_SESSION['username'];

                         $y = "Select * from tb_user where username='$username'";
                         $z = mysqli_query($conn, $y);
                            ?>
                         <form id="form" method="POST">
                         <div class="user_detail"> 
                            <?php
                               ($row = mysqli_fetch_array($z)); {
                                  ?>

                        <div class="user">
                            <input class="form-control mb-3" type="text" name="fullname" id = "fullname" placeholder=""
                                aria-label="Disabled input example" required value="<?php echo $row['fullname']; ?>">
                            <!-- <input class="form-control mb-3" type="text" name="username" id = "username" placeholder="Username"
                                aria-label="Disabled input example"value=" > -->
                            <input class="form-control mb-3" type="text" id="address" name="address" placeholder="Address"
                                aria-label="Disabled input example" required value="<?php echo $row['address'];?>" >
                            <div class="mb-3">
                            <div class="form-check me-2 " style=" display:inline-block !important;" >
                                <input class="form-check-input" type="radio" name="gender" id="male" required value="male">
                                <label class="form-check-label" for="male"> Male</label>
                            </div>
                            <div class="form-check" style=" display:inline-block !important;">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                            </div>
                            <input class="form-control mb-3" type="tel" name="pnumber" id="pnumber" required pattern="[6789][0-9]{9}" minlength="10" maxlength="10" placeholder="Mobile No."
                                aria-label="Disabled input example"value="<?php echo $row['phonenumber'];?>" >
                            <input class="form-control mb-3" type="email" name="email" id = "email" required placeholder="Email"
                                aria-label="Disabled input example"value="<?php echo $row['email'];?>">
                            

                                <?php
                              }
                              ?>


                        <div class="center">
                            <input type="submit" id="submit" name="submit" value="submit" class="btn btn-primary">
                        </div>
                            </div>

                         </div>
                        </form>
           </div>
                    
</div>


</body>
</html>
