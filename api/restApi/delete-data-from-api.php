<?php
include ('config.php');

header('content-type: application/json');
header('access-control-allow-origin: *');

$data = json_decode(file_get_contents("php://input"), true); 
$id = $data['id'];
$sql = 'DELETE  FROM product WHERE id="'.$id.'"';

if(mysqli_query($conn, $sql)){
	echo json_encode(['message' => 'product is deleted successfully', 'status' => 'true']);
} else {
	echo json_encode(['message'=> 'Failed to deleted', 'status' => 'failed']);
}
