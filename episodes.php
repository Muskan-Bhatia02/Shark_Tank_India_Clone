<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "sharktankblog");

// Retrieve the episode data from the database
$query = "SELECT * FROM episodes";
$result = mysqli_query($conn, $query);

// Display the episode data in a table
echo "<table>";
echo "<tr><th>Episode</th><th>Season</th><th>Air Date</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>" . $row["episode_name"] . "</td><td>" . $row["season_number"] . "</td><td>" . $row["air_date"] . "</td></tr>";
}
echo "</table>";

// Close the database connection
mysqli_close($conn);
?>
