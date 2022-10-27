7. Napraviti narudžbenicu lijekova u online apoteci
Kupac popunjava količine artikala koje želi u HTML formi na stranici apoteka.html, nakon
čega treba da potvrdi formu i da dobije na ekranu prikazan fiskalni račun (kao odgovor
servera). Potrebno je realizovati PHP skript koji prikazuje fiskalni račun, na osnovu unjetih
podataka na HTML strani. Fiskalni račun treba da sadrži slijedeće podatke:
a) datum i vrijeme kada su lijekovi naručeni (pomoću dinamičke funkcije za datum);
b) ukupnu količinu naručenih lijekova i količinu za svaku pojedinačnu stavku;
c) ukupnu cijenu računa bez poreza i sa porezom (stopa poreza je 8%);
d) “Hvala! Dođite nam ponovo!” ako nije redovni kupac

//apoteka.html
<!DOCTYPE html>
<html>

<body>
    <form action="apoteka.php" method="post">
        <table border="0">
            <tr bgcolor="#cccccc">
                <td width="150">Artikal</td>
                <td width="15">Kolicina</td>
            </tr>
            <tr>
                <td>Andol</td>
                <td align="center"> <input type="text" name="kolicina1" size="3" maxlength="3"></td>
            </tr>
            <tr>
                <td>Aspirin</td>
                <td align="center"> <input type="text" name="kolicina2" size="3" maxlength="3"></td>
            </tr>
            <tr>
                <td>Vitamin C</td>
                <td align="center"> <input type="text" name="kolicina3" size="3" maxlength="3"></td>
            </tr>
            <tr>
                <td>Kako ste saznali za nasu apoteku?</td>
                <td><select name="nadji">
                        <option value="a">Ja sam redovan kupac</option>
                        <option value="b">TV reklama</option>
                        <option value="c">Halo oglasi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Naruci">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>



//apoteka.php
<?php
// kreiranje kracih imena varijabli kao lokalnih promenljivih
$kolicina1 = $_POST['kolicina1'];
$kolicina2 = $_POST['kolicina2'];
$kolicina3 = $_POST['kolicina3'];
$nadji = $_POST['nadji'];
?>
<html>

<head>
    <title>Online apoteka</title>
</head>

<body>
    <h1>Apoteka - narudzbina</h1>
    <h2>Fiskalni racun</h2>
    <?php
    echo '<p>Roba narucena u ';
    echo date('H:i, jS F');
    echo '</p>';
    echo '<p>Porucili ste: </p>';
    $ukupno = 0;
    $ukupno = $kolicina1 + $kolicina2 + $kolicina3;
    echo 'Ukupna kolicina: ' . $ukupno . '<br />';
    if ($ukupno == 0) {
        echo 'Niste kupili nista!<br />';
    } else {
        if ($kolicina1 > 0)
            echo $kolicina1 . ' andol<br />';
        if ($kolicina2 > 0)
            echo $kolicina2 . ' aspirin<br />';
        if ($kolicina3 > 0)
            echo $kolicina3 . ' vitamin C<br />';
        echo '<br />';
    }
    $ukupna_cijena = 0.00;
    define('ANDOLCENA', 10);
    define('ASPIRINCENA', 100);
    define('VITCCENA', 25);
    $ukupna_cena = $kolicina1 * ANDOLCENA //mnozenje
        + $kolicina2 * ASPIRINCENA + $kolicina3 * VITCCENA;
    echo 'Ukupno bez poreza: ' . number_format($ukupna_cijena, 2) .
        ' dinara<br/>';
    $porez = 0.08; // porez je 8%
    $ukupna_cijena = $ukupna_cijena * (1 + $porez);
    echo 'Ukupno sa porezom: ' . number_format($ukupna_cijena, 2) .
        ' dinara<br/>';
    if ($nadji == 'a')
        echo '<p>HVALA!</p>';
    else
        echo '<p>Hvala! Dodjite nam ponovo!</p>';
    ?>
</body>

</html>