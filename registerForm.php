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

    <!-- Script to use required property -->
    <script>
        function validateForm() {
            var checkbox = document.getElementById("GFG");
 
            if (!checkbox.checked) {
                // If checkbox is not checked, prevent form submission
                document.getElementById("sudo").innerHTML = 
                      "Checkbox is required!";
                return false;
            }
        }
    </script>
</head>

<body>

<div class="container flex-grow-1 my-5">
        <form action="register.php" method="post">
            <div class="form-group w-25 mx-auto">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group w-25 mx-auto">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="email">
            </div>
            <div class="form-group w-25 mx-auto">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group w-25 mx-auto">
                <label for="password2">Repeat Password</label>
                <input type="password" class="form-control" name="password2" placeholder="Password">
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="flexCheckDefault" required>
                <label class="form-check-label" for="flexCheckDefault">I have read the terms</label>
            </div>
            <br></br>
            <div class="w-25 mx-auto">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <small id="emailHelp" class="form-text text-muted">
            <a class="nav-link" href="login.php">I already have an account</a>
        </small>
        <?php
        session_start();
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger w-25 mx-auto mt-3">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']); // Clear the error after displaying it
        }
        ?>
        
    </div>
</body></html>