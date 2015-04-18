<?php
$conn= mysql_connect("localhost", "korisnik", "korisnik");
if(!$conn) {
    die('Ne mogu se spojiti na bazu: ' . mysql_error());
}
mysql_select_db("stanovi", $conn);
mysql_query("SET NAMES utf8");

?>