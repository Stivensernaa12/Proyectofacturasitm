<?php
class Empresa {
    private string $codigo; // Código único de la empresa
    private string $nombre; // Nombre de la empresa
    private string $direccion; // Dirección de la empresa
    private string $telefono; // Teléfono de la empresa
    private string $email; // Email de la empresa

    public function __construct(string $codigo, string $nombre, string $direccion, string $telefono, string $email) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    public function getCodigo(): string {
        return $this->codigo;
    }

    public function setCodigo(string $codigo): void {
        $this->codigo = $codigo;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getDireccion(): string {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): void {
        $this->direccion = $direccion;
    }

    public function getTelefono(): string {
        return $this->telefono;
    }

    public function setTelefono(string $telefono): void {
        $this->telefono = $telefono;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): void {
        $this->email = $email;
    }
}
?>