<?php
session_start();
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  <link rel="stylesheet" href="../css/profile1.css?v=<?php echo time(); ?>">
  <title>Profile</title>

  <script type="text/javascript">

    var data1 = localStorage.getItem("user1");


    function editpro() {
      window.location.href = "./editprofile.php";
    }
    function buy() {
      window.location.href = "./index.php";
    }
    function sell() {
      window.location.href = "./form.php";
    }

    function editveh() {
      window.location.href = "./editvehicle.php";
    }
    

  </script>
</head>
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "vehicle";

if (!$_GET['username']) {
  echo '<script> window.location.href = "profile1.php?username=" + data1;</script>';
}
$x = mysqli_connect($host, $user, $pass, $db);
$abc = $_GET['username'];

$row = mysqli_fetch_array(mysqli_query($x, "SELECT * FROM tb_user  where  username = '$abc' "));

// if (isset($_POST['del'])) {
//   $id = $_POST['userid'];
//   $y = "delete from sell_vehicle where id='$id'";

//   if (mysqli_query($x, $y)) {
//     echo ' <script> 
//     alert("Deleted successfully");
//     </script> ';
//   }

// }

?>

<body>
  <div class="bg">
    <div class="container-fluid">
      <div class="containere">
        <div class="search">
          <h1><img src="..\pages\upload\logo1.png" width="100px" height="49px" />Vehicles 24</h1>


          <div class="but">
            <button class="btn btn-outline-primary" onclick="buy()">BuyVehicle</button>
            <button class="btn btn-outline-primary" onclick="sell()">SellVehicle</button>
          </div>
          <div class="log">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">Hello
              <?php echo " ";
              echo $row['fullname']; ?>

            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item active" href="./profile1.php">Profile Setting</a></li>
              <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <div class="edit"><button class=" button btn btn-primary" onclick="editpro()">Edit Profile</button>
            <div>
              <p class="h3">Profile Setting</p>
              <div class="container">
                <div class="card mb-2">
                  <div class="card-body ">
                    <p>FullName: <span class="h5">
                        <?php echo ($row['fullname']); ?>
                      </span> </p>
                    <span> <i class="bi bi-telephone me-2"></i>
                      <?php echo ($row['phonenumber']); ?>
                    </span>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body">
                    <p>Gender: <span class="h5">
                        <?php echo ($row['gender']); ?>
                      </span> </p>
                    <p>Address: <span class="h5">
                        <?php echo ($row['address']); ?>
                      </span> </p>
                  </div>
                </div>
                <div class="card mb-2">
                  <div class="card-body">
                    <p>Email: <span class="h5">
                        <?php echo ($row['email']); ?>
                      </span> </p>
                  </div>
                </div>
                <?php
                $username = $_SESSION['username'];

                $host = "localhost";
                $user = "root";
                $pass = "";
                $db = "vehicle";

                $x = mysqli_connect($host, $user, $pass, $db);

                $y = "Select image,Brand,Model,id from sell_vehicle where user='$username' ";
                $z = mysqli_query($x, $y);
                ?>

                <?php
                while ($row = mysqli_fetch_array($z)) {
                  ?>

                  <div class="card mb-2">
                    <div class="card-body">
                      <span>  
                        <form method="POST" action="udprocess.php">
                          <input type='hidden' name='userid' value="<?php echo $row['id']; ?>">
                          <div class="ed"><button class=" button btn btn-primary" id="edi" name="edi" value="edi" onclick="editveh()">Edit</button>
                            <!-- <a href="editvehicle.php"  class="btn btn-primary" name="" value="edi">?>Edit</a> -->
              
                          </div>
                          <button class=" button btn btn-primary" id="del" name="del" value="del">Delete</button>
                        </form>
                      </span>
                      <p><span class="h5" id="rem"><img src="../pages/upload/<?php echo $row['image']; ?>" class="a"
                            alt="..."><br></span> </p>
                      <p><span class="h5" id="rem">
                          <?php echo $row['Brand'];
                          echo " ";
                          echo $row['Model']; ?>
                        </span> </p>
                    </div>
                  </div>
                  <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>

</html>

<!-- onclick="rem('hey')"  -->