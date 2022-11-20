<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen KKN</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{route('actionRegister')}}" method="post">
            @csrf
                <h1>Create Account</h1>
                <input type="text" placeholder="NRP" name="nrp" />
                <input type="text" placeholder="Name" name="nama"/>
                <input type="hidden" placeholder="role" name="role" value="mahasiswa" />
                <input type="text" placeholder="Jurusan" name="jurusan" />
                <input type="text" placeholder="Kelas" name="kelas" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <input type="hidden" placeholder="status" name="status" value="0"/>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{route('postLogin')}}" method="post">
            @csrf
                <h1>Sign in</h1>
                <input type="email" placeholder="Email" name="email"/>
                <input type="password" placeholder="Password" name="password" />
                <a href="#">Forgot your password?</a>
                <button type="submit">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Don't have account yet?</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/main.js"></script>
</body>

</html>
