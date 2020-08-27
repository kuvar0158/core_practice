<?php
include('config.php');

$db = "select * from posts";
// echo "<pre>";
// for find which class of object get_class
// print_r(get_class_methods($conn)); die;
$result = $conn->query($db);


//================----------------- for count fields------------------===========================
// if($result->num_rows > 0){
// 	while ($row = $result->fetch_assoc()) {
// 		echo "<table border='1'><tr><th>userId</th><th>tagId</th><th>title</th></tr>";
// 		// echo "id: " . $row["user_id"]. " - tag ID: " . $row["tag_id"]. " " . $row["title"]. "<br>";
// 		echo "<tr><td>".$row['user_id']."</td><td>".$row['tag_id']."
// 		</td><td>".$row['title']."</td></tr>";
// 		echo"</table>";
// 	}
// }

// -----==================reference link of mysql-----=================================

// https://www.techonthenet.com/mysql/and_or.php

// ======---------------And OR operatore--------=============================

$db1 = "SELECT user_id, tag_id, title
FROM posts
WHERE (user_id = '1')
OR (id = '1' AND slug = 'where-can-some')
OR (tag_id = '2' AND slug = 'Latest Songs' AND id = '4');";
$result1 = $conn->query($db1);

if ($result1->num_rows > 0) {
  echo "<table border='1'><tr><th>userId</th><th>tagId</th><th>title</th></tr>";
  // output data of each row
  while($row1 = $result1->fetch_assoc()) {
    echo "<tr><td>".$row1["user_id"]."</td><td>".$row1["tag_id"]." ".$row1["title"]."</td></tr>";
  }
  echo "</table>";
}

// ==================------ALTER TABLE - ADD Column-------------===============
  // ALTER TABLE product
  // ADD price DECIMAL(16,2) DEFAULT '0.00' NOT NULL;
unset($result1);
unset($row1);

$db2 = "SELECT *, SUM(quantity) AS 'Total quantity'
FROM orderdetails 
GROUP BY product_id";
$result1 = $conn->query($db2);
while($row1 = $result1->fetch_assoc()) {
	echo"<pre>";
    print_r($row1); 
  }
?>