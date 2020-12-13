<?php

//SOURCE OF HELP: https://www.w3schools.com/php/php_ajax_php.asp
// Array with names

$a[] = "Anna";
$a[] = "Amanda";
$a[] = "Brittany";
$a[] = "Brian";
$a[] = "Cindy";
$a[] = "Cinderella";
$a[] = "Claudia";
$a[] = "Chris";
$a[] = "Diana";
$a[] = "Doris";
$a[] = "Eva";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Fiona";
$a[] = "Frank";
$a[] = "Gunda";
$a[] = "Garrison";
$a[] = "Hege";
$a[] = "Harold";
$a[] = "Inga";
$a[] = "Ivanna";
$a[] = "Igor";
$a[] = "Johanna";
$a[] = "Jake";
$a[] = "Kitty";
$a[] = "Karen";
$a[] = "Leon";
$a[] = "Linda";
$a[] = "Liza";
$a[] = "Maury";
$a[] = "Michelangelo";
$a[] = "Nina";
$a[] = "Nicholas";
$a[] = "Ophelia";
$a[] = "Oren";
$a[] = "Petunia";
$a[] = "Paul";
$a[] = "Quincey";
$a[] = "Quinten";
$a[] = "Raquel";
$a[] = "Robert";
$a[] = "Ryan";
$a[] = "Steven";
$a[] = "Sunniva";
$a[] = "Taylor";
$a[] = "Tove";
$a[] = "Timothy";
$a[] = "Unni";
$a[] = "Ulysses";
$a[] = "Violet";
$a[] = "Vicky";
$a[] = "Wenche";
$a[] = "Wendy";
$a[] = "Xavier";
$a[] = "Xena";
$a[] = "Yousef";
$a[] = "Yuri";
$a[] = "Zoey";
$a[] = "Zachary";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
