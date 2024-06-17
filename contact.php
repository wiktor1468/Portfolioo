<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portfolio</title>
    <!-- CSS and Bootstrap links -->
    <link href='style.css' rel='stylesheet'>
    <link href='header.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet'>
    
   
</head>
<body>
<?php
//It must be on every page you intend to use.
// The variables contained in the session are set with $_SESSION, a global variable
        session_start();
?>
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
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="costs.html">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="meetMe.php">Meets</a>
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
                    <?php if (isset($_SESSION['loggedin'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">
                            <img src="assets/logout_image.png" alt="" class="img-fluid github-icon">
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    
    <section id="contactForm" class="container mt-5">
        <h2>Contact Me</h2>
        <form action="submitContact.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="attachment">Attachment</label>
                <input type="file" id="attachment" name="attachment" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control" rows="4" placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        
        if (isset($_SESSION['feedback'])) {
            echo '<div class="alert alert-info mt-3 text-center d-flex" id="feedbackContact">' . $_SESSION['feedback'] . '</div>';
            unset($_SESSION['feedback']); // Clear the feedback after displaying it
        }
        ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <footer class="py-3 my-4">
        <div class="container">
        
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>                
                <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact</a></li>
                <li class="nav-item"><a href="costs.php" class="nav-link px-2 text-muted">Calculator</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link px-2 text-muted">Log in</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2024 Wiktor Łabno</p>
        
        </div>
    </footer>
</body>
</html>