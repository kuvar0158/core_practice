<?php

$gender = $_REQUEST['gender'];
// print_r($gender); die;


$male_person[0]['name'] = 'ravi';
$male_person[0]['gender'] = 'male';

$male_person[1]['name'] = 'sumit';
$male_person[1]['gender'] = 'male';

$male_person[2]['name'] = 'arun';
$male_person[2]['gender'] = 'male';

$male_person[3]['name'] = 'nikita';
$male_person[3]['gender'] = 'female';
$male_person[4]['name'] = 'gita';
$male_person[4]['gender'] = 'female';
$male_person[5]['name'] = 'shivani';
$male_person[5]['gender'] = 'female';


// go to differncitae with gender wise 
$onlyFemale = [];
$onlyMale = [];
foreach($male_person as $val){
    // echo $val['gender']."</br>";

    if($val['gender'] =='male'){
      array_push($onlyMale,[
        'name' =>$val['name'],
        'gender' =>$val['gender']
      ]);
    }
    if($val['gender']=='female'){
      array_push($onlyFemale,[
        'name'=> $val['name'],
        'gender' => $val['gender']
      ]);
    }
 
}

// if($gender == 'male'){
//   $persons = $onlyMale;
// } else {
//   $persons = $onlyFemale;
// }

// print_r($persons); die;

// check user is male/female

$persons = $gender=="male"?$onlyMale:$onlyFemale;

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
  $res = ['success' =>1, 'msg' =>'save Data Successfully', 'data' => $persons];
  echo json_encode($res);
  return $res;
?>

<!-- refence link-: https://jonsuh.com/blog/convert-loop-through-json-php-javascript-arrays-objects/#:~:text=Convert%20JSON%20String%20to%20PHP,the%20objects%20as%20associative%20arrays. -->