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
	var gender = $("#gender").val()
$("#gender").on("change", function() {
  $.ajax({
    type: "POST",
    data: {
      "gender": gender
    },
    url: "response.php",
    dataType: "JSON",
    success: function(JSONObject) {
    	// alert(JSONObject); 
    	// console.log(JSONObject);
      var peopleHTML = "";

      // Loop through Object and create peopleHTML
      for (var key in JSONObject) {
        if (JSONObject.hasOwnProperty(key)) {
          peopleHTML += "<tr>";
            peopleHTML += "<td>" + JSONObject[key]["name"] + "</td>";
            peopleHTML += "<td>" + JSONObject[key]["gender"] + "</td>";
          peopleHTML += "</tr>";
        }
      }

      // Replace table’s tbody html with peopleHTML
      $("#people tbody").html(peopleHTML);
    }
  });
});
</script>