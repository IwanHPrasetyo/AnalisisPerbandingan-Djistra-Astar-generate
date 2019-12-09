<? php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("id6059435_analisis") or die (mysql_error());

$server="localhost";
$user_db="id6059435_root";
$pass_db="12345";
$db="id6059435_analisis";
$conn=new mysqli($server,$user_db,$pass_db,$db);
?> 