<html>
<body>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Prikaz Zupanija</title>
<h1>PRIKAZ ŽUPANIJA<h1>
</head>
<?php
//konektiranje na bazu
include("includes/db.php");

// upiti

$sql="SELECT * FROM Zupanija";
$result=mysql_query($sql);
if(!$result){
echo "SQL upit($sql) nije uspjesno izvrsen: ".mysql_error();
exit;
}

if (mysql_num_rows ($result)==0){
echo "Nema redaka u rezultatu!";exit; 
}
echo "<br><br><br>";
$result=mysql_query("SELECT *FROM Zupanija");
echo"<table border='1'>
<tr>
<th>Id županije</th>
<th>Naziv</th>
</tr>";
while($row=mysql_fetch_array($result)){
echo"<tr>";
echo"<td>".$row['idZupanija']."</td>";
echo"<td>".$row['Naziv']."</td>";
echo"</tr>";
}
echo"</table>";
mysql_close($conn);
?>
</body>
</html>