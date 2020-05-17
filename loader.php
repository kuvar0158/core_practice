<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>
<style>
.loader 
{
 position: fixed;
 left: 0px;
 top: 0px;
 width: 100%;
 height: 100%;
 z-index: 9999;
 background: url('images/loader1.gif') 50% 50% no-repeat rgb(249,249,249);
}
</style>
</head>
<body>

<div class="loader">
</div>
<div>
This Is A Demo Of How To Display Loading Image While Page Loads
</div>
</body>
</html>