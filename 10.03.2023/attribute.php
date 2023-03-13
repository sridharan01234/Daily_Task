<?php
function stringSearch($strings, $searchTerm) {
    foreach ($strings as $string) {
      if (strpos($string, $searchTerm) !== false) {
        yield $string;
      }
    }
  }
  
  $strings = array("sri", "dharan", "php", "aspire systems", "systems");
  $searchTerm = "systems";
  foreach (stringSearch($strings, $searchTerm) as $result) {
    echo $result . "<br>";
  }
  
?>