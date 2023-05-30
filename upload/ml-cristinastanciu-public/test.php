<?php

echo "<table border='1'><tr><th>Nombre</th><th>Descripcion</th></tr>";

//Read the file line to line
$myfile = fopen("places.csv", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    $line = fgets($myfile);
    //Separate the content of every line of the file
    $array_line = explode(";",$line);  
    echo "<tr><td>".$array_line[0]."</td><td>".$array_line[1]."</td></tr>";
}
fclose($myfile);

echo "</table>";


?>