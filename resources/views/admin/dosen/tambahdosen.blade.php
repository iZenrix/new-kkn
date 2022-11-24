<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen KKN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/style.css">
</head>
@csrf

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" method="post">
                @csrf
                <h1>Sign Up</h1>
                <input type="text" placeholder="NIDN" name="nrp" />
                <input type="text" placeholder="Name" name="nama" />
                <input type="hidden" placeholder="role" name="role" value="mahasiswa" />
                <input type="text" placeholder="Jurusan" name="jurusan" />
                <input type="text" placeholder="Kelas" name="kelas" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <input type="hidden" placeholder="status" name="status" value="1" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="post">
                @csrf
                <h1>Sign Up</h1>
                <input type="text" placeholder="NRP" name="nrp" />
                <input type="text" placeholder="Name" name="nama" />
                <input type="hidden" placeholder="role" name="role" value="mahasiswa" />
                <input type="text" placeholder="Jurusan" name="jurusan" />
                <input type="text" placeholder="Kelas" name="kelas" />
                <input type="email" placeholder="Email" name="email" />
                <input type="password" placeholder="Password" name="password" />
                <input type="hidden" placeholder="status" name="status" value="0" />
                <button type="submit">Sign Up</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Tambah Dosen</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus molestias obcaecati quod
                        quaerat!</p>
                </div>
            </div>
        </div>
    </div>
    <script src="/assets/main.js"></script>
</body>

</html>
