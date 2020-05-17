<!DOCTYPE html>
<html>
<head>
<style>
.ancestors * { 
  display: block;
  border: 2px solid lightgrey;
  color: lightgrey;
  padding: 5px;
  margin: 15px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
  // $("span").parent().css({"color": "red", "border": "2px solid red"});
  // example of descestors
  // $('div').children('ul').children('li').children().css({"color":"red", "border": "2px solid red"});
  // example of ancestors
  $('span').parent().parent().parent().css({"color":"red", "border": "2px solid red"});
 });
</script>
</head>

<body class="ancestors">body (great-great-grandparent)
  <div style="width:500px;">div (great-grandparent)
    <ul>ul (grandparent)  
      <li class="list">li (direct parent)
        <span>span</span>
      </li>
    </ul>   
  </div>
</body>

</html>
