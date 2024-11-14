<?php


class Company {
    
    public $name;
    public $location;
    public $tot_employees = 0;



    public function __construct($nome, $indirizzo, $dipendenti){
        $this->name = $nome;
        $this->location = $indirizzo;
        $this->tot_employees = $dipendenti;
    }


    public function employeesCounter(){
        if ($this->tot_employees > 0) {
            echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti \n";
        }else {
            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti \n";
        }
    }


    public function annualExpences(){
        echo "Il costo annuale dei dipendenti per l'azienda $this->name è" . " " . $this->tot_employees * 2000 * 12;
    }

}


$azienda1 = new Company('Peugeot', 'Piazza Dante 1 Catania,', 120);
$azienda2 = new Company('Fiat', 'Viale Mediterraneo 26 Catania,', 0);
$azienda3 = new Company('Skoda', 'Piazza Europa 6 Catania,', 80);
$azienda4 = new Company('Maserati', 'Viale Vittorio Veneto 9 Catania,', 150);
$azienda5 = new Company('Nissan', 'Corso Italia 110 Catania,', 70);


$azienda1->employeesCounter();
$azienda1->annualExpences();




?>