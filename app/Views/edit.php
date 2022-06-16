<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Data Diri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Update Data Diri</h1>
            </div>
        </div>

    <form action="<?php echo site_url('about/update');?>" method="post">
        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">NPM</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="npm" placeholder="Masukkan NPM...." value="<?= $npm; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Nama</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama...." value="<?= $nama; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Jenis Kelamin</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukkan Jenis Kelamin...." value="<?= $jenis_kelamin; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Alamat</label>
            </div>
            <div class="col-lg-6">
                <input type="date" class="form-control" name="alamat" placeholder="Masukkan Alamat...." value="<?= $alamat; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Golongan darah</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="gol_darah" placeholder="Masukkan Golongan Darah...." value="<?= $gol_darah; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Agama</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="agama" placeholder="Masukkan Agama...." value="<?= $no_hp; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Email</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="email" placeholder="Masukkan Email...." value="<?= $email; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">No TLP</label>
            </div>
            <div class="col-lg-6">
                <input type="number" class="form-control" name="notlp" placeholder="Masukkan No TLP...." value="<?= $notlp; ?>">
            </div>
        </div>

        <div class="row mt-3 form-floatin">
            <div class="col-lg-3">
                <label for="">Hobi</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="hobi" placeholder="Masukkan Hobi...." value="<?= $hobi; ?>">
            </div>
        </div>
        

        <div>
            <div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
    </div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</body>
</html>