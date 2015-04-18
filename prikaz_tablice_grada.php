<html>
<body>
<head>
    <title>Prikaz Zupanija</title>
    <h1>PRIKAZ GRADOVA<h1>
</head>
<?php
//konektiranje na bazu
include("includes/db.php");

// upiti

$sql="SELECT * FROM Grad";
$result=mysql_query($sql);
if(!$result){
    echo "SQL upit($sql) nije uspjesno izvrsen: ".mysql_error();
    exit;
}

if (mysql_num_rows ($result)==0){
    echo "Nema redaka u rezultatu!";exit;
}
echo "<br><br><br>";
$result=mysql_query("SELECT *FROM Grad");
echo"<table border='1'>
<tr>
<th>Id grada</th>
<th>Naziv</th>
<th>Poštanski broj</th>
<th>Županija</th>
</tr>";
while($row=mysql_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['idGrad']."</td>";
    echo"<td>".$row['Naziv']."</td>";
    echo"<td>".$row['PostanskiBroj']."</td>";
    echo"<td>".$row['Zupanija_idZupanija']."</td>";
    echo"</tr>";
}
echo"</table>";
mysql_close($conn);
?>
</body>
</html>