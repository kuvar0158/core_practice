<?php

$gender = $_POST['gender'];

// echo $gender; 

// $male_person = ['ravi', 'arun', 'mahesh', 'sumit', 'kedar'];

$male_person[0]['name'] = 'ravi';
$male_person[0]['gender'] = 'male';

$male_person[1]['name'] = 'sumit';
$male_person[1]['gender'] = 'male';

$male_person[2]['name'] = 'arun';
$male_person[2]['gender'] = 'male';

// print_r($male_person); die;

$female_person[0]['name'] = 'nikita';
$female_person[0]['gender'] = 'female';
$female_person[1]['name'] = 'rohini';
$female_person[1]['gender'] = 'female';
$female_person[2]['name'] = 'gita';
$female_person[2]['gender'] = 'female';
$female_person[3]['name'] = 'shivani';
$female_person[3]['gender'] = 'female';

// Loop through query and push results into $someArray;
  // while ($row = mysqli_fetch_assoc($query)) {
  //   array_push($someArray, [
  //     'name'   => $row['name'],
  //     'gender' => $row['gender']
  //   ]);
  // }

 // Convert the Array to a JSON String and echo it
  // $someJSON = json_encode($male_person);
  // echo $someJSON;
  // echo json_encode($male_person);
  $res = ['success' =>1, 'msg' =>'save Data Successfully', 'data' => $male_person];
  echo json_encode($res);

?>

<!-- refence link-: https://jonsuh.com/blog/convert-loop-through-json-php-javascript-arrays-objects/#:~:text=Convert%20JSON%20String%20to%20PHP,the%20objects%20as%20associative%20arrays. -->