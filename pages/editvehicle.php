<?php
session_start();

 include 'config.php';


$username = $_SESSION['username'];

if (isset($_POST['submit'])) {
    $id = $_POST['userid'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    

    $update = "update sell_vehicle set Year='$year', price='$price' where id='$id'";

   if(mysqli_query($conn, $update))
   { 
    echo '<script>alert("Profile Updated Successfully")</script>';
      echo '<script>location.replace("http://localhost/home/pages/profile1.php")</script>';
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Vehicle</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">

        </script>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="p-3" style="background-color:#758b8d; border-radius: 10px;">
            <div class="form">
                <div class="h2 center mb-4">
                    <h1>Edit Profile</h1>
                </div>
                <?php
                  include 'config.php';
;                      $username=$_SESSION['username'];

                         $y = "Select id from sell_vehicle where user='$username'";
                         $z = mysqli_query($conn, $y);
                            ?>

                <form id="form" method="POST" >
                     <div class="user">
                     <?php
                               ($row = mysqli_fetch_array($z)); {
                                  ?>
                     <input type='text' name='userid' value="<?php echo $row['id']; ?>" disabled>
                     <select class="form-select mb-3" aria-label="Default select example" name="year" id="year"
                            required>
                            <option value="" disabled selected="selected">Select vehicle Year</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                          </select>

                          <input type="range" class="form-range mb-3" id="slider" min="0" max="3000000" step="1">

                         <input type="number" class="form-control mb-3" id="slider-value" name="price" min="0"
                            max="3000000" placeholder="Select vehicle Price" step="1">
                         </form>
                         <?php
                               }
                         ?>
                         <script>
                         const slider = document.getElementById("slider");
                          const sliderValue = document.getElementById("slider-value");

                                    slider.addEventListener("input", (event) => {
                                        sliderValue.value = event.target.value;
                                    });

                                    sliderValue.addEventListener("input", (event) => {
                                        slider.value = event.target.value;
                                    });

                                    var inputBox = document.getElementById("slider-value");

                                    var invalidChars = [
                                        "-",
                                        "+",
                                        "e",
                                    ];

                                    inputBox.addEventListener("keydown", function (e) {
                                        if (invalidChars.includes(e.key)) {
                                            e.preventDefault();
                                        }
                                    });
                                   </script>
                                  <div class="center">
                                 <input type="submit" class="btn btn-primary" id="submit" name="submit" value="submit"></div>
                                </div>
                            </div>
                         <form>
     

        
                
</div>
</div>
</body>

</html>