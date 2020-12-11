<?php
include ('config.php');

header('content-type: application/json');
header('access-control-allow-origin: *');

$data = json_decode(file_get_contents("php://input"), true); 
// print_r($data); die;
$id = $data['id'];
$name = $data['name'];
$category = $data['category'];
$price = $data['price'];
// 
// print_r($data) ; die;

$sql = 'UPDATE product SET name = "'.$name.'", category = "'.$category.'", price = "'.$price.'" WHERE id="'.$id.'"';

if(mysqli_query($conn, $sql)){
	echo json_encode(['message' => 'product is updated successfully', 'status' => 'true']);
} else {
	echo json_encode(['message'=> 'Failed to update', 'status' => 'failed']);
}
