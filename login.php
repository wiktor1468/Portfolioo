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
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="costs.html">Calculator</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container flex-grow-1 my-5">
        <form action="authenticate.php" method="post">
            <div class="form-group w-25 mx-auto">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group w-25 mx-auto">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="w-25 mx-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <small id="emailHelp" class="form-text text-muted">
            <a class="nav-link" href="registerForm.php">Sign in if you don't have an account</a>
        </small>
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger w-25 mx-auto mt-3">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']); // Clear the error after displaying it
        }
        ?>
    </div>

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
