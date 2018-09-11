<?php
// 03-manipulation-type-argument

    // exercice3.php



class Vehicule {
    private $litre;
    private $reservoir;

    public function setLitre ($litre){
        $this -> litre = $litre;
    }

    public function getLitre () {
        return $this -> litre;
    }

    public function setReservoir ($res){
        $this -> reservoir = $res;
    }

    public function getReservoir () {
        return $this -> reservoir;
    }

}


class Pompe {
    
    private $litre;

    public function setLitre($litre){
        $this -> litre = $litre;
    }

    public function getLitre(){
        return $this -> litre ;
    }

    public function donneEssence (Vehicule $v){
        // Modifier l'objet pompe ($this)

        $this -> setLitre ($this -> getLitre() - ($v->getReservoir() - $v -> getLitre()) );

        //modifier l'objet Vehicule

        $v -> setLitre ($v -> getReservoir());
        
    }


}

$vehicul = new Vehicule ;

$vehicul -> setLitre ('5');

echo 'Le vehicule contient : ' .$vehicul -> getLitre() . ' L .<br>';

$vehicul -> setReservoir ('50');

echo 'La capacité max de ce vehicule est : ' .$vehicul -> getReservoir() . ' L .<br>';

$pompe = new Pompe;

$pompe -> setLitre ('800');

echo 'le nombre de litre d\'essence a la pompe est de : ' . $pompe -> getLitre() . ' L . <br> <hr>';


$pompe -> donneEssence($vehicul);
echo 'Après ravitaillement<br>';
echo 'Le vehicule contien ' . $vehicul -> getLitre() . ' L d\'essence <br>';

echo 'La pompe contien ' . $pompe -> getLitre() . ' L d\'essence <hr>';

