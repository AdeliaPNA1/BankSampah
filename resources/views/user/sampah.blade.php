@extends('admin.layout')  
@section('content') 


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Jenis Sampah</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.112.5">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>        
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">    

  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}" >

  <style>
    #heading{
    float: left;
    width: 640px;
}
#heading a {
    line-height: 65px;
    text-decoration: none;
    padding-left: 60px;
    color:#FFF;
    font-family: Copperplate;
    font-size: 40px;
}
    #menu {
    background:#248180;
    width: 100%;
    height: 65px;
    margin: 0px;
    padding: 0px;
    
}
#menu ul {
    list-style: none;

}
#menu ul li {
    float: right;
    line-height: 65px
}
#menu ul li a {
    float:left; 
    width:100px; 
    display:block; 
    text-align:center; 
    color:#FFF; 
    text-decoration:none; 
}
    .card-thumbnail {
    max-height: 250px;
    overflow: hidden;
  }
  </style>
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

    <div class="container" id="hanging-icons">
      <h2 class="pb-2 border-bottom">Jenis Sampah</h2></br>
    </div>     

    <div class="album py-5 bg-body-tertiary">
      
    <section class="bg-light py-4 my-5">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="{{ url('gambar/gambar2.jpg') }}" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="#" class="text-dark">Sampah Kertas</a></h3></br>
                        <h4 class="pb-2 border-bottom text-center">Rp. 2.500/Kg</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="{{ url('gambar/gambar3.jpg') }}" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="#" class="text-dark">Sampah Plastik</a></h3></br>
                        <h4 class="pb-2 border-bottom text-center">Rp. 2.800/Kg</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="{{ url('gambar/gambar4.jpg') }}" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="#" class="text-dark">Sampah Logam</a></h3></br>
                        <h4 class="pb-2 border-bottom text-center">Rp. 6.000/Kg</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="{{ url('gambar/gambar5.jpg') }}" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="#" class="text-dark">Sampah Kaca</a></h3></br>
                        <h4 class="pb-2 border-bottom text-center">Rp. 6.000/Kg</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="card my-3">
                    <div class="card-thumbnail">
                        <img src="{{ url('gambar/gambar6.jpg') }}" class="img-fluid" alt="thumbnail">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="#" class="text-dark">Sampah Limbah </a></h3></br>
                        <h4 class="pb-2 border-bottom text-center">Rp. 6.000/Kg</h4>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</section>
</div>

</main>      




<script src="{{ asset('js/navbar.js') }}" ></script>



</body>
</html>

@stop

