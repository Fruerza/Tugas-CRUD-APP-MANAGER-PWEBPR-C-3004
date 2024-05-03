<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" type="png" href="img1.png">
    <link rel="stylesheet" href="style.css">
    <title>Common Course</title>
</head>
<body>
    <div class="container">
        <div class="signin-signup">
            <form class="sign-in-form" action="routes.php" method="GET">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="route" value="index" style="display: none;">
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <button type="submit" class="btn">Login</button>
                <p class="social-text">Masuk Dengan Akun Sosial</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Tidak Punya Akun? <a href="#" id="sign-up-btn2">Daftar</a></p>
            </form>
            <form action="" class="sign-up-form">
                <h2 class="title">Daftar Akun</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn">
                <p class="social-text">Masuk Dengan Akun Sosial</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="social-icon">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                <p class="account-text">Sudah Punya Akun? <a href="#" id="sign-in-btn2">Sign in</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Anggota Dari Common?</h3>
                    <p>Nikmatilah Benefit - Benefit dengan masuk menggunakan akun kamu</p>
                    <button class="btn" id="sign-in-btn">Sign in</button>
                </div>
                <img src="online_learning.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Ingin menjadi anggota kami?</h3>
                    <p>Bergabunglah bersama kami dan nikmatilah benefit dengan bergabung bersama kami</p>
                    <button class="btn" id="sign-up-btn">Daftar</button>
                </div>
                <img src="teaching.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>