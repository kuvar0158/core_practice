<!DOCTYPE html>
<html>
<head>
	<title>test condition</title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</head>
<body>
<?php 
  $check = 0;

  if(!empty($check)){
  	print_r('hello');
  }
  $Year = date('Y');
      print_r($Year);
 ?>
 <p>Age (In Years)
 <input type="number" name="age" id="age">
 <span id="errmsg"></span></p>
 <select name="years" id="years">
 	<option value="">select years</option>
 	 <?php 
 	 $i = 1951;
 	 for($i; $i<= $Year; $i++){
 	 	?>
 	 	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
 	<?php 	
 	 }
 	 ?>

 </select>

 <p><button type="submit" id="btn">Save</button></p>
</body>
</html>
<script>
	$('#btn').click(function(){
       // alert();
       let age = $('#age').val();
       // alert(age)
       if(age > 7 && age < 126){
       	// alert();
           $('#errmsg').html('you are enter age between 8 to 125 years old only').css('color','red');
       }
	})
</script>