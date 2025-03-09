<?php
class ProductoPorFactura {
    private int $cantidad; // Cantidad de productos en la factura
    private float $subtotal; // Subtotal calculado (cantidad * valor unitario)
    private int $codigoFactura; // Código de la factura asociada
    private string $codigoProducto; // Código del producto asociado

    public function __construct(int $cantidad, float $subtotal, int $codigoFactura, string $codigoProducto) {
        $this->cantidad = $cantidad;
        $this->subtotal = $subtotal;
        $this->codigoFactura = $codigoFactura;
        $this->codigoProducto = $codigoProducto;
    }

    public function getCantidad(): int {
        return $this->cantidad;
    }

    public function setCantidad(int $cantidad): void {
        $this->cantidad = $cantidad;
    }

    public function getSubtotal(): float {
        return $this->subtotal;
    }

    public function setSubtotal(float $subtotal): void {
        $this->subtotal = $subtotal;
    }

    public function getCodigoFactura(): int {
        return $this->codigoFactura;
    }

    public function setCodigoFactura(int $codigoFactura): void {
        $this->codigoFactura = $codigoFactura;
    }

    public function getCodigoProducto(): string {
        return $this->codigoProducto;
    }

    public function setCodigoProducto(string $codigoProducto): void {
        $this->codigoProducto = $codigoProducto;
    }
}
?>