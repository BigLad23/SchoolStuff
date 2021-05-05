<?php
class Ympyra
{
    private $private;
    private $jarjestysnro;

    public function __construct($sade,$jarjestysnro)
    {
        $this->sade = $sade;
        $this->jarjestysnro = $jarjestysnro;
    }
    public function laske_piiri()
    {
        $piiri = round(2 * pi() * $this->sade);
        return $piiri;
    }
    public function laske_pinta_ala()
    {
        return pi()*$this->sade * $this->sade;
    }
    public function palauta_sade()
    {
        return $this->sade;
    }
    public function palauta_jarjestysnro()
    {
        return $this->jarjestysnro;
    }
}
