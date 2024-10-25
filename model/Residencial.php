<?php
require_once("IConsumidorEnergia.php");
class Residencial implements IConsumidorEnergia
{
    private float $consumo;

    public function getValorFatura()
    {    
            return $this->consumo*1.05;
    }
    /**
     * Get the value of consumo
     */
    public function getConsumo(): float
    {
        return $this->consumo;
    }

    /**
     * Set the value of consumo
     */
    public function setConsumo(float $consumo): self
    {
        $this->consumo = $consumo;

        return $this;
    }
}
?>