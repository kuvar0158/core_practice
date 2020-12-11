<?php
include ('config.php');

header('content-type: application/json');
header('access-control-allow-origin: *');

$data = json_decode(file_get_contents("php://input"), true); 
// print_r($data); die;
$name = $data['name'];
$category = $data['category'];
$price = $data['price'];
// 

$sql = 'INSERT into product (name, category, price) VALUES ("'.$name.'", "'.$category.'", "'.$price.'")';

if(mysqli_query($conn, $sql)){
	echo json_encode(['message' => 'product is added successfully', 'status' => 'true']);
} else {
	echo json_encode(['message'=> 'Failed to insert', 'status' => 'failed']);
}
