<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 40px;
}
</style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <?php
  $hasil = 0;
class Converter
{

    function getkaliorbagi($nol)
    {
      // $query = "";
        switch ($nol) {
            case '2':
                $nominalkali = "100";
                break;
            case '3':
                $nominalkali = "1000";
                break;
            case '4':
                $nominalkali = "10000";
                break;
            case '5':
                $nominalkali = "100000";
                break;
            case '6':
                $nominalkali = "1000000";
                break;

            default:
                $nominalkali = "10";
                break;
        }
        return $nominalkali;
    }
    
}

$convert = New Converter;


if(isset($_POST['convert'])){
$Nominal = $_POST['nominal'];
$satuanA = $_POST['country1'];//KG

$satuanB = $_POST['country2'];//G


if($satuanA <  $satuanB){
  $nol = $satuanB - $satuanA;
  $nominal = $convert->getkaliorbagi($nol);
  $hasil = $Nominal*$nominal;
}else{
  $operasi = '/';
  $nol = $satuanA - $satuanB;
  $nominal = $convert->getkaliorbagi($nol);
  $hasil = $Nominal/$nominal;
}
  
}





?>

  <div>
  <form method="post" action="convert.php">
    
    <input type="text" id="fname" name="nominal" placeholder="Enter here...">

    <select  id="country"  name="country1">
      <option value="1">Kg</option>
      <option value="2">Hg</option>
      <option value="3">Dag</option>
      <option value="4">G</option>
      <option value="5">Dg</option>
      <option value="6">Cg</option>
      <option value="7">Mg</option>
     </select>
<br>
<br>  
    <input type="text" id="lname" name="lastname" placeholder="=">

<br>
    <input type="text" value="<?php echo $hasil; ?>"  placeholder="Result...">   


    <select id="country" name="country2">
      <option value="1">Kg</option>
      <option value="2">Hg</option>
      <option value="3">Dag</option>
      <option value="4">G</option>
      <option value="5">Dg</option>
      <option value="6">Cg</option>
      <option value="7">Mg</option>
    </select>
  
    <input type="submit" name="convert">
  </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>