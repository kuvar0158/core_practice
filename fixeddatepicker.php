<link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>
<script src='jquery-3.0.0.js' type='text/javascript'></script>
<script src='jquery-ui.min.js' type='text/javascript'></script>
 
<script type='text/javascript'>
$(document).ready(function(){
 
 // Initialize Date picker 
 $("#setMin,#setMax").datepicker({
  dateFormat: "dd/mm/yy"
 });

 $('#datepicker').datepicker({
  dateFormat: "dd/mm/yy",
  maxDate:'+1m +10d',
  minDate: -10
 });
});
</script>

<div class='container'>
 Minimum : <input type='text' id='setMin' readonly ><br/>
 Maximum : <input type='text' id='setMax' readonly ><br/>
 <br/>
 Select Date : <input type='text' id="datepicker" readonly /> 
</div>