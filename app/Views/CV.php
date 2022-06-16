<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.css">
</head>
<body>

    <section id="header" class="py-5 bg-danger">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto text-center">
                    <img class="rounded-circle" style="object-fit: " src="/img/Dimas.png" alt="" height="250" width="250">
                    <h1>Dimas Ade Mustofa</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center">BIODATA</h1>
                    <br>
                    <div class="row">
                        <div class="col-sm-4" align="justify-content-md-center">
                            <p>NPM</p>
                            <p>NAMA</p>
                            <p>Jenis Kelamin</p>
                            <p>Alamat</p>
                            <p>Golongan Darah</p>
                            <p>Agama</p>
                            <p>Email</p>
                            <p>No TLP</p>
                            <p>Hobi</p>
                        </div>
                        <div class="col-sm-6" align="justify-content-md-center">
                            <p>: <?= $data['npm']?></p>
                            <p>: <?= $data['nama']?></p>
                            <p>: <?= $data['jenis_kelamin']?></p>
                            <p>: <?= $data['alamat']?></p>
                            <p>: <?= $data['gol_darah']?></p>
                            <p>: <?= $data['agama']?></p>
                            <p>: <?= $data['email']?></p>
                            <p>: <?= $data['notlp']?></p>
                            <p>: <?= $data['hobi']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center">PENGALAMAN KERJA</h1>
                    <div class="row">
                        <div class="col-sm-9">
                        	<br>
                        	<ul>
                            <li><?= $data['pengalaman1']?></li>
                            <br>
                            <li><?= $data['pengalaman2']?></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-mt-5">
                <h1 class="text-center">Riwayat Pendidikan</h1>
                <div class="row">
                    <div class="col-sm-6" align="center">
                    	<br>
                    	<p>TK</p>
                        <p>SD</p>
                        <p>SMP</p>
                        <p>SMA</p>
                        <p>Kuliah</p>
                     </div>
                <div class="col-sm-6" align="center">
                		<br>
                    	<p>: <?= $data['tk']?></p>
                    	<p>: <?= $data['sd']?></p>
                    	<p>: <?= $data['smp']?></p>
                    	<p>: <?= $data['sma']?></p>
                    	<p>: <?= $data['kuliah']?></p>
                    </div>
                </div>
            </div>
                <td>
                    <a href="<?php echo site_url('about/add/'.$data['npm']);?>" class="btn btn-sm btn-info">Tambah</a>
                    <a href="<?php echo site_url('about/get_edit/'.$data['npm']);?>" class="btn btn-sm btn-info">Update</a>
                    <a href="<?php echo site_url('about/delete/'.$data['npm']);?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
    </section>

    <footer>
        <p class="text-center py-2 bg-warning">Developed By Dimas</p>
    </footer>
</body>

</html>