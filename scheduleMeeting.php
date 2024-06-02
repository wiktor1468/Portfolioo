<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);

    // Create an array to hold the data
    $meetingData = array(
        'name' => $name,
        'email' => $email,
        'date' => $date,
        'time' => $time,
        'timestamp' => date('Y-m-d H:i:s')
    );

    // Convert the data to JSON
    $jsonData = json_encode($meetingData, JSON_PRETTY_PRINT);

    // Specify the file where data will be stored
    $file = 'meeting_data.json';

    // Append the data to the file
    if (file_put_contents($file, $jsonData . PHP_EOL, FILE_APPEND | LOCK_EX)) {
        $_SESSION['feedback'] = 'Your meeting has been scheduled!';
        header('Location: meetMe.php');
        exit;
    } else {
        $_SESSION['feedback'] = 'There was an error scheduling your meeting.';
        header('Location: meetMe.php');
        exit;
    }
} else {
    $_SESSION['feedback'] = 'Invalid request method.';
    header('Location: meetMe.php');
    exit;
}
?>