<?php
include('connection.php'); // Include your database connection script


// Assuming you have a database connection
// $conn = mysqli_connect("your_host", "your_username", "your_password", "your_database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];

    // Perform a query to check if there is a match in your table
    $query = "SELECT * FROM tests WHERE testdata LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="result-item" data-id="' . $row["id"] . '">';
        echo "<p>" . $row["testdata"] . "</p>";
        echo "</div>";
        // Add more fields as needed
    }
}
?>
