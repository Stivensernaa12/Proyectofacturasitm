<?php 
require_once 'Persona.php'; // Asegúrate de que la ruta sea correcta

class Vendedor extends Persona {
    private int $carne; // Número de carné del vendedor
    private string $direccion; // Dirección del vendedor

    public function __construct(string $codigo, string $email, string $nombre, string $telefono, int $carne, string $direccion) {
        parent::__construct($codigo, $email, $nombre, $telefono);
        $this->carne = $carne;
        $this->direccion = $direccion;
    }

    public function getCarne(): int {
        return $this->carne;
    }

    public function setCarne(int $carne): void {
        $this->carne = $carne;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }
}
?>