<?php

$filename = fopen("log.txt",'w+');
fwrite($filename, date("Y-m-d H:i:s"));
fwrite($filename);
echo "Arquivo criado";
?>