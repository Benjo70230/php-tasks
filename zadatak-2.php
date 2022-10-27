2. Rad sa nizovima i objektima
a) Kreirati klasu Automobil sa atributima model i
boja, koja ima konstruktor sa dva argumenta i get metode za oba atributa. Nakon toga
kreirati niz od 4 automobila (objekta).
b) Kreirati matricu Hrana sa dva podniza: voće i
povrće, a nakon toga pomoću for ili foreach petlje prikazati podatke iz matrice.


<!DOCTYPE html>
<html>

<body>
    <h1>Rad sa nizovima i objektima u PHP</h1>
    <?php
    $automobili = array("Volkswagen", "BMW", "Toyota", "Fiat", "Opel");
    var_dump($automobili);
    class Automobil
    {
        private $model = "";
        private $boja = "";
        function __construct($model, $boja)
        {
            $this->model = $model;
            $this->boja = $boja;
        }
        public function getModel()
        {
            return $this->model;
        }
        public function getBoja()
        {
            return $this->boja;
        }
    }
    // kreiranje jednog objekta, jedne instance klase
    $mojauto = new Automobil("Opel Corsa", "crvena");

    // kreiranje drugog objekta nad istom klasom
    $koleginauto = new Automobil("Mazda 3", "siva");

    // formiranje niza sa dva objekta
    $niz = array($mojauto, $koleginauto);

    //Prikaz podataka o automobilima:
    echo $mojauto->getModel() . "[" . $mojauto->getBoja() . "]" . "<br/>";
    echo $koleginauto->getModel() . "[" . $koleginauto->getBoja() . "]" .
        "<br/>";
    echo "<br/>";
    $niz[2] = new Automobil("VW Jetta", "crna");
    $niz[3] = new Automobil("Opel Astra", "siva");

    //Moze da se prikaze i preko niza:
    for ($i = 0; $i < count($niz); $i++)
        echo "Model: " . $niz[$i]->getModel() . ", boja: " .
            $niz[$i]->getBoja() . "<br/>";
    echo "<br/> <br/> Primjer matrice: ";
    $hrana =
        array(
            'voce' => array('narandza', 'banana', 'jabuka', 'kruska'),
            'povrce' => array('paradajz', 'krompir', 'luk', 'salata')
        );
    $rows = count($hrana, 0);
    $cols = (count($hrana, 1) / count($hrana, 0)) - 1;
    print "Ovdje imamo {$rows} reda i {$cols} kolone u nizu!";

    //Ispis matrice
    foreach ($hrana as $vrijednost1) {
        echo "<br/>";
        foreach ($vrijednost1 as $vrijednost2) {
            echo "$vrijednost2\n";
        }
        echo "<br/>- - - - -";
    }
    echo "<br/>";

    // rekurzivni count
    echo "Broj elemenata: " . count($hrana, COUNT_RECURSIVE);
    // izlaz je 4+1+4+1
    // normal count
    echo " Broj podnizova: " . count($hrana); // izlaz je 2
    echo "<br/><br/>";

    //Jos jedan nacin za ispisivanje matrice preko liste
    foreach ($hrana as list($a, $b, $c, $d)) {
        // $a sadrzi prvi element od ugnezdjenog niza,
        // $b sadrzi drugi element, $c treci, itd.
        echo "A: $a; B: $b; C: $c; D: $d <br/>";
    }
    ?>
</body>

</html>