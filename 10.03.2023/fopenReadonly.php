<?php
$filename = "readme.txt";
$handle = fopen($filename, "r");
if ($handle === false) {
  echo "Error opening file.";
} else {
  $content = "This is some content to write to the file.";
  $result = fwrite($handle, $content);
  if ($result === false) {
    echo "Error writing to file.";
  } else {
    // Write successful
    fclose($handle);
    echo "File updated successfully!";
  }
}
?>