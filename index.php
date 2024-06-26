<!DOCTYPE html>
<html lang="pl">

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
    
    <script>
        function moveDown() {
            var windowHeight = window.innerHeight * 0.86;
            window.scrollBy({ top: windowHeight, behavior: 'smooth' });
        }
    </script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
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

    <div class="content">
        <?php if (isset($_SESSION['loggedin'])): ?>
            <p>Welcome back, <?=htmlspecialchars($_SESSION['name'], ENT_QUOTES)?>!</p>
        <?php else: ?>
            <p>Welcome to my portfolio! Please <a  class="nav-link d-inline p-0" href="login.php">login</a> to access more features.</p>
        <?php endif; ?>
    </div>

    <header>
        <div class="header-content container-fluid">
            <h1 id="imie"> Wiktor Łabno - portfolio</h1>     
            <div class="rounded-circle image-div">
                <img src="assets/face1to1.jpg" class="img-fluid" alt="Face">
            </div>
        </div>
    </header>

    <div class="text-content b-0">
        <p id="des">I’m interested in Computer Science and I’m willing to take new advantage </p>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <button id="arrow_down" onclick="moveDown()" title="Press to move down" class="border-0 h-50">
                    <div class="container d-flex justify-content-center rounded-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-circle svg-container" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <main class="container-fluid">
        <div class="recent-work">
            <h2>My Recent Work</h2>
            <div class="image-container row">
                <div class="image-item col-md-4">
                    <img src="assets/systemRekomendacji.png" class="img-fluid" alt="Image ">
                    <p><a href="https://github.com/wiktor1468">System Rekomendacji</a></p>
                </div>
                <div class="image-item col-md-4">
                    <img src="assets/tit.png" id="titanic" class="img-fluid" alt="Image ">
                    <p><a href="https://github.com/wiktor1468/TitanicNeuralNetwork">Titanic</a></p>
                </div>
                <div class="image-item col-md-4">
                    <img src="assets/systemRekomendacji.png" class="img-fluid" alt="Image ">
                    <p><a href="https://github.com/wiktor1468">System Rekomendacji</a></p>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.php" class="nav-link px-2 text-muted">Home</a></li>
                
                <li class="nav-item"><a href="contact.php" class="nav-link px-2 text-muted">Contact</a></li>
                <li class="nav-item"><a href="costs.php" class="nav-link px-2 text-muted">Calculator</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link px-2 text-muted">Log in</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2024 Wiktor Łabno</p>
        </footer>
    </div>
</body>

</html>
