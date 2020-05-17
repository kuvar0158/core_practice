<!DOCTYPE html>
<html>
<head>
<link href="https://rawgit.com/jonthornton/jquery-timepicker/master/jquery.timepicker.css" rel="stylesheet"/>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://rawgit.com/jonthornton/jquery-timepicker/master/jquery.timepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js"></script>
	<title></title>
</head>
<body>
<div class="container">
  <div class='col-xs-6'>
    <div class="form-group">
      <div class='input-group date' id='startTime1'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
        </span>
      </div>
    </div>
  </div>
  <div class='col-xs-6'>
    <div class="form-group">
      <div class='input-group date' id='endTime1'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
                    <span class="glyphicon glyphicon-time"></span>
        </span>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<script>
    var $startTime1 = $('#startTime1');
var $endTime1 = $('#endTime1');

$startTime1.datetimepicker({
  format: 'LT',
  stepping: 15,
  minDate: moment().startOf('day'),
  maxDate: moment().endOf('day')
});
$endTime1.datetimepicker({
  format: 'LT',
  useCurrent: false,
  stepping: 15,
  minDate: moment().startOf('day'),
  maxDate: moment().endOf('day')
});

$startTime1.on("dp.change", function(e) {
  $endTime1.data("DateTimePicker").minDate(e.date);
});

$endTime1.on("dp.change", function(e) {
  $startTime1.data("DateTimePicker").maxDate(e.date);
});

$endTime1.on("dp.show", function(e) {
  if (!$endTime1.data("DateTimePicker").date()) {
    var defaultDate = $startTime1.data("DateTimePicker").date().add(1, 'hours');
    $endTime1.data("DateTimePicker").defaultDate(defaultDate);
  }
});

</script>