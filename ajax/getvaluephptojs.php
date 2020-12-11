<?php
$desiredJobFormArrayIndex = 5;
?>
<script>
	 var formArrayIndex = '<?= $desiredJobFormArrayIndex ?>';
</script>

<!--  var from = $('#ys_from').val();
            var to = $('#ys_to').val();
            var ysType = [];

            $('.type:checked').each(function() {
                ysType.push($(this).val());
            });

            var data = {
                'from': from,
                'to': to,
                'type': ysType
            };

            $.ajax({
                url: base_url + 'nimda/reportmanager/summarydata/3',
                type: 'post',
                data: data,
                success: function(output) {
                    $('#tbl_sales_yearly tbody').empty();
                    var result = JSON.parse(output);
                    for (var i = 0, l = result.length; i < l; i ++) {
                        var item = result[i];
                        $('#tbl_sales_yearly tbody').append('<tr><td>'+item.year+'</td><td>$'+item.amount+'</td> <td>$'+item.payout+'</td> <td>$'+item.promos+' | '+item.pminutes+' min.</td> <td>$'+item.adjustments+' | '+item.minutes+' min.</td>');
                    }
                }
            });

        } -->