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
            $r = 0;
            for($i = 0 ;$i < $this->consumo ;$i++)
            {
                if($i < 500)
                {
                    $r += 1.8;
                }
                else
                {
                    $r += 2.3;
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
