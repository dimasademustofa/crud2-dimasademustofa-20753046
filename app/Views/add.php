<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Add Informasi Data Diri</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Form Tambah Data</h1>
            </div>
        </div>
        <form action="/About/simpan" method="POST">

        <div class="row">
            <div class="col-lg-3">
                <label for="">NPM</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="npm">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <label for="">Nama</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="nama">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <label for="">Jenis Kelamin</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="jenis_kelamin">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <label for="">Alamat</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="alamat">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <label for="">Golongan Darah</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="gol_darah">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <label for="">Agama</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="agama">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <label for="">Email</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="email">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <label for="">No TLP</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="notlp">
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <label for="">HOBI</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="hobi">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-9">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>  
</div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>