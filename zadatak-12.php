12. Osnovne aritmetičke operacije
Korišćenjem programskog jezika PHP prikazati osnovne aritmetičke operacije sabiranja,
oduzimanja, množenja, dijeljenja i ostatka pri dijeljenju.


<!DOCTYPE html>
<html>

<body>
    <h1>PHP primjer osnovnih aritmetickih operacija</h1>

    <?php
    //Promjenljiva se uvijek pise sa oznakom dolar ispred imena promjenljive 
    $a = 11;
    echo "Prvi sabirak: $a <br/>";

    //promjenljiva stampa vrijednost, ako je izmedju navodnika
    echo 'Prvi sabirak: $a <br/>';

    //promjenljiva ne stampa vrijednost, ako je izmedju apostrofa
    $b = 3;
    echo "Drugi sabirak: $b <br/>";
    echo "Primjer sabiranja: " . ($a + $b) . "<br/> <br/>";

    //tacka je operator konkatenacije stringova
    //HTML tagovi se izvrsavaju u stringu, 
    //jer ih browser interpretira kao HTML kod
    echo "Primjer oduzimanja: " . ($a - $b) . "<br/> <br/>";
    echo "Primjer mnozenja: " . ($a * $b) . "<br/> <br/>";
    echo "Primjer deljenja: " . ($a / $b) . "<br/>";
    echo "Primjer dijeljenja (na dvije decimale): " . round($a / $b, 2) .
        "<br/>";
    echo "Primjer dijeljenja (na cetiri decimale): " . round($a / $b, 4) .
        "<br/> <br/>";
    echo "Primjer dodavanja vrijednosti promenljive b na vrijednost promjenljive 
a koriscenjem +=<br/>";
    echo "Sada a ima novu vrijednost: " . ($a += $b) . "<br/> <br/>";
    echo "Primjer ostatka pri dijeljenju: " . ($a % $b) . "<br/> <br/>";
    $a = 5;
    $b = 0;
    $izraz = @($a / $b);
    //operator @ sluzi da uhvati gresku - dijeljenje sa nulom
    //u suprotnom bi skript ovde bio prekinut
    if ($b == 0) {
        echo "Dijelite sa nulom! Izraz $a/$b ne moze da se izvrsi <br/>";
    }
    // Komentari se mogu koristiti i kao dijelovi jedne linije u kodu
    $x = 5 /* + 15 */ + 5;
    echo "Sabiranje brojeva 5 i 5: " . $x;
    ?>
</body>

</html>