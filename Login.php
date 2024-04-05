<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>English Tutoring Pages</title>
    <a href="dashboard.html"></a>
    <link rel="icon" type="png" href="img1.png">
</head>
<body>
    <div class ="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Buat Akun</h1>
                <div class="Sosial-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a> 
                </div>
                <span>Gunakan Email mu Untuk Pendaftaran</span>
                <input type="text" placeholder="Nama">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <button>Buat Akun</button>
            </form>
        </div>
        
        <div class="form-container sign-in">
            <form>
                <h1>Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>Gunakan Email Dan Password mu</span>
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button>Login</button>
            </form>
            <a href="dashboard.html"></a>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class ="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali !!</h1>
                    <p>Heyy, Pelatihan Bahasa Inggrismu Belumlah Selesai!!</p>
                    <button class="hidden" id="login" href="dashboard.php">Login</button>
                </div>
                <div class = "toggle-panel toggle-right">
                    <h1>Heyy, Buddie!!</h1>
                    <p>Bergabunglah Bersama Kami!!</p>
                    <button class="hidden" id="register">Daftar</button>
                </div>
            </div>
        </div>    
    </div>
    
</body>
</html>