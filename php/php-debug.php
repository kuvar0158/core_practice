<!-- Simple PHP try catch example -->

try {
    // run your code here
}
catch (exception $e) {
    //code to handle the exception
}
<!-- v. imp for debug -->

exapmle-:
 try{
		$adi_fr = AdiInviterPro::GET('adi_fr', ADI_INT_VARS);
	} 
	catch(exception $e) {
		die('error');
	}

	<?php
	try {
           echo "<pre>";
           print_r($result); die;
       } catch(exception $e){
        die('error');
       }

       In controller we can use request object and call query(). For example $query = $request->query(); It retrieves all of the query string values as an associative array

For particular query use $name = $request->query('name', 'defaultName')

Default name is optional parameter if name is not present then defaultName will return

<button type="submit" name="publish" value="1" class="publish imgsubbutt btn btn-info">{{ isset($step) && $step==3 ? "Save" :"Next"}}</button>