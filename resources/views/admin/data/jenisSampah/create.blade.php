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
    <title>BankSampah</title>
    <link href="vendor/select2/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>

@include('admin.wrapper')

<div id="page-content-wrapper">
    <div class="container-fluid px-4">
        <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Tambah Data</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('sampahs.index') }}"> Kembali</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('sampahs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Sampah:</strong>
                        <input type="text" name="namaSampah" class="form-control" placeholder="Jenis Sampah">
                        @error('namaSampah')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                    <div class="form-group">
                        <label for="gambarSampah">Gambar Sampah</label>
                        <input type="file" name="gambarSampah" class="form-control"> </textarea>
                        @error('gambarSampah')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="vendor/select2/dist/js/select2.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
            <script>
                var el = document.getElementById("wrapper");
                var toggleButton = document.getElementById("menu-toggle");

                toggleButton.onclick = function () {
                    el.classList.toggle("toggled");
                };
                // In your Javascript (external .js resource or <script> tag)
                $(document).ready(function() {
                    $('.js-example-basic-single').select2();
                });
            </script>

            <script>
                function jamFinal() {
                    var jamMulai = $('#jam_mulai').val();
                    var jamSelesai = $('#jam_selesai').val();
                    $('.jam_final').val(jamMulai.replace(/:/g, '.')+' - '+jamSelesai.replace(/:/g, '.'));
                }
            </script>


    </body>
</html>

@stop