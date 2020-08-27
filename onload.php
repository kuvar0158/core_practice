<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function hello() {
	alert();
}
hello();
</script>
</head>
<body>

<img src="img_moustiers-sainte-marie.jpg" alt="Cinqueterra" width="304" height="236">

<p><b>Note:</b> Depending on the browser, the load event may not trigger if the image is cached.</p>

</body>
</html>
<script type="text/javascript">
	window.onload = (event) => {
		console.log('page is fully loaded');
	};
</script>