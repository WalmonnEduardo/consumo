<?php
require_once("IConsumidorEnergia.php");
class Comercial implements IConsumidorEnergia
{
    private float $consumo;

    public function getValorFatura()
    {
        if($this->consumo <= 100)
        {
            return $this->consumo*1.45;
        }
        else
        {
            $r = $this->consumo*1.45;
            $this->consumo -= 100;
            $r += $this->consumo*1.6;
            return $r;
        }
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