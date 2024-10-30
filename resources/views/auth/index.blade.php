<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('auth/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
.container {
    position: relative;
    max-width: 1094px;
    width: 106%;
    background: #fff;
    padding: 84px 30px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    perspective: 2700px;
}

body {
        background: linear-gradient(135deg, #1c1c1c, #333, #4d4d4d);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        overflow: hidden;
        font-family: Arial, sans-serif;
    }
</style>

<body>
<div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
        <div class="front">
            <img src="{{ asset('main/extra-images/banner-thumb1.png') }}" alt="">
            <div class="text">
                <span class="text-1">Every new style is a <br> new experience</span>
                <span class="text-2">Get your fresh look</span>
            </div>
        </div>
        <div class="back">
            <img class="backImg" src="{{ asset('auth/images/backImg.jpg') }}" alt="">
            <div class="text">
                <span class="text-1">Transform your look <br> with a single step</span>
                <span class="text-2">Let’s get started</span>
            </div>
        </div>
    </div>

    <div class="forms">
        <div class="form-content">
            <!-- Login Form -->
            <div class="login-form">
                <div class="title">Login</div>
                <div class="text" style="color:#e5a427"><a href="{{url('/indexa')}}">Back to Home</a></div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
               
                        <div class="button input-box">
                            <input style="background-color:#e5a427" type="submit" value="Login">
                        </div>
                        <div class="text sign-up-text">Don't have an account? <label for="flip">Sign up now</label></div>
                    </div>
                </form>
            </div>

            <!-- Signup Form -->
            <div class="signup-form">
                <div class="title">Sign Up</div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password_confirmation" placeholder="Confirm your password" required>
                        </div>
                        <div class="button input-box">
                            <input style="background-color:#e5a427" type="submit" value="Sign Up">
                        </div>
                        <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

