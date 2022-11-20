<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KKN</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    @stack('css')

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<style>
    body {
        background-color: aliceblue;
    }

    #sidebar {
        background: navy;
    }
</style>

<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-light" style="background-color:navy; color:antiquewhite">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4">
                <h1><a href="index.html" class="logo">KKN KUY</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="dashboardadmin">Dashboard</a>
                    </li>
                    <li>
                        <a href="datauser">Data User</a>
                    </li>
                    <li>
                        <a href="datadosen">Data Dosen</a>
                    </li>
                    <li>
                        <a href="{{route('datamahasiswa')}}">Data Mahasiswa</a>
                    <li>
                        <a href="u">Contact</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> {{ __('Logout') }}</a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                    </li>
                </ul>

                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | Kelompok 3 Manajemen KKN
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            @yield('content')
        </div>


    </div>

    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>
