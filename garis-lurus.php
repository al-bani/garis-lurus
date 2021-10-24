<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mencari kemiringan</title>
</head>
<?php
if(isset($_POST['hitung'])){
    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $y1 = $_POST['y1'];
    $y2 = $_POST['y2'];

$m = $y2-$y1;
$m1 = $x2-$x1;

$cara1 = "$y2 - $y1 / $x2-$x1";
$mhasil = "$m / $m1";

}
?>

<body>
<form method="post" action="garis-lurus.php">

<h4>contoh input : P(1,2) dan Q(3,4)<br>X1 = 1<br> X2 = 3<br>Y1 = 2<br>Y2 = 4</h4>
<h4>X1 : </h4><input type="number" name="x1" required>
<h4>X2 : </h4><input type="number" name="x2" required>
<h4>Y1 : </h4><input type="number" name="y1" required>
<h4>Y2 : </h4><input type="number" name="y2" required>
<input type="submit" name="hitung" class="submit" value="Hitung">
    
      <?php 	
		    if(isset($_POST['hitung'])){
      ?>
    <h2>
<?php echo $cara1; ?><br>
<?php echo $mhasil; ?><br>
    </h2>
    <?php } ?>
<br>
<br>
<br>
<br>
<br>
<h6>created by albani</h6>
</body>
</html>