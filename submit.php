<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Connection failed: ' . $conn->connect_error]));
}

// Get the JSON data from the request
$data = json_decode(file_get_contents('php://input'), true);

// Validate and sanitize the input data
if (isset($data['username']) && isset($data['meetingDate'])) {
    $username = $conn->real_escape_string($data['username']);
    $meetingDate = $conn->real_escape_string($data['meetingDate']);

    // SQL query to update the meeting date for the existing user
    $sql = "UPDATE uzytkownicy SET meeting_date = '$meetingDate' WHERE username = '$username'";

    // Execute the query and check for errors
    if ($conn->query($sql) === TRUE) {
        if ($conn->affected_rows > 0) {
            echo json_encode(['success' => true, 'message' => 'Meeting date updated successfully']);
        } else {
            echo json_encode(['success' => false, 'message' => 'User not found']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid input']);
}

// Close the database connection
$conn->close();
?>