<?php $today =date('Y-m-d') ;
echo $today; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>date function using java script</title>
</head>
<body>
	<h3>hello</h3>
<button type="button" onclick="dateFun();">save</button>
</body>
</html>
<script>
	// here we are convert date(YYYY/MM/YY)->(2019-8-21)
	function dateFun(){
	var today = new Date();
var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTime = date+' '+time;
alert(date);
}
</script>
<!--  //last array elements get
 <script type="text/javascript">
$("input[name='attach']").each(function(){
	var files = $(this).val();
	var tmpArray = files.split("\\");
	files = tmpArray[tmpArray.length-1];   //get the last item in tmpArray 
});
</script> -->