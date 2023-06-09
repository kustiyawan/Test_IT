<?php 
    if ( !empty($_POST)) { 
    
        $nama  = $_POST['nama'];
        $poli  = $_POST['poli'];
        // $age    = $_POST['age'];
        // $gender = $_POST['gender'];
      
  $file = file_get_contents('daftar_pasien.json');
  $data = json_decode($file, true);
  unset($_POST["add"]);
  $data["records"] = array_values($data["records"]);
  array_push($data["records"], $_POST);
  file_put_contents("daftar_pasien.json", json_encode($data));
  header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="tutorial-boostrap-merubaha-warna">
 <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <title>Json Data</title>
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <style type="text/css">
 .navbar-default {
  background-color: #3b5998;
  font-size:18px;
  color:#ffffff;
 }
 </style>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    </div>
  </div>
</nav>
<!-- /.navbar -->
<div class="container">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-3"><h3>Create a User</h3>
        <form method="POST" action="">
          <div class="form-group">
            <label for="inputFName">Nama</label>
              <input type="text" class="form-control" required="required" id="inputFName" name="nama" placeholder="First Name">
              <span class="help-block"></span>
          </div>
   
          <!-- <div class="form-group ">
            <label for="inputLName">Last Name</label>
              <input type="text" class="form-control" required="required" id="inputLName" name="lname" placeholder="Last Name">
                <span class="help-block"></span>
          </div>
   
          <div class="form-group">
            <label for="inputAge">Age</label>
              <input type="number" required="required" class="form-control" id="inputAge" name="age" placeholder="Age">
                <span class="help-block"></span>
          </div> -->
          <div class="form-group">
            <label for="inputGender">Tujuan Poli</label>
              <select class="form-control" required="required" id="inputGender" name="poli" >
                <option>Please Select</option>
                  <option value="umum">umum</option>
                  <option value="bedah ok">bedah ok</option>
                  <option value="bedah umum">bedah umum</option>
                  <option value="ortopedic">ortopedic</option>
                  <option value="Kesehatan Anak">Kesehatan Anak</option>
                  <option value="Obstreti & Ginekologi">Obstreti & Ginekologi</option>
                  <option value="Keluarga Berencana">Keluarga Berancana</option>
                  <option value="Saraf">Saraf</option>
              </select>
                <span class="help-block"></span>
          </div>
    
          <div class="form-actions">
            <button type="submit" class="btn btn-success">Create</button>
            <a class="btn btn btn-default" href="index.php">Back</a>
          </div>
        </form>
        </div></div>        
</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>