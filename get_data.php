<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $namePlace = $_POST["nombre-lugar"];
    $descriptionPlace = $_POST["descripcion"];
    $municipioText = $_POST["municipio"];
    $informationUrl = $_POST["url-info"];
    $infoGoogle = $_POST["url-maps"];

    
    if (empty($namePlace) || empty($descriptionPlace) || empty($informationUrl) || empty($infoGoogle)) {
        $errors[] = "Todos los campos son obligatorios";
    }

  
    if (strlen($namePlace) > 20) {
        $errors[] = "El campo 'Nombre del lugar' no puede tener más de 20 caracteres";
    }

    if (strlen($descriptionPlace) > 100) {
        $errors[] = "El campo 'Descripción' no puede tener más de 100 caracteres";
    }

    if (strlen($informationUrl) > 100) {
        $errors[] = "El campo 'URL con más información' no puede tener más de 100 caracteres";
    }

    if (strlen($infoGoogle) > 100) {
        $errors[] = "El campo 'URL con enlace a Google Maps' no puede tener más de 100 caracteres";
    }

 
    if (!empty($errors)) {
        echo "<p>No se han podido registrar los datos enviados. Se han detectado los siguientes errores:</p>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
   
        $data = "$namePlace;$descriptionPlace;$municipioText;$informationUrl;$infoGoogle\n";
        $file = fopen("date_formular.csv", "a"); 
        fwrite($file, $data); 
        fclose($file); 

        echo "<p>Se van a registrar los siguientes datos:</p>";
        echo "<ul>";
        echo "<li>Nombre del lugar: $namePlace</li>";
        echo "<li>Descripción: $descriptionPlace</li>";
        echo "<li>Ciudad seleccionada: $municipioText</li>";
        echo "<li>URL con más información: $informationUrl</li>";
        echo "<li>URL con enlace a Google Maps: $infoGoogle</li>";
        echo "</ul>";

        echo '<p><a href="formular.htm">Introducir datos nuevamente</a></p>';
    }
}
?>

<a href="formular.htm">Volver al formulario</a>
