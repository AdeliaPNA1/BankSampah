@extends('admin.layout')
@section('content') 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" >
    <title>MTs Mifthaul Huda Kalipucang</title>
</head>
<body>

@include('admin.wrapper')

<div id="page-content-wrapper">
    <div class="container-fluid px-4">
        <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Jenis Daftar Sampah</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('sampahs.create') }}"> Tambah Daftar</a>
                </div></br></br>
                <div class="pull-right mb-2">
                    <form action="{{ route('sampahs.index') }}" method="GET">
                        <label for="search" class="sr-only">
                            Search
                        </label>
                    <input type="text" name="s"
                        class="block w-full p-3 pl-10 text-sm border-gray-200 rounded-md focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                        placeholder="Search..." />
                    </form>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
                <div class="alert alert-primary">
                    {{ Session('success')}}
                </div>
            @endif
        </div>
        <div style="overflow-x:auto;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Jenis Sampah</th>
                    <th>Gambar Sampah</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sampahs as $sampah)
                    <tr>
                        <td>{{ $sampah->id }}</td>
                        <td>{{ $sampah->namaSampah }}</td>
                        <td>
                            <img src=" {{ asset('uploads/' . $sampah->gambarSampah) }} " width="100">
                        </td>
                        <td>
                            <form action="{{ route('sampahs.destroy',$sampah->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('sampahs.edit',$sampah->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $sampahs->links() !!}
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");

                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
            </script>


    </body>
</html>

@stop