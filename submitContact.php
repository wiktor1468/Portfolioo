<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Handle file upload
    $attachment = null;
    if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
        $attachment = base64_encode(file_get_contents($_FILES['attachment']['tmp_name']));
    }

    if(strlen($phone)!=9){
        $_SESSION['feedback'] = 'Invalid number!';
        header('Location: contact.php');
        exit; 
    }

    // Create an array to hold the data
    $formData = array(
        'name' => $name,
        'phone' => $phone,
        'email' => $email,
        'message' => $message,
        'attachment' => $attachment,
        'timestamp' => date('Y-m-d H:i:s')
    );

    // Convert the data to JSON
    $jsonData = json_encode($formData, JSON_PRETTY_PRINT);

    // Specify the file where data will be stored
    $file = 'contact_data.json';

    // Append the data to the file
    if (file_put_contents($file, $jsonData . PHP_EOL, FILE_APPEND | LOCK_EX)) {
        $_SESSION['feedback'] = 'Thanks for contacting us!';
        header('Location: contact.php');
        exit;
    } else {
        $_SESSION['feedback'] = 'There was an error saving your data.';
        header('Location: contact.php');
        exit;
    }
} else {
    $_SESSION['feedback'] = 'Invalid request method.';
    header('Location: contact.php');
    exit;
}
?>
