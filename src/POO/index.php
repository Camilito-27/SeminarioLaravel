<?php
require_once "Producto.php";

$prod1 = new Producto("Laptop Gamer", 1500, "Electrónica");
$prod2 = new Producto("Mouse Inalámbrico", 80, "Electrónica");
$prod3 = new Producto("Silla Ergonómica", 300, "Oficina");

echo "<h2>Catálogo POO</h2>";
echo "<ul>";
echo "<li>" . $prod1->getInfo() . "</li>";
echo "<li>" . $prod2->getInfo() . "</li>";
echo "<li>" . $prod3->getInfo() . "</li>";
echo "</ul>";
?>
