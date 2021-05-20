<?php
include ('config.php');

header('content-type: application/json');
header('access-control-allow-origin: *');

$data = json_decode(file_get_contents("php://input"), true); 
$search_value = $data['name'];
$sql = "SELECT * FROM product WHERE name  LIKE '%".$search_value."%' ";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0 ){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

   echo json_encode($output);
}else{
    echo json_encode(array('message' => 'No record found', 'status' => 'false'));
}
