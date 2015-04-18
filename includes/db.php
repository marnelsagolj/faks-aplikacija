<?php
$conn= mysql_connect("localhost", "pziaplik_korisni", "korisnik");
if(!$conn) {
    die('Ne mogu se spojiti na bazu: ' . mysql_error());
}
mysql_select_db("pziaplik_baza", $conn);
mysql_query("SET NAMES utf8");

?>