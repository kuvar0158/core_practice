<?php
include ('config.php');


header('content-type: application/json');
header('access-control-allow-origin: *');

$data = json_decode(file_get_contents("php://input"), true); 
$sql = "SELECT * from product";
$id = $data['pid'];
$sql = "SELECT * from product WHERE id = {$id}";
$result = mysqli_query($conn, $sql) or die('query is failed');
 
if(mysqli_num_rows($result) > 0 ){
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

   echo json_encode($output);
}else{
    echo json_encode(array('message' => 'No record found', 'status' => 'false'));
}
?>
