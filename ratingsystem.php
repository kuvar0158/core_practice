<!DOCTYPE html>
<html>
<head>
	<style>
		  #Heart1,#Heart2,#Heart3,#Heart4,#Heart5 { margin-top:10px; display:none; float:left; width: 43px; height: 40px; left:-130px; position: relative;opacity:.1; }
  
  #wrap { 
	 width:400px; 
	 height:43px;
	 float:left;
	 padding:5px 4px 0px 4px;
	}
	
	#saveRating{
		width:60px;
		float:left;
		cursor:pointer;
		margin:10px 4px 0px 4px;
		display:none;
	}
	#DoRating{
		width:60px;
		cursor:pointer;
		float:left;
	}
	
	.search-background {
		display: none;
		font-size: 13px;
		font-weight: bold;
		height:47px;
		position: absolute;
		padding-top:20px;
		padding-left:17px;
		-moz-border-radius: 6px; 
		-webkit-border-radius: 6px;
		-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
		-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.6);
		text-align: left;
		opacity:0.5;filter: alpha(opacity=50) ;
		text-decoration: none;
		 width:373px; 
	}
	
	.search-background {
		 background:#999999;
		color:#FFFFFF;
		text-shadow: #fff 0px 0px 20px;
	}
	
	#CurrentRating{
		float:left;
		border:solid #999 1px; padding:5px;
		-moz-border-radius: 6px; 
		-webkit-border-radius: 6px;
		margin-top:5px;
		margin-left:4px;
		margin-right:5px;
		font-weight:bolder;
		font-family:"Courier New", Courier, monospace;
		color:#ff0000;
	}
	#CurrentRating #note{
	 	font-size:12px;
	 }
	
	#CurrentRating span{
		font-weight:normal;
		color:#006699;
	}
	</style>
	<title></title>
</head>
<body>
<?php include_once('rating.php'); 
include_once('dbcon.php');?>
<input id="count" type="hidden" value="1">
<input id="width" type="hidden" value="180">
<br clear="all"><img src="mj.jpg" alt="" width="480">
<div class="search-background"><label><img src="loading.gif" alt=""></label></div>
<div id="wrap"><img id="DoRating" title="Click To Show Your Love" src="hearts.png"> <span id="Panel"></span> <img id="Heart1" src="heart.png"> <img id="Heart2" src="heart.png"> <img id="Heart3" src="heart.png"> <img id="Heart4" src="heart.png"> <img id="Heart5" src="heart.png"></div>
<img id="saveRating" title="Click To Submit Your Rating" src="a.png">
</body>
<script type="text/javascript">
	$( init );
var num =0;
function init() {
	
	$('#DoRating').click( function() {
		
		// hide curent rating
		$('#Panel').hide();
		
		num   = $("#count").val();
		var width = $("#width").val();
		
		// if you have given 5 hearts then show message
		if(num&gt;5){alert('Maximum Rating ! Please submit now.'); return false;}
		
		$('#Heart'+num).animate( {
		  left: width+'px',
		  width: '43px',
		  opacity: 1,
		  height: '40px'
		} );
		
		$("#saveRating").fadeIn('slow');
		num = parseInt(num)+parseInt(1);
		$("#count").val(num);
		
		width = parseInt(width)-parseInt(75);
		$("#width").val(width);
		 
	} );
}

$(document).ready(function() {
	
	$('#saveRating').livequery("click", function(e){
		
		vote = parseInt(num)-parseInt(1);
		
		showLoader();
		$.post("rating.php?value="+vote,{
		}, function(response){
			
			hideLoader();
			$('#saveRating').hide();
			$('#wrap').html(unescape(response));				
		});
		
	});
});

//show loading bar
function showLoader(){
	$('.search-background').fadeIn(200);
}
//hide loading bar
function hideLoader(){
	
	$('.search-background').fadeOut(200);
};

function Load()
{
	$("#count").val('1');
	$("#width").val('180');
}
</script>
</html>