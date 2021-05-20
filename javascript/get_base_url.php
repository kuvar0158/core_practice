<script type="text/javascript">
	// suppose js file here in external files
	 $.ajax({
                url: base_url + 'nimda/reportmanager/summarydata/2',
                type: 'post',
                data: monthlyData,
                success: function(output) {
                    $('#tbl_sales_monthly tbody').empty();
                    var result = JSON.parse(output);
                    for (var i = 0, l = result.length; i < l; i ++) {
                        var item = result[i];
                        $('#tbl_sales_monthly tbody').append('<tr><td>'+item.period+'</td><td>$'+item.amount+'</td> <td>$'+item.payout+'</td> <td>$'+item.promos+' | '+item.pminutes+' min.</td> <td>$'+item.adjustments+' | '+item.minutes+' min.</td>');
                    }
                }
            });
</script>
<script type="text/javascript" charset="utf-8" src="<?php echo URL::base(); ?>js/nimda/reports/sales.nimda.js"></script>
<script>var base_url = "<?php echo URL::base(); ?>";</script>

reference link is here-: https://stackoverflow.com/questions/21246818/how-to-get-the-base-url-in-javascript

getCurrentURL =window.location.href; //http://localhost:2239/Default2.aspx?id=5&name=SatinderSingh
var getHostname=window.location.hostname; //localhost
var getPathName=window.location.pathname  // Default2.aspx
var getPortNo=window.location.port        // 2239
var getQueryString=window.location.search //?id=5&name=SatinderSingh



var result = JSON.parse(output);
it convert json to java script function.


alert("'.$real_domain_url.'");
