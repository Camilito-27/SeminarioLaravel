<?php
class Producto {
    private $nombre;
    private $precioBase;
    private $iva;
    private $categoria;
    public function __construct($nombre, $precioBase, $categoria, $iva = 1.19) {
        $this->nombre = $nombre;
        $this->precioBase = $precioBase;
        $this->iva = $iva;
        $this->categoria = $categoria;
    }

    public function getPrecioFinal() {
        return $this->precioBase * $this->iva;
    }
    public function getInfo() {
        return "Producto: {$this->nombre} - Categoría: {$this->categoria} - Precio Final: $" . $this->getPrecioFinal();
    }

    public function getCategoria() {
        return $this->categoria;
    }
}
?>
