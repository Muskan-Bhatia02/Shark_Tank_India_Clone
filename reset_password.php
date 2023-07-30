<?php
// Retrieve the email and token from the URL
$email = $_GET["email"];
$token = $_GET["token"];

// If the form was submitted, update the user's password in the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $password = $_POST["password"];

    // Update the user's password in the database
    $query = "UPDATE users SET password='$password' WHERE email='$email'";
    mysqli_query($conn, $query);

    // Display a confirmation message to the user
    echo "Your password has been reset.";
}
?>
<form method="post">
    <label>New Password:</label>
    <input type="password" name="password"><br>

    <input type="submit" value="Reset Password">
</form>
