<html>
<head></head>
<title>Unos zupanije</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>
<?php
include("includes/db.php");

$sifra=$_POST['idZupanija'];
$naziv=$_POST['Naziv'];
$sql="INSERT INTO zupanija(idZupanija,Naziv) VALUES('$sifra','$naziv')";
if(!mysql_query($sql,$conn)){
	die('Greska: '.mysql_error());
	}
	echo"Zupanija dodana!";
	mysql_close($conn);


?>
</body>
</html>