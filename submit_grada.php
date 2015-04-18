<html>
<head>
    <title>Unos grada</title>
</head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<?php
include("includes/db.php");
$sifra=$_POST['idGrad'];
$naziv=$_POST['Naziv'];
$pbroj=$_POST['PostanskiBroj'];
$zupanija=$_POST['idZupanija'];
$sql="INSERT INTO Grad(idGrad,Naziv,PostanskiBroj,Zupanija_idZupanija) VALUES('$sifra','$naziv','$pbroj','$zupanija')";
if(!mysql_query($sql,$conn)){
	die('Greska: '.mysql_error());
	}
	echo"Grad dodan!";
	mysql_close($conn);


?>
</body>
</html>