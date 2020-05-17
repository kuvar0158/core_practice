<html> 

<head> 
	<style> 
		.main_body* { 
			display: block; 
			border: 2px solid green; 
			color: green; 
			padding: 5px; 
			margin: 15px; 
		} 
	</style> 
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> 
</script> 
<script> 
		$(document).ready(function() { 
			$("span").parent('li').parent('ul').parent('div').parent('.main_body').css({ 
				"color": "green", 
				"border": "2px solid green" 
			}); 
		}); 
	</script> 
</head> 

<body class="main_body"> 
<div style="width:500px;">This is the great grand parent of the selected span element.! 
<ul>This is the grand parent of the selected span element.! 
<li>This is the parent of the selected element.! 
<span>This is the selected span element.!</span> 
</li> 
</ul> 
</div> 
</body> 

</html> 