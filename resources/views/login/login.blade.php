<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen KKN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/login/style.css">
</head>
@csrf

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('actionRegister') }}" method="post">
                @csrf
                <h1>Sign Up</h1>
                <input type="text" placeholder="NRP" name="nrp" required/>
                <input type="text" placeholder="Name" name="nama" required/>
                <input type="hidden" placeholder="role" name="role" value="mahasiswa"/>
                <input type="text" placeholder="Jurusan" name="jurusan" required/>
                <input type="text" placeholder="Kelas" name="kelas" required/>
                <input type="email" placeholder="Email" name="email" required/>
                <input type="password" placeholder="Password" name="password" required/>
                <input type="hidden" placeholder="status" name="status" value="0"/>
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('postLogin') }}" method="post">
                @csrf
                <h1>Sign in</h1>
                <input type="email" placeholder="Email" name="email" required/>
                <input type="password" placeholder="Password" name="password" required/>
                @if (session('fail'))
                    <p class="text-danger" role="alert">
                        {{ session('fail') }}
                    </p>
                @endif
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
    <script src="/assets/login/main.js"></script>
</body>

</html>
