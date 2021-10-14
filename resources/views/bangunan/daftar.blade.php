<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    <title>DAFTAR DATA BANGUNAN|SMP PGRI CIRANJANG</title>
    <style>
      .logo {
        float: right;
        margin-top: 10px;
      }

      .button {
        /* margin: 10px; */
        padding: 10px;
        background-color: #2ecc71;
        color: white;
        border: 0;
      }
    </style>
</head>
<body>
    <form action="/bangunan/daftar/store" method="POST" enctype="multipart/form-data">
    <!-- <table border="0" width="600"> -->
    @csrf
        <fieldset>
                <img src="{{ asset('seer/PGRI.jpg') }}" width="80px" class="logo" alt="">
                <h2>DAFTAR BANGUNAN SEKOLAH</h2>
                <h5>SMP PGRI CIRANJANG</h5> 
              
                
        <hr>
        <p>
            <label>NAMA BANGUNAN:</label>
            <input type="text" name="Jenis_ruangan" placeholder="nama bangunan">
        </p>
        <p>
            <label>TANGGAL PEMBUATAN:</label>
            <input type="text" name="tanggal_pembuatan" placeholder="tanggal pembuatan">
        </p>
          <p>
            <label>PHOTO BANGUNAN:</label>
            <div class="row">
    
                <div class="col-md-6">
                    <input type="file" name="foto" class="form-control">
                </div>
     
            </div>
        </p>

        <!-- @csrf
        <div class="row">
    
    <div class="col-md-6">
        <input type="file" name="foto" class="form-control">
    </div>
</div> -->
        <p>
           <input type="submit" value="Simpan" class="button">

        </p>
        </fieldset>
    </form>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html






