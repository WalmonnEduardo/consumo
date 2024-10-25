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
            $r = 0;
            for($i = 0 ;$i < $this->consumo ;$i++)
            {
                if($i < 100)
                {
                    $r += 1.45;
                }
                else
                {
                    $r += 1.6;
                }
            }
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
