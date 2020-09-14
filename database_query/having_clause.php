<?php

include('config.php');
$db2 = "SELECT *, SUM(quantity) AS 'Total quantity'
FROM orderdetails 
GROUP BY product_id HAVING SUM(quantity) > 3";
$result1 = $conn->query($db2);
while($row1 = $result1->fetch_assoc()) {
	echo"<pre>";
    print_r($row1); 
  }	
?>

<!--====================== Example - With SELECT Statement ==========================-->
<!-- SELECT *
FROM contacts
WHERE last_name IS NOT NULL;

This MySQL IS NOT NULL example will return all records from the contacts table where the last_name does not contain a null value. -->