<!DOCTYPE html>
<html>
    <body>
<?php

include 'db_connection.php';


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


session_start();


$searchTerm = $_GET['search'];


$sanitizedQuery = mysqli_real_escape_string($conn, $searchTerm);


$sql = "SELECT * FROM books WHERE title LIKE '%$sanitizedQuery%' ";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  echo "<h2>Search Results</h2>";
  while ($row = mysqli_fetch_assoc($result)) {
    $bookId = $row['id'];
    $bookTitle = $row['title'];
    $bookLink = $row['link'];
    header("location: $bookLink");

  }
} else {
  echo "<h2>No books found matching your search.</h2>";
}

mysqli_close($conn);

?>
