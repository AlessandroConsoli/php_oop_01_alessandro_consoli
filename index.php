<?php


class Company {
    
    public $name;
    public $location;
    public $tot_employees = 0;
    public static $salary = 2000;
    public static $total = 0;



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


    public function calculateAnnualExpences($int){
        return $this->tot_employees * (self::$salary * $int);
    }


    public function printAnnualExpences($month = 12){
        echo "-----$this->name-----\n";
        echo "Il costo annuale dei dipendenti per l'azienda $this->name è di " . $this->calculateAnnualExpences($month) . " euro \n";
    }


    public function calculateProgressiveCost($month = 12){
        return self::$total += $this->calculateAnnualExpences($month);
    }

    public static function printCalculatedFinalTotal(){
        echo "Il totale delle spese di tutte le aziende analizzate è pari a: " . self::$total . " \n";
    }

}


$azienda1 = new Company('Peugeot', 'Piazza Dante 1 Catania,', 120);
$azienda2 = new Company('Fiat', 'Viale Mediterraneo 26 Catania,', 0);
$azienda3 = new Company('Skoda', 'Piazza Europa 6 Catania,', 80);
$azienda4 = new Company('Maserati', 'Viale Vittorio Veneto 9 Catania,', 150);
$azienda5 = new Company('Nissan', 'Corso Italia 110 Catania,', 70);


$azienda1->printAnnualExpences();
$azienda1->employeesCounter();
$azienda1->calculateProgressiveCost();

$azienda2->printAnnualExpences();
$azienda2->employeesCounter();
$azienda2->calculateProgressiveCost();

$azienda3->printAnnualExpences();
$azienda3->employeesCounter();
$azienda3->calculateProgressiveCost();

$azienda4->printAnnualExpences();
$azienda4->employeesCounter();
$azienda4->calculateProgressiveCost();

$azienda5->printAnnualExpences();
$azienda5->employeesCounter();
$azienda5->calculateProgressiveCost();

Company::printCalculatedFinalTotal();




?>