<!DOCTYPE html>
<html>
<head>
	<title>kalkulator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
    class Hitung {
        
        function tambah ($bill1,$bill2){
            $hasil = $bill1+$bill2;
            return $hasil;
        }
        
        function kurang ($bill1,$bill2){
        $hasil = $bill1-$bill2;
        return $hasil;
        }

        function kali ($bill1,$bill2) {
        $hasil = $bill1*$bill2;
        return $hasil;
        }

        function bagi ($bill1,$bill2) {
        $hasil = $bill1*$bill2;
        return $hasil;
        }
    }

    $hitung = New Hitung;

    $hasil = 0;
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];
        switch ($operasi) {
        }
    }

    // import class name 
    //$nilai_1ritmatika = new Hitung();


    // use function form class name.
    echo $nilai_1ritmatika->tambah($bil1,$bil2);
    echo $nilai_1ritmatika->kurang($bil1,$bil2);
    echo $nilai_1ritmatika->kali($bil1,$bil2);
    echo $nilai_1ritmatika->bagi($bil1,$bil2);

	?>
	<div class="kalkulator">
		<h2 class="judul">Kalkulator </h2>
		<form method="post" action="kalkulator.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan bilangan pertama">
            <select class="opt" name="operasi">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan bilangan kedua">
			
            <br>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>

			<input type="text" value="<?php echo $hasil; ?>" class="bil" readonly="">	
	</div>
</body>
</html>