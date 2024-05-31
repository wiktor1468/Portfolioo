<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio</title>
    <!-- Odwołanie do CSS i bootsrapa-->
    <link href='style.css' rel='stylesheet'>
    <link href='header.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
</head>

<body>

<nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand pr-5" href="index.php">
                <img src="assets/logo.png" alt="Logo" class="img-fluid rounded-circle logo-icon">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="portfolio.html">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/wiktor1468">
                            <img src="assets/github-mark-white.png" alt="GitHub" class="img-fluid github-icon">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:wiktorhar@gmail.com">
                            <img src="assets/gmail-icon-png.png" alt="Gmail" class="img-fluid gmail-icon">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.linkedin.com/in/wiktor-labno-0018082a4/?trk=opento_sprofile_goalscard">
                            <img src="assets/circle-linkedin.webp" alt="LinkedIn" class="img-fluid github-icon">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <h1>Schedule a Meeting</h1>
    <form id="meeting-form">
        <label for="meeting-date">Select Date:</label>
        <input type="date" id="meeting-date" name="meeting-date" required>

        <label for="meeting-time">Select Time:</label>
        <input type="time" id="meeting-time" name="meeting-time" required>

        <button type="submit">Schedule Meeting</button>
    </form>

    <h2>Meeting Calendar</h2>
    <div id="calendar"></div>
    
    <script src="js/calendar.js"></script>
    
</body>