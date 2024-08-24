<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="{{ asset('css/login_register.css') }}">
</head>
<body>
    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">

            <!-- SIGN UP -->
            
<div class="col align-items-center flex-col sign-up">
    <div class="form-wrapper align-items-center">
        <form method="POST" action="{{ route('register') }}" class="form sign-up">
            @csrf
            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" name="name" placeholder="Username" required>
            </div>
            <div class="input-group">
                <i class='bx bx-mail-send'></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <i class='bx bxs-lock-alt'></i>
                <input type="password" name="password_confirmation" placeholder="Confirm password" required>
            </div>
            <button type="submit">
                Sign up
            </button>
            <p>
                <span>Already have an account?</span>
                <b onclick="toggle()" class="pointer">Sign in here</b>
            </p>
        </form>
    </div>
</div>
            <!-- END SIGN UP -->


            <!-- SIGN IN -->
<div class="col align-items-center flex-col sign-in">
    <div class="form-wrapper align-items-center">
        <form method="POST" action="{{ route('login') }}" class="form sign-in">
            @csrf
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='bx bxs-user'></i></span>
                </div>
                <input type="text" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class='bx bxs-lock-alt'></i></span>
                </div>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">
                Sign in
            </button>
            <p class="mt-3">
                <b>Forgot password?</b>
            </p>
            <p class="mt-3">
                <span>Don't have an account?</span>
                <b onclick="toggle()" class="pointer">Sign up here</b>
            </p>
        </form>
    </div>
</div>

<!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->
        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>Welcome</h2>
                </div>
                <div class="img sign-in"></div>
            </div>
            <!-- END SIGN IN CONTENT -->
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up"></div>
                <div class="text sign-up">
                    <h2>Join with us</h2>
                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->
    </div>
    <script src="{{ asset('js/login_register.js') }}"></script>
</body>
</html>
