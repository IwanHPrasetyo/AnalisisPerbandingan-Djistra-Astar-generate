<?php 

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'analisis';


$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

$query = mysqli_query($conn,"SELECT * from perbandingan where id_awal = '1' and id_lakes = 'k16' and node_awal = 'a1' order by fn limit 1");
$data  = mysqli_fetch_array($query);

$node  = $data['node_awal'];
$jarak = 0;
$tjarak= 0;


$query3 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
$data3  = mysqli_fetch_array($query3);

$lat = $data3['lat'];
$lon = $data3['lng']; 

do{

echo $node." = ";
echo"[$lat, $lon] jarak = ";
echo $jarak."<br>";

$query2 = mysqli_query($conn,"SELECT * from perbandingan where id_awal = '1' and id_lakes = 'k16' and node_awal = '$node' order by fn limit 1");
$data2  = mysqli_fetch_array($query2);

$node  = $data2['node_tujuan'];
$jarak = $data2['jarak'];
$tjarak = $data2['jarak'] + $tjarak;

$query4 = mysqli_query($conn,"SELECT  * from tb_node where kode = '$node'");
$data4  = mysqli_fetch_array($query4);

$lat = $data4['lat'];
$lon = $data4['lng']; 

}while($node .= "");

echo "Total Jarak = ".$tjarak;

?>