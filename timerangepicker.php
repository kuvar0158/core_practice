
<!DOCTYPE html>
<html>
<head>
    <base href="https://demos.telerik.com/kendo-ui/timepicker/rangeselection">
    <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; }</style>
    <title></title>
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.common-material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2019.2.619/styles/kendo.material.mobile.min.css" />

    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2019.2.619/js/kendo.all.min.js"></script>
    

</head>
<body>
    <div id="example">
            <div class="demo-section k-content">

                <h4>Start time</h4>
                <input id="start" value="8:00 AM" style="width: 100%;" />

                <h4 style="margin-top: 2em;">End time</h4>
                <input id="end" value="8:30 AM" style="width: 100%;" />

            </div>
            <script>
                $(document).ready(function() {
                    function startChange() {
                        var startTime = start.value();

                        if (startTime) {
                            startTime = new Date(startTime);

                            end.max(startTime);

                            startTime.setMinutes(startTime.getMinutes() + this.options.interval);

                            end.min(startTime);
                            end.value(startTime);
                        }
                    }

                    //init start timepicker
                    var start = $("#start").kendoTimePicker({
                        change: startChange
                    }).data("kendoTimePicker");

                    //init end timepicker
                    var end = $("#end").kendoTimePicker().data("kendoTimePicker");

                    //define min/max range
                    start.min("8:00 AM");
                    start.max("6:00 PM");

                    //define min/max range
                    end.min("8:00 AM");
                    end.max("7:30 AM");
                });
            </script>

            <style>

            </style>
        </div>

</body>
</html>
<!-- jquery timepicker 15 minute increments -->
<!-- end time should be greater than start time in jquery validation -->
<!-- end time should not be less than start time using jquery timepicker -->
<!-- start time and end time validation in jquery with am pm -->
<!-- start time and end time validation in jquery example -->