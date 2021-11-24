<h2>Convert JavaScript Object to JSON String</h2>

<script>
  var JSONObject = [
    {
      "name": "Jonathan Suh",
      "gender": "male"
    },
    {
      "name": "William Philbin",
      "gender": "male"
    },
    {
      "name": "Allison McKinnery",
      "gender": "female"
    }
  ];

  var JSONString = JSON.stringify(JSONObject);
  // alert(JSONString);
  // console.log(JSONString); 
</script>

<select id="gender" name="gender">
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>

<table id="people" border="1">
  <thead>
    <th>Name</th>
    <th>Gender</th>
  </thead>
  <tbody>

  </tbody>
</table>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script>

$("#gender").on("change", function() {
var gender = $("#gender").val();
    $.ajax({
        type: "POST",
        data: {
          gender: gender
        },
        url: "response.php",
        dataType: "JSON",
        success: function(JSONObject) {
             // console.log(JSONObject.data[0].name);
            JSONObject = JSONObject.data
            // console.log(JSONObject);
            // var peopleHTML = "";
            // there is first method to get this results is here
            var html = '';
            for($i = 0; $i < JSONObject.length ; $i++){
               // console.log(JSONObject[$i]['name']);
               html += `<tr>
                           <td>${JSONObject[$i]['name']}</td>
                           <td>${JSONObject[$i]['gender']}</td>
                        </tr>`;
            } 
            $('#people tbody').html(html);
            // there is 2nd method to get this results is here
              // return false;
              // there is second method to get this results is here
              // Loop through Object and create peopleHTML
              // for (var key in JSONObject) {
              //   if (JSONObject.hasOwnProperty(key)) {
              //     peopleHTML += "<tr>";
              //       peopleHTML += "<td>" + JSONObject[key]["name"] + "</td>";
              //       peopleHTML += "<td>" + JSONObject[key]["gender"] + "</td>";
              //     peopleHTML += "</tr>";
              //   }
              // }

              // // Replace table’s tbody html with peopleHTML
              // $("#people tbody").html(peopleHTML);
        }
    });
});
</script>
<!-- <?php //else: ?>
<tr>
  <td colspan="3">No record(s)</td>
  </tr>
<?php// endif; ?> -->