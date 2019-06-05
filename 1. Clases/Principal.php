<?php

include("Persona.php");
 
$p = new Persona(21 ,"Andrey");
$p2 = new Persona(35, "Carlos");

echo "<h2>Persona 1</h2>";
echo "Mi nombre es: " . $p->dameNombre() . "<br>";
echo "La edad es: "  . $p->dameEdad();
echo "<hr>";

echo "<h2>Persona 2</h2>";
echo "Mi nombre es: " . $p2->dameNombre() . "<br>";
echo "La edad es: "  . $p2->dameEdad();

?>

