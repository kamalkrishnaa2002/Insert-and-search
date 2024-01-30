<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Perform a query to retrieve additional details based on the clicked ID
    $query = "SELECT id, testdata,generated_datetime FROM tests WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Display additional details
        echo "<p>ID: " . $row["id"] . "</p>";
        echo "<p>Name/Email/Phone: " . $row["testdata"] . "</p>";
        echo "<p>Added Date-time: " . $row["generated_datetime"] . "</p>";
    } else {
        echo "Details not found";
    }
}
?>
