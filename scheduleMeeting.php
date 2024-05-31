<?php
// schedule-meeting.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = $_POST['date'];
    $time = $_POST['time'];

    $meeting = ['date' => $date, 'time' => $time];

    // Read the current meetings from the JSON file
    $file = 'data/meetings.json';
    $meetings = json_decode(file_get_contents($file), true);

    // Add the new meeting
    $meetings[] = $meeting;

    // Save the updated meetings back to the JSON file
    file_put_contents($file, json_encode($meetings));

    // Return the new meeting as a JSON response
    header('Content-Type: application/json');
    echo json_encode($meeting);
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Serve the meetings data as a JSON response
    header('Content-Type: application/json');
    echo file_get_contents('data/meetings.json');
}
?>