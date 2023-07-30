<?php
// database connection
// $host = 'localhost';
// $user = 'root';
// $password = ' ';
// $dbname = 'sharktank';
// $conn = mysqli_connect($host, $user, $password, $dbname);


$conn = mysqli_connect('localhost', 'root', '','sharktank');

// handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $image_name = $_FILES['prototype-image']['name'];
  $image_temp_name = $_FILES['prototype-image']['tmp_name'];

  // save image to uploads directory
  $uploads_dir = 'uploads/';
  $image_path = $uploads_dir . $image_name;
  move_uploaded_file($image_temp_name, $image_path);

  // insert data into ideas table
  $sql = "INSERT INTO `ideas` (`title`, `description`, `image_path`) VALUES ('$title', '$description', '$image_path')";
  mysqli_query($conn, $sql);
}

?>
<!-- 
// // function to fetch ideas from database
// function get_ideas() {
//   global $conn;
//   $sql = "SELECT * FROM ideas";
//   $result = mysqli_query($conn, $sql);
//   $ideas = array();
//   while ($row = mysqli_fetch_assoc($result)) {
//     $ideas[] = $row;
//   }
//   return $ideas;
// }

// get_ideas();



// $sql = "SELECT * FROM ideas";
// $result = mysqli_query($conn, $sql);
// while ($row = mysqli_fetch_assoc($result)) {
//   echo '<div>';
//   echo '<h2>' . $row['title'] . '</h2>';
//   echo '<p>' . $row['description'] . '</p>';
//   echo '<img src="' . $row['image_path'] . '" />';
//   echo '</div>';
// } -->



<?php
include 'files.php';?>




 <div class="container mt-5">
  <h1>Ideas Submitted</h1>
  <div class="row">


  
<?php
$sql = "SELECT * FROM ideas";
$result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result)) {
  ?>

  <div class="col-md-4">
  <div class="card mb-4 box-shadow">
  <img class="card-img-top" src="<?php echo $row['image_path'] ;?>">

  <div class="card-body">
  <h5 class="card-title"> <?php echo $row['title']; ?> </h5>
  <p class="card-text"><?php echo $row['description']; ?> </p>
  </div>
  </div>
  </div>


<?php
}
?>









<!-- 
echo '<div class="col-md-4">';
  echo '<div class="card mb-4 box-shadow">';
  echo '<img class="card-img-top" src=". $row["image_path"] . "/>';

  echo '<div class="card-body">';
  echo '<h5 class="card-title">' . $row['title'] . '</h5>';
  echo '<p class="card-text">' . $row['description'] . '</p>';
  echo '</div>';
  echo '</div>';
  echo '</div>';
}

echo '</div>'; -->








<!-- 

  // echo '<div>';
  // echo '<h2>' . $row['title'] . '</h2>';
  // echo '<p>' . $row['description'] . '</p>';
  // echo '<img src="' . $row['image_path'] . '" />';
  // echo '</div>';

 -->




