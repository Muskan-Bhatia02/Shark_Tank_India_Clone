<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "sharktankblog");

// Retrieve the product data from the database
$query = "SELECT * FROM products";
$result = mysqli_query($conn, $query);

// Display the product data in a table
echo "<table>";
echo "<tr><th>Product Name</th><th>Description</th><th>Shark Investor</th><th>Deal Status</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row["product_name"] . "</td><td>" . $row["description"] . "</td><td>" . $row["shark_investor"] . "</td><td>" . $row["deal_status"] . "</td></tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
