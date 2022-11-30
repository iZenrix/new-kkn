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
        <div class="form-container sign-in-container">
            <form action="{{route('tambahdosen')}}" method="post">
                @csrf
                <h1>Create Account</h1>
                <input type="text" placeholder="NIP" name="nrp" />
                <input type="text" placeholder="Name" name="nama" />
                <input type="hidden" placeholder="role" name="role" value="dosen" />
                <input type="text" placeholder="Jurusan" name="jurusan" />
                <input type="hidden" placeholder="Kelas" name="kelas" value="null" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <input type="hidden" placeholder="status" name="status" value="1"/>
                <button type="submit">Sign Up</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Tambah Dosen</h1>
                    <p>Ini Form Tambah Dosen.</p>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/main.js"></script>
</body>

</html>
