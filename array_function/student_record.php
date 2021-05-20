<?php

$students = [
 array('name' => 'kp', 'roll' =>12, 'address' => 'jaunpur'),
 array('name' =>'sumit', 'roll' => 11, 'address' => 'lucknow'),
 array('name' =>'chinmay', 'roll' => 1, 'address' => 'delhi'),
 array('name' =>'arun', 'roll' => 21, 'address' => 'pune')
];
// echo "<pre>";
// print_r($students); die;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<th>name</th>
	<th>roll number</th>
	<th>address</th>
	
	<?php 
		foreach($students as $record){
	?>
	<tr>
	<td><?php echo  $record['name'];?></td>
	<td><?php echo  $record['roll'];?></td>
	<td><?php echo  $record['address'];?></td>
	</tr>
	<?php	}
		?>
	
</table>
</body>
</html>