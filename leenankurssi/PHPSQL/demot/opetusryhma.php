<?php 
class  Opetusryhma
{
    private $ryhmannimi;
    private $aloitusvuosi;
    private $oma_opettaja;
    private $opiskelijat = array();


    public function __construct($ryhmannimi,$aloitusvuosi)
    {
        $this->ryhmannimi = $ryhmannimi;
        $this->aloitusvuosi = $aloitusvuosi;
    }

    public function lisaa($opiskelija) {
            $this->opiskelijat[] = $opiskelija;
    }
    
    public function haeRyhmannimi ()
    {
        return $this->ryhmannimi; //näytä, miksi ei voi käyttää suoraa viittausta, publicin ja privaten ero
    }

    public function nimilista() {
        $nimet = array();
        foreach($this->opiskelijat as $opiskelija) {
            $nimet[] = $opiskelija->haeNimi();
        }
        return $nimet;
    }
}
?>