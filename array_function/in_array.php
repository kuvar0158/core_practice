<?php
// No need to login to view the login page!
// if(!in_array($this->request->action(), array('login', 'logout', 'passwordreset')) ) {
// }



// print_r($x); die;
 function myfun() {
 	$x = [2,3,5,9,12,16];
	if (in_array(3, $x)){
		return 'great it is found';
	} else {
        return 'not founds';
	}
}
echo myfun();
	