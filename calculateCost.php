<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = $_POST['project_name'];
    $developer_level = $_POST['developer_level'];
    $project_complexity = $_POST['project_complexity'];
    $hours = $_POST['hours'];

    // Validate that hours is a non-negative number
    if ($hours < 0) {
        $_SESSION['error'] = 'Estimated development hours must be zero or more.';
        header('Location: index.html');
        exit;
    }

    // Define the hourly rates for different developer levels
    $hourly_rates = [
        'junior' => 40,
        'mid' => 80,
        'senior' => 120
    ];

    // Define complexity multipliers
    $complexity_multipliers = [
        'simple' => 1.0,
        'moderate' => 1.5,
        'complex' => 2.0
    ];

    // Calculate base cost
    $base_cost = $hours * $hourly_rates[$developer_level];

    // Apply complexity multiplier
    $total_cost = $base_cost * $complexity_multipliers[$project_complexity];

    // Store results in session
    $_SESSION['project_name'] = $project_name;
    $_SESSION['developer_level'] = $developer_level;
    $_SESSION['project_complexity'] = $project_complexity;
    $_SESSION['hours'] = $hours;
    $_SESSION['total_cost'] = $total_cost;

    // Redirect to the costs.php page
    header('Location: costResult.php');
    exit;
} else {
    $_SESSION['error'] = 'Invalid form submission method.';
    header('Location: index.html');
    exit;
}
?>