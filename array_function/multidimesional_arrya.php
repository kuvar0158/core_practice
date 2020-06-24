<!-- reference link is here 
https://www.youtube.com/watch?v=l1ksN3kREbA
-->
<!-- multidimesional array -->

<?php

$fees = [
    array('rahul', 'del', 10),
    array('sonam', 'lenvo', 40),
    array('ravi', 'lg', 50),
];
echo "<pre>";
print_r($fees); 

// output like this
// Array
// (
//     [0] => Array
//         (
//             [0] => rahul
//             [1] => del
//             [2] => 10
//         )

//     [1] => Array
//         (
//             [0] => sonam
//             [1] => lenvo
//             [2] => 40
//         )

//     [2] => Array
//         (
//             [0] => ravi
//             [1] => lg
//             [2] => 50
//         )

// )

// 2nd example
$management_depart = [];
$management_depart[0] = [
	array('it','hiteck','0178'),
	array('ex','slow','0108'),
];
$management_depart[1] = [
	array('cs','installer','0328'),
	array('civil','fast','0108'),
];
echo "<pre>";
print_r($management_depart); 

$k = 'look at here';
// 3rd  example
$notes = [
	'rahul' =>array('php' =>10, 'java'=> 14),
    'sonam' =>array('php' =>20, 'java' => 40),
    'kedar' =>array('php' =>60, 'java' => 70),
];
echo "<pre>"."<h1>here notes full ".$k."</h1>";

print_r($notes); 

echo "<pre>"."<br><h1>for sigle values ".$k."</h1>";
// here print particuler value is here
print_r($notes['rahul']);

// here print particuler value is here of rahul java course

echo "<pre>";
print_r($notes['rahul']['java']);
?>