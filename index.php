<?php
$language = array('HTML','CSS','Javascript','PHP');

function language($language){
sort($language);
return($language);
}
function coller($language){
  implode(' ',$language);
  return($language);
}
$bip = language($language);
$bol= coller($language);
var_dump($bip);
var_dump($bol);
?>
