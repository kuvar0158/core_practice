	<!DOCTYPE html>
	<html>
	<head><script src="//cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js"></script><script src="//code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="crop_images/beepPanZoom.js"></script>
		<title></title>
		<style>
			.container {
			  overflow: hidden;
			  width: 300px;
			  height: 300px;
            }
		</style>
	</head>
	<body>
	<div class="container">
  <img src="images/fb.jpg" style="width:200px;height:200px">
</div>
	</body>
	</html>
	<script>
		$(".container").beepPanZoom();

	</script>