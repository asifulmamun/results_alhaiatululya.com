<?php

// Get Result
function result_data($col_name){
  global $conn, $roll;

  $sql = "SELECT * FROM takmil_1442 WHERE `roll` = $roll";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      return $row[$col_name];
    }
  } else {

    return '0';
  }
}

// Get Result Madrasha
function result_madrasha($col_name){
  global $conn, $roll;

  $sql = "SELECT * FROM takmil_1442 WHERE `madrash_id` = $roll";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      return $row[$col_name];
    }
  } else {

    return '0';
  }
}


// // route
// function route($route){
//   $route_headers = @get_headers($route);
//   if (!$route_headers || $route_headers[0] == 'HTTP/1.1 404 Not Found') {
//     return './js/route.js';
//   } else {
//     return $route;
//   }
// }

// Divison
function division($division){
  if($division == 'Star'){
    return 'মুমতায';
  }elseif($division == '1st'){
    return 'জায়্যিদ জিদ্দান';
  }elseif($division == '2nd'){
    return 'জায়্যিদ';
  }elseif($division == '3rd'){
    return 'মাকবূল';
  }else{
    return 'রাসিব';
  }
}

// variable
$template_titile = 'Takmil Result - 1442 Hijri';
$site_title = 'আল-হাইআতুল উলয়া লিল-জামি‘আতিল কওমিয়া বাংলাদেশ';
$result_titile = 'দাওরায়ে হাদীস (তাকমীল) পরীক্ষার ফলাফল';
$result_year = '১৪৪২ হিজরী/১৪২৭ বঙ্গাব্দ/২০২১ ঈসাব্দ';
