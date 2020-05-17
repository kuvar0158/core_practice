<!DOCTYPE html>
<html>
<head>
	<link href="https://rawgit.com/jonthornton/jquery-timepicker/master/jquery.timepicker.css" rel="stylesheet"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/jonthornton/jquery-timepicker/master/jquery.timepicker.min.js"></script>

	<title></title>
</head>
<body>
  <div class="col-sm-5">
    <input id="timeWithDuration" type="text" class="form-control ui-timepicker-input" name="from_time" placeholder="What time?" autocomplete="off">
</div>
<div class="col-sm-5">
    <input id="duration" type="text" class="form-control ui-timepicker-input" placeholder="Duration" autocomplete="off">
</div>
</body>
</html>
<script type="text/javascript">
	$('#timeWithDuration')
    .timepicker({ 'scrollDefaultNow': true })  
    .on('changeTime', function() {  
        var from_time = $("input[name='from_time']").val();  
        $('#duration').timepicker('option', 'minTime', from_time);
        if ($('#duration').val() && $('#duration').val() < from_time) {
            $('#duration').timepicker('setTime', from_time);
        }
    });
$('#duration').timepicker({'maxTime': '11:30pm', 'showDuration': true});
</script> 