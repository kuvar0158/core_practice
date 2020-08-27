<!-- reference link-:https://www.w3schools.com/js/js_json_php.asp -->


<h3>A common use of JSON is to read data from a web server, and display the data in a web page.
This chapter will teach you how to exchange JSON data between the client and a PHP server</h3>

<p> // Convert Array to JSON String</p>
<?php
$person = ['name' => 'rajeev', 'age' => 23, 'city' => 'UK', 'address' => 'mumbai'];

$myjson = json_encode($person); 

print_r($myjson); 



// convert json to array

echo "<p> // Convert JSON to array  String</p>";
$students = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

$myarray = json_decode($students);
print_r($myarray[1]->name); 
// if you want to access data from json like that

?>