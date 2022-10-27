3. Rad sa stringovima i konstantama
a) Kreirati klasu Automobil sa atributima model i
boja, koja ima konstruktor sa dva argumenta i get metode za oba atributa. Nakon toga
kreirati niz od 4 automobila (objekta).
b) Kreirati matricu Hrana sa dva podniza: voće i
povrće, a nakon toga pomoću for ili foreach petlje prikazati podatke iz matrice.


<!DOCTYPE html>
<html>

<body>

    <h1>PHP primjer sa stringovima</h1>

    <?php
    echo "<h2>Stringovi</h2>";
    $naziv = "Internet";
    //funkcija koja odredjuje duzinu stringa: strlen(string)
    echo "Broj karaktera u stringu 'Internet': " . strlen($naziv);

    //izlaz: 8 karaktera
    echo "<br/>";

    //funkcija koja broji reci u stringu: str_word_count(string)
    echo "Broj reci: " . str_word_count("Elektrotehnicki fakultet u
    Sarajevu"); //izlaz: 4 reci 

    echo "<br/>";
    //funkcija koja daje obrnuti string: strrev(string)
    echo "Obrnuti redoslijed: " . strrev("ETF SARAJEVO");
    echo "<br/>";

    //funkcija koja daje poziciju podstringa u okviru stringa: 
    //strpos(string, podstring)
    echo "Rec Sarajevo u stringu ETF Sarajevo nadjena na poziciji: " .
        strpos("ETF Sarajevo", "Sarajevo");
    echo "<br/>";

    //funkcija koja mijenja jedan string sa drugim stringom: 
    //str_replace(find,replace,string)
    echo str_replace("vece", "jutro", "Dobro vece!");
    // izlaz: Dobro jutro!
    echo "<br/><br/>";
    echo "<h2>Konstante</h2>";
    //naredba za konstante define("naziv_const", "string")
    define("CESTITKA", "Zelimo vam sretnu i uspješnu novu godinu!");
    echo CESTITKA;
    echo "<br/>";

    //treci argument kod define je za case-insensitive ime
    define("CESTITKA", "elimo vam sretnu i uspješnu novu godinu!", true);
    echo CESTITKA;
    echo "<br/>";
    function mojTest()
    {
        echo CESTITKA . " Ovo je poziv konstante iz funkcije!";
    }
    mojTest();
    ?>
</body>

</html>