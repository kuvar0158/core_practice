<!DOCTYPE html>
<html>
<head>
	<title>first element array</title>
</head>
<body>
<h2>first element array</h2>
<?php 
$arrayName = array('1' => 'kuvar', '2' => 'Pratap', '3' => 'singh', '4' =>'sujit', '5' => 'maurya');
// $kp = reset($arrayName);
// print_r($kp);

foreach($arrayName as $val){

      echo $val."<br>";

} ?>
</body>
</html>