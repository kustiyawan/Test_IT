<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getfile = file_get_contents('daftar_pasien.json');
    $jsonfile = json_decode($getfile, true);
    $jsonfile = $jsonfile["records"];
    $jsonfile = $jsonfile[$id];
}

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    $getfile = file_get_contents('daftar_pasien.json');
    $all = json_decode($getfile, true);
    $jsonfile = $all["records"];
    $jsonfile = $jsonfile[$id];

    $post["nama"] = isset($_POST["nama"]) ? $_POST["nama"] : "";
    // $post["lname"] = isset($_POST["lname"]) ? $_POST["lname"] : "";
    // $post["age"] = isset($_POST["age"]) ? $_POST["age"] : "";
    $post["poli"] = isset($_POST["poli"]) ? $_POST["poli"] : "";

    if ($jsonfile) {
        unset($all["records"][$id]);
        $all["records"][$id] = $post;
        $all["records"] = array_values($all["records"]);
        file_put_contents("daftar_pasien.json", json_encode($all));
    }
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta name="description" content="tutorial-boostrap-merubaha-warna">
 
 <title>Boostrap </title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
      <h4>Detailed Technology Center</h4>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
    </div>
  </div>
</nav>
<!-- /.navbar -->

<div class="container">
    <div class="row">
        <div class="row">
            <h3>Update pasien</h3>
        </div>
            
        <?php if (isset($_GET["id"])): ?>
  <form method="POST" action="update.php">
  <div class="col-md-6">
   <input type="hidden" value="<?php echo $id ?>" name="id"/>
   <div class="form-group">
    <label for="inputFName">Nama</label>
    <input type="text" class="form-control" required="required" id="inputFName" value="<?php echo $jsonfile["nama"] ?>" name="nama" placeholder="First Name">
    <span class="help-block"></span>
   </div>
   
   <!-- <div class="form-group">
    <label for="inputLName">Last Name</label>
    <input type="text" class="form-control" required="required" id="inputLName" value="<?php echo $jsonfile["lname"] ?>" name="lname" placeholder="Last Name">
    <span class="help-block"></span>
   </div>
   
   <div class="form-group">
    <label for="inputAge">Age</label>
    <input type="number" required="required" class="form-control" id="inputAge" value="<?php echo $jsonfile["age"] ?>" 
     name="age" placeholder="Age">
    <span class="help-block"></span>
   </div> -->
   
   <div class="form-group">
    <label for="inputGender"></label>
    <select class="form-control" required="required" id="inputGender" name="poli" >
    <option>Please Select</option>
    <!-- <option value="Male" <?php echo  $jsonfile["gender"] == 'Male'?'selected':'';?>>Male</option>
    <option value="Female" <?php echo $jsonfile["gender"] == 'Female'?'selected':'';?>>Female</option> -->

    <option value="umum" <?php echo $jsonfile["poli"] == 'umum'?'selected':'';?>>umum</option>
    <option value="bedah ok" <?php echo $jsonfile["poli"] == 'bedah ok'?'selected':'';?>>bedah ok</option>
    <option value="bedah umum" <?php echo $jsonfile["poli"] == 'bedah umum'?'selected':'';?>>bedah umum</option>
    <option value="ortopedic" <?php echo $jsonfile["poli"] == 'ortopedic'?'selected':'';?>>ortopedic</option>
    <option value="Kesehatan Anak" <?php echo $jsonfile["poli"] == 'Kesehatan Anak'?'selected':'';?>>Kesehatan Anak</option>
    <option value="Obstreti & Ginekologi" <?php echo $jsonfile["poli"] == 'Obstreti & Ginekologi'?'selected':'';?>>Obstreti & Ginekologi</option>
    <option value="Keluarga Berencana" <?php echo $jsonfile["poli"] == 'Keluarga Berencana'?'selected':'';?>>Keluarga Berancana</option>
    <option value="Saraf" <?php echo $jsonfile["poli"] == 'Saraf'?'selected':'';?>>Saraf</option>
    </select>
    <span class="help-block"></span>
   </div>
    
   <div class="form-actions">
    <button type="submit" class="btn btn-primary">Update</button>
    <a class="btn btn btn-default" href="index.php">Back</a>
   </div>
  </div>
  </form>
  <?php endif; ?>     
    </div> 
</div> 
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>