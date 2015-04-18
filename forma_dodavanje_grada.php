<html>
<meta http-equiv="Content-Type"content="text/html;charset=utf-8"/>
<head>
    <title>Dodavanje zupanije</title>
</head>
<body>
</body>



<form action="submit_grada.php" method="post">
ID Grada: <input type="text" name="idGrad"/><br><br>
Naziv: <input type="text" name="Naziv"/><br><br>
    Poštanski broj: <input type="text" name="PostanskiBroj"/><br><br>
<select name="idZupanija">
    <?php
    include("includes/db.php");
    $sql = "SELECT * FROM Zupanija";
    $result = mysql_query ($sql);
    while ($row = mysql_fetch_assoc ($result)) {
        echo '<option value="'.$row["idZupanija"].'">'.$row["Naziv"]."</option>";
    }
    ?>

</select>
<input type="submit" value="Unesi" />
</form>
</body>
</html>