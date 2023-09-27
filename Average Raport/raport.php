<!doctype html>
<html lang="en">
  <head>

  <style>
.center {
    text-align: center;
}

.border {
    border: 5px black;
  border-radius: 5px;
  padding: 5px;
  text-align: center;
  
}

.right {
    text-align: right;
}

.background {
    background-color: #A29898;
}




  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
 


  <body>
<center>
    <!--JUDUL-->
      <br />
      <font face="Comic sans MS" size=" 6" color="000000">RAPOT </font>
      <hr width="70%" />
      <!--END JUDUL-->
</center>
<br>
<br>
<br>
<?php
$hasil = 0;
class Hitung {
        


    function ratarata ($agama,$pkn,$matematika,$bi,$ipa,$ips,$informatika,$senibudaya,$total){
        $res = ($agama+$pkn+$matematika+$bi+$ipa+$ips+$informatika+$senibudaya)/$total;
    //    print_r($res);die();
        return $res;
    }



}

$hitung = New Hitung;
if(isset($_POST['Hitung'])){
    $agama = $_POST['agama'];
    $pkn = $_POST['pkn'];
    $matematika = $_POST['matematika'];
    $bi = $_POST['bi'];
    $ipa = $_POST['ipa'];
    $ips = $_POST['ips'];
    $informatika = $_POST['informatika'];
    $senibudaya = $_POST['senibudaya'];
    $hasil = $hitung->ratarata($agama,$pkn,$matematika,$bi,$ipa,$ips,$informatika,$senibudaya,'8');
    
}



if ($hasil > 70) {
    $status = "Baik";
} elseif($hasil < 70 && $hasil > 40){
    $status = "sedang";
} elseif($hasil < 40){
    $status = "jelek";
} 

?>
  

<form method="post" action="raport.php">
    <div class="row">
        <div class="col-7">
            <h6 class="center">PENDIDIKAN AGAMA ISLAM</h6>
        </div>
        <div class="col-5">
  	        <input class="border" type="text" name="agama" >
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <h6 class="center">PENDIDIKAN PANCASILA </h6>
        </div>
        <div class="col-5">
  	        <input  class="border" type="text" name="pkn" >
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <h6 class="center">MATEMATIKA</h6>
        </div>
        <div class="col-5">
  	        <input  class="border" type="text" name="matematika" >
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <h6 class="center">BAHASA INDONESIA</h6>
        </div>
        <div class="col-5">
  	        <input class="border" type="text" name="bi" >
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <h6 class="center">ILMU PENGETAHUAN ALAM</h6>
        </div>
        <div class="col-5">
  	        <input  class="border" type="text" name="ipa" >
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <h6 class="center">ILMU PENGETAHUAN SOSIAL</h6>
        </div>
        <div class="col-5">
  	        <input  class="border" type="text" name="ips" >
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <h6 class="center">INFORMATIKA</h6>
        </div>
        <div class="col-5">
  	        <input  class="border" type="text" name="informatika" >
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <h6 class="center">SENI BUDAYA</h6>
        </div>
        <div class="col-5">
  	        <input  class="border" type="text" name="senibudaya" >
        </div>
        <br>
        <br>
        <br>
        <div class="col-7"></div>
        <div class="col-5">
            <button type="submit" name="Hitung" class="btn btn-success">SUBMIT</button>
        </div>
    </div>
</form>
<br>
<br>
<div class="row">
        <div class="col-7">
            <h6 class="center">NILAI RATA - RATA</h6>
        </div>
        <div class="col-5">
<input class="border" type="text" value="<?php echo $hasil; ?>" readonly="" class="bil">
<br>
<br>
<br>
<input class="border" type="text" value="<?php echo $status; ?>" readonly="" class="bil">




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
