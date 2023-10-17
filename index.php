<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php'; // Mengimpor file koneksi

// Lanjutkan dengan logika halaman login
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">iyasogame.id</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login Member</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.html">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password">
                            </div>
                            <button type="submit" class="btn btn-primary btn-login">Login</button>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-6 mt-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="message">
                                                    <p>If you don't have an account,</p>
                                                    <a href="register.html" class="btn btn-register">Sign up now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi saat halaman dimuat
            const card = document.querySelector('.card');
            card.style.transform = 'scale(1)';
            card.style.opacity = '1';
            card.style.transition = 'transform 0.5s, opacity 0.5s';
        
            // Animasi saat tombol Login diklik
            const loginButton = document.querySelector('button[type="submit"]');
            loginButton.addEventListener('click', function() {
                card.style.transform = 'scale(0.9)';
                card.style.opacity = '0.7';
            });
        });
        </script>
        
</body>
</html>
