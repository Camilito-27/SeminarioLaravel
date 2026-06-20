<?php

function esMayorDeEdad($edad) {
    return $edad >= 18;
}
$edades = [12, 25, 17, 30, 15];

echo "<h2>Verificación de edades</h2>";

foreach ($edades as $edad) {

    if (esMayorDeEdad($edad)) {
        echo "<p>La persona con edad $edad es MAYOR de edad.</p>";
    } else {
        echo "<p>La persona con edad $edad es MENOR de edad.</p>";
    }

}

?>