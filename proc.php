<?php
$text = $_POST;
$fp = fopen("file.txt", "w");
fwrite($fp, $text);
fclose($fp);
?>