<!DOCTYPE html>
<html>
<head>
	<title>astric indication</title>
	<style>
		

label {
  display: inline-block;
  width: 120px;
  vertical-align: top;
}

.required {
  color: red;
}
	</style>
</head>
<body>
<form>
  <div class="control">
    <label for="name">Full name<span aria-hidden="true" class="required">*</span></label><input aria-describedby="required-description" id="name" type="text" />
  </div>
  <div class="control">
    <label for="biography">Biography</label><textarea id="biography" type="text"></textarea>
  </div>
  <div class="control">
    <input type="submit" value="Register" />
  </div>
  <p aria-hidden="true" id="required-description">
    <span aria-hidden="true" class="required">*</span>Required field
  </p>
</form>
</body>
</html>