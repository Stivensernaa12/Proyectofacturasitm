<?php
class Cliente extends Persona {
    private float $credito; // Crédito disponible del cliente
}
require_once 'Persona.php'; // Asegúrate de que la ruta sea correcta

class Cliente extends Persona {
    private float $credito; // Crédito disponible del cliente

    public function __construct(string $codigo, string $email, string $nombre, string $telefono, float $credito) {
        parent::__construct($codigo, $email, $nombre, $telefono);
        $this->credito = $credito;
    }

    public function getCredito(): float {
        return $this->credito;
    }

    public function setCredito(float $credito): void {
        $this->credito = $credito;
    }
}
?> 