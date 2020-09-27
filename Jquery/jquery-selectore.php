<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>closet selectore</title>
</head>
<body class="ancestors">body (great-great-grandparent)
  <div style="width:500px;">div (great-grandparent)
    <ul>ul (second ancestor - second grandparent) 
      <ul>ul (first ancestor - first grandparent)
        <li class="listing">li (direct parent)
          <span>span</span>
        </li>
      </ul>
    </ul>   
  </div>
</body>
</html>
<script>
	$(document).ready(function(){
		$('span').closest('div').css({"border": "2px solid red"});
	});

</script>
<!-- ///Remove primary skill
    $(document).on('click','.remove_primary_skill',function(e){
      e.preventDefault(); -->
