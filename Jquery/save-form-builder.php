<!DOCTYPE html>
<html>
<head>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="http://formbuilder.online/assets/js/form-builder.min.js"></script>
  <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
	<title>form show to users</title>
</head>
<body>
	<form id="fb-render">
	</form>
	<button type="button" id="get-user-data">Get Updated formData</button>
</body>
</html>
<script>
	const getUserDataBtn = document.getElementById("get-user-data");
	const fbRender = document.getElementById("fb-render");

	const originalFormData = [{
    "type": "text",
    "required": true,
    "label": "Name",
    "placeholder": "name",
    "className": "form-control",
    "name": "text-1594898843033",
    "access": false,
    "subtype": "text"
  },
  {
    "type": "textarea",
    "required": true,
    "label": "Address",
    "placeholder": "address",
    "className": "form-control",
    "name": "textarea-1594898865273",
    "access": false,
    "subtype": "textarea",
    "rows": 3
  },
  {
    "type": "radio-group",
    "required": false,
    "label": "Radio Group",
    "inline": false,
    "name": "radio-group-1594898898697",
    "access": false,
    "other": false,
    "values": [
      {
        "label": "Male",
        "value": "1"
      },
      {
        "label": "Female",
        "value": "2",
        "selected": true
      }
    ]
  },
  {
    "type": "button",
    "label": "Save",
    "subtype": "submit",
    "className": "btn-default btn",
    "name": "button-1594898945513",
    "access": false,
    "style": "default"
  }];
  jQuery(function($) {
  const formData = JSON.stringify(originalFormData);

  $(fbRender).formRender({ formData });
  getUserDataBtn.addEventListener(
    "click",
    () => {
      // window.alert(window.JSON.stringify($(fbRender).formRender("userData")));
      console.log(window.JSON.stringify($(fbRender).formRender("userData")))
     var data =  window.JSON.stringify($(fbRender).formRender("userData"))
     alert(data);
    },
    false
  );
});
</script>
<script>
	$('#fb-render').on('submit', function (e) {
	  e.preventDefault();
	// Collect form data
	  var formData = $(this).serialize();
	// Send data to server
	  $.post('save-form.php', formData)
	      .done(function (res) {
	      	alert(res)
	        console.log('form saved')
	      }).fail(function (jqXHR) {
	    console.log('form was not saved')
	  });
	  // Prevent form submission here
	  return false;
	});
</script>
