1.Funkcije sa i bez argumenata
definisati:
a) funkciju koja mijenja globalnu vrijednost promjenljive,
b) funkciju koja vrši aritmetičku operaciju sabiranja dva broja,
c) funkciju koja vrši aritmetičku operaciju oduzimanja dva broja,
d) funkciju koja vrši aritmetičku operaciju množenja dva broja,
e) funkciju koja vrši aritmetičku operaciju dijeljenja dva broja.



<!DOCTYPE html>
<html>

<body>
    <h1>PHP primjer funkcija</h1>
    <?php
    $a = 5;
    $b = 6;
    // funkcija bez argumenata
    function mojafunkcija()
    {
        $a = 7; //lokalna vrijednost
        echo "Rezultat sabiranja lokalne promjenljive a i globalne b: " .
            ($a + $GLOBALS['b']);
        echo "<br/>";
    }
    mojafunkcija(); //ovdje se poziva funkcija mojafunkcija()
    echo "Rezultat sabiranja globalne promjenljive a i globalne b: " .
        ($a + $b);
    echo "<br/>";
    //funkcija sa argumentima
    function sabiranje($a, $b)
    {
        return $a + $b;
    }
    function oduzimanje($a, $b)
    {
        return $a - $b;
    }
    function mnozenje($a, $b)
    {
        return $a * $b;
    }
    function dijeljenje($a, $b)
    {
        if ($b != 0)
            return $a / $b;
        else
            return "dijeljenje sa nulom!";
    }
    $prvibroj = 20;
    $drugibroj = 6;
    echo "<br/>Prvi broj: $prvibroj Drugi broj: $drugibroj <br/>";
    echo "Rezultat sabiranja: " . sabiranje($prvibroj, $drugibroj) .
        "<br/>";
    echo "Rezultat oduzimanja: " . oduzimanje($prvibroj, $drugibroj) .
        "<br/>";
    echo "Rezultat mnozenja: " . mnozenje($prvibroj, $drugibroj) .
        "<br/>";
    echo "Rezultat dijeljenje: " . dijeljenje($prvibroj, $drugibroj) .
        "<br/>";
    ?>
</body>

</html>