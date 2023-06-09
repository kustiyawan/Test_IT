<?php
    $sumber = 'kategori_pasien.json';
    $data_konten = file_get_contents($sumber);
    $data = json_decode($data_konten);

    $sumber_pasien = 'daftar_pasien.json';
    $data_pasien = file_get_contents($sumber_pasien);
    $pasien = json_decode($data_pasien);

    // var_dump($data);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="ilmu-detil.blogspot.com">
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Tutorial CRUD  JSON DATA</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    </head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-left">
                    <li class="clr1 active"><a href="index.html">Home</a></li>
                    <li class="clr2"><a href="">Bootstrap</a></li>
                    <li class="clr3"><a href="">AngularJS</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </br></br></br></br>
    <div class="container">
        <div class="jumbotron">    
        </div>
    </div>

    
    <div class="container">
        <div class="btn-toolbar">
            <a class="btn btn-primary" href="insert.php"><i class="icon-plus"></i> Insert Data</a>
                <div class="btn-group"> </div>
        </div>

        <!-- <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
            <div class="form-group">
                <label for="sel1"></label>
                    <?php
                        $kata_kunci="";
                        if (isset($_POST['kata_kunci'])) {
                            $kata_kunci=$_POST['kata_kunci'];
                        }
                    ?>
                    <input type="text" name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control"  required/>
            </div>
            </div>
            <div class="container">
                <input type="submit" class="btn btn-info" value="Pilih">
            </div>
        </form> -->
    </div>
        <br>
        <br>
    <div class="container">
        <div class ="row">
            <div class="col-md-9">
            <table class="table table-striped table-bordered table-hover">
                <tr>

                <th>Nama</th>
                <th>Tujuan Poli</th>
                <th>Aksi</th>
                </tr>  
                <?php 
                    
                    $no=0;foreach ($pasien->records as $index => $obj): $no++;  ?>
                <tr>
                <td><?php echo $obj->nama; ?></td>
                <td><?php echo $obj->poli; ?></td>
                <td>
                <a class="btn btn-xs btn-primary" href="update.php?id=<?php echo $index; ?>">Edit</a>
                <a class="btn btn-xs btn-danger" href="delete.php?id=<?php echo $index; ?>">Delete</a>
                </td>
                </tr>
                <?php endforeach; ?>
            </table>
            </div> 
        </div>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>