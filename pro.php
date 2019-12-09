<?php

require('koneksi.php');

$sql = "SELECT * FROM layanan_kesehatan";
$result = $mysqli->query($sql);

while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $data[] = $row;
}

$results = ["sEcho"=>1,
                "iTotalRecords" => count($data),
                "iDisplayRecords" => count($data),
                "aaData" => $data];

echo json_encode($results);

?>