<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css') }}">
    <title>DAFTAR DATA GURU|SMP PGRI CIRANJANG</title>
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
    <form action="/Data-Pegawai/daftar/store" method="POST">
    <!-- <table border="0" width="600"> -->
    @csrf
        <fieldset>
                <img src="{{ asset('seer/PGRI.jpg') }}" width="80px" class="logo" alt="">
                <h2>DAFTAR DATA GURU</h2>
                <h5>SMP PGRI CIRANJANG</h5> 
              
                
        <hr>
        <p>
            <label>NAMA:</label>
            <input type="text" name="nama" placeholder="Nama">
        </p>
        <p>
            <label>NIP:</label>
            <input type="text" name="nip" placeholder="NIP">
        </p>
        <p>
            <label>PANGKAT:</label>
              <select name="pangkat" id="">
                <option value="TMP">TMP</option>
                <option value="PMS">PMS</option>
            </select>
        </p>
        <p>
            <label>JABATAN:</label>
            <select name="jabatan" id="">
                <option value="GURU">Guru</option>
                <option value="PEGAWAI">Pegawai</option>
            </select>
        </p>
        <p>
            <label>MASA KERJA:</label>
             <input type="text" name="masakerja" placehorder="MASA KERJA">
        </p>
    
        <p>
            <label>PENDIDIKAN:</label>
             <input type="text" name="pendidikan" placehorder="PENDIDIKAN">
            <!-- <textarea name="Keterangan"></textarea> -->
        </p>
          <p>
            <label>TANGGAL LAHIR:</label>
             <input type="text" name="tgl" placehorder="TANGGAL LAHIR">
        </p>
          <p>
            <label>MULAI KERJA:</label>
             <input type="text" name="mulai_kerja" placehorder="MULAI KERJA">
        </p>
          <p>
            <label>MUTASI:</label>
             <input type="text" name="mutasi" placehorder="MUTASI">
        </p>
          <p>
            <label>DISINIH SEJAK:</label>
             <input type="text" name="disini_sejak" placehorder="DISINIH SEJAK">
        </p>
          <p>
            <label>E-MAIL:</label>
             <input type="text" name="email" placehorder="EMAIL">
        </p>
        <p>
            <label>NUPTK:</label>
             <input type="text" name="nuptk" placehorder="NUPTK">
        </p>
          <p>
            <label>NRG:</label>
             <input type="text" name="nrg" placehorder="NRG">
        </p>

        
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