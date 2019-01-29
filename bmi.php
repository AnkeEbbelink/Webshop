<?php

class Mens {
    private $naam;
    private $lengte;
    private $gewicht;
    // private $leeftijd;

 
        public function geefmejebmi() {
        $resultaat = ($this->gewicht/ ($this->lengte * $this->lengte));
        return $resultaat;
        }
    
        public function geefmejenaam(){
        return $this->naam;
        }

        function __contruct($pnaam, $plengte, $pgewicht){
        $this->naam = $pnaam;
        $this->lengte = $plengte;
        $this->gewicht = $pgewicht;
        }

}

$m1 = new mens("piet", 1.67, 63.5);
$m2 = new mens("klaas", 1.83, 100);
$m3 = new mens("jan", 1.93, 103);

$klas = [$m1, $m2, $m3];

foreach($klas as $m){
    if ($m-> geefmejebmi()>25)
        echo "<B>" . $m->geefmejenaam() . " " . round($m->geefmejebmi(),1) . "<B><BR>";
    else
        echo $m->geefmejenaam() . " " . round($m->geefmejebmi(),1) . "<BR>";
}

?>