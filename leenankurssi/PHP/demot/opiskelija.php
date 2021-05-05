<?php
class Opiskelija
{

    private $nimi;
    private $email;
    private $puh;


    public function __construct($nimi, $email) {
        $this->nimi = $nimi;
        $this->email = $email;
    }

    public function haeNimi() {
        return $this->nimi;
    }

    public function haeEmail() {
        return $this->email;
    }
}
?>