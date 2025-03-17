<?php
// session_start();
include 'config.php';

// $id = $_POST['userid'];
$sid = $_POST['userid'];
// echo "$sid";

if (isset($_POST['del'])) {
  // $id = $_POST['userid'];
 
  $y = "delete from sell_vehicle where id='$sid'";

  if (mysqli_query($conn, $y)) {
    echo ' <script> 
      alert("Deleted successfully");
      </scrip> ';
  }

}

if (isset($_POST['submit'])) {
  

  $year = $_POST['year'];
  $price = $_POST['price'];


   $update = "update sell_vehicle set Year='$year',price='$price' where id='$sid'";


  //  mysqli_query($conn, $update);
  
  if (mysqli_query($conn, $update)) {
      echo '<script>alert("Profile Updated Successfully")
      location.replace("http://localhost/home/pages/profile1.php")</script>';
    }else {
        echo "Error updating record: " . mysqli_error($conn);
      }
      
    }

?>

<html>

<body>
  <form method="POST">
    <input type="hidden" name='userid' value="<?php echo $_POST['userid'] ?>">
    <select class="form-select mb-3" aria-label="Default select example" name="year" id="year" required>
      <option value="" disabled selected="selected">Select vehicle Year</option>
      <option value="2022">2022</option>
      <option value="2021">2021</option>
      <option value="2020">2020</option>
      <option value="2019">2019</option>
    </select>

    <!-- <input type="range" class="form-range mb-3" id="slider" min="0" max="3000000" step="1"> -->

    <input type="number" class="form-control mb-3" id="slider-value" name="price" min="0" max="3000000"
      placeholder="Select vehicle Price" step="1">

    <div class="center">
      <input type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">
    </div>
    </div>
  </form>

</body>

</html>