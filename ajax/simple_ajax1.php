<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
     $.ajax({
        url : "index1.php",
        type: 'POST',
        data : {name:'kuvar'},
        // contentType : "application/json",
        success:function(data)
        {
            if(data){ 
              alert(data);   
              //console.log("Data from Server"+JSON.stringify(data));
            }
            else{
              console.log("Data is empty");
            } 
         },
         error: function(xhr) {
            alert('Error!  Status = ' + xhr.status + " Message = " + xhr.statusText);
        }
    });
  });
});
</script>
</head>
<body>

<button>Click</button>

</body>
</html>
<!-- refernce site link
 https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_ajax_post -->