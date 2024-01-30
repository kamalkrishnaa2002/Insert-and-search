<?php

// Include your database connection file (e.g., connection.php)
include('connection.php');

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the input text from the AJAX request
    $inputText = $_POST['inputText'];

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO tests (testdata) VALUES (?)");
    $stmt->bind_param("s", $inputText);

    if ($stmt->execute()) {
        echo "Data inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
