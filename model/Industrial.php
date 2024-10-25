<?php
require_once("IConsumidorEnergia.php");
class Industrial implements IConsumidorEnergia
{
    private float $consumo;

    public function getValorFatura()
    {
        if($this->consumo <= 500)
        {
            return $this->consumo*1.8;
        }
        else
        {
            $r = $this->consumo*1.8;
            $this->consumo -= 500;
            $r += $this->consumo*2.3;
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