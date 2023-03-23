<?php
echo "<p>";
echo("Hello - My name is AWS bot\n");
echo "</p>";

$input = readline("Would you like to play a game??? \n Type Y for yes and N for no.");
if(strtoupper($input) === "Y"){
  echo("Pick a number in your head and I, AWS bot will guess it...\n");
} else {
  echo("Fine<strong> BYE </strong>!!!");
  exit;
}
?>
