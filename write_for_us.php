<?php
// Connect to the database
// $conn = mysqli_connect("localhost", "username", "password", "sharktankblog");
$conn = mysqli_connect('localhost', 'root', '','sharktankblog');

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $title = $_POST["title"];
  $content = $_POST["content"];

  // Insert the article data into the database
  $query = "INSERT INTO `articles` (`name`, `email`, `title`, `content`) VALUES ('$name', '$email', '$title', '$content')";
    mysqli_query($conn, $query);

    // Display a confirmation message to the user
    echo "Thank you for submitting your article!";
}

// Close the database connection
mysqli_close($conn);
?>