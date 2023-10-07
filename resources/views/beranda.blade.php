<!DOCTYPE html>
<html>
<head>
    <title>Website Pertama</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav id="menu">
     <ul>
        <div id="heading">
            <a href="">BankSampah</a></li>
        </div>
        <li><a href="{{ route('jenisSampah') }}">Jenis Sampah</a></li>
        <li><a href="{{ route('login') }}"><i class="bi bi-person-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
          </svg>Login</a></li>
    </ul>
</nav>

    <div class="content-items" id="img">
        <img src="{{ url('gambar/gambar1.jpeg') }}" alt="..." >
            <h2>Selamat Datang di Website BankSampah</h2>
    </div>

</html>