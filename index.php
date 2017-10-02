<?php
$language = array('HTML','CSS','Javascript','PHP');
sort($language);
print_r($language);
$pack = implode ( ',',$language);
echo $pack;
?>
