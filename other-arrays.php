<?php
  // Associative array declarations
  $fav_animals["Tom"] = "Koala"; 
  $fav_animals["Dick"] = "Wedge Tail Eagle";
  $fav_animals["Harry"] = "Great White Shark";  

  echo $fav_animals["Tom"]; // Access
  echo "<br>";

  // Multidimensional array declaration
  $people = array(
    array(
      "name" => "Jack",
      "fav_colour" => "Green",
    ),
    array(
      "name" => "Jill",
      "fav_colour" => "Pink",
    )
  );  

  echo "Jack's fav colour: " . $people[0]["fav_colour"]; // Access
?>