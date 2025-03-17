<html>
  <head>
    <style>
      img{
        width:100px
      }
    </style>
    
  </head>

  <body>
    <form action="" method="POST" enctype="multipart/form-data"></form>
    <table>
      <tr>
      <th>Image</th>
      <th>Brand</th>
      <th>Model</th>
</tr> 
<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'vehicle');

$y="Select image,Brand,Model from sell_vehicle";
$z=mysqli_query($conn,$y);

while($row=mysqli_fetch_array($z))
{
?>
<tr>
  <td>
  <img src="./upload/<?php echo $row['image']; ?>" >
 
</td>
<td><?php echo $row['Brand'];?></td>
<td><?php echo $row['Model'];?></td> 
</tr>
<?php
 echo $row['image'];
}
?>
    </table>
  </body>
</html>


     <!-- echo "<br> Brand:" . $row["Brand"]. "<br>"."<img src=".$row['image'].' width=100px height="100px" alt="image could not load">'."<br>"; -->
<!DOCTYPE html>
<html>
<body>
<form>
<label for="slider">Select a value:</label>
<input type="range" id="slider" min="0" max="10000000" step="1">
<input type="number" id="slider-value" min="0" max="1000000" step="1">


<script>
const slider = document.getElementById("slider");
const sliderValue = document.getElementById("slider-value");

slider.addEventListener("input", (event) => {
  sliderValue.value = event.target.value;
});

sliderValue.addEventListener("input", (event) => {
  slider.value = event.target.value;
});
</script> 

</body>
</html>

