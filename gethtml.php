<!DOCTYPE html>
<html>
<head>
	<style>
		.set{
			color: green;
			font-size: 20px;
			margin-top: 20px;
		}
	</style><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<title> part of html </title>
</head>
<body>
<h2>hello this is the part of html</h2>
<?php echo 'ok' ;
$value = 'kuvar pratap singh';
$body = "<div class='set'><h2>this is the html inside php </h2><p>
<input type='text' name='user' value='".$value."' class='form-control'>
</p></div>";

echo $body;

$data = ['i','n', 'd', 'i','a'];
               $i = 1;
               for($i=0; $i < count($data); $i++){
               	
               	if($i == 0)
               	{
               		echo $data[0].'<br>';
               		// continue;
               	}
               	if($i == 1)
               	{
               		echo $data[0].$data[1].'<br>';
               		// continue;
               	}
               	if($i == 2)
               	{
               		echo $data[0].$data[1].$data[2].'<br>';
               	}
               	if($i == 3)
               	{
               		echo $data[0].$data[1].$data[2].$data[3].'<br>';
               	}
               	if($i == 4)
               	{
               		echo $data[0].$data[1].$data[2].$data[3].$data[4].'<br>';
               	}
               }
// echo phpinfo();
?>
</body>
</html>
