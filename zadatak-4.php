4. Digitron
Napisat skript koji vrši aritmetičke operacije sabiranja, oduzimanja, množenja ili
dijeljenja dva broja. Brojevi treba da se unose preko forme, a rezultat izvršavanja jedne od
navedenih operacija treba da se izršava na istoj stranici na kojoj se nalazi forma


//index.php
<?php include("digitron.php"); ?>
<div id="glavni">
    <form action="<?php echo htmlentities($_SERVER["REQUEST_URI"]); ?>" method="post">
        <fieldset>
            <legend>Digitron</legend>
            <label for="br1">Prvi broj</label>
            <input type="text" id="br1" name="br1" size="8" maxlength="10" value="" />
            <label for="op">Operacija</label>
            <select name="op" id="op">
                <option value="+" selected="selected" title="Sabiranje">
                    &nbsp;+ </option>
                <option value="-" title="Oduzimanje">&nbsp;-</option>
                <option value="*" title="Mnozenje">&nbsp;x </option>
                <option value="/" title="Dijeljenje">&nbsp;/ </option>
            </select>
            <label for="br2">Drugi broj</label>
            <input type="text" id="br2" name="br2" size="8" maxlength="10" value="" />
            <input type="submit" class="button" name="glavni" value="Rezultat" />
            <?php echo $izlaz; ?>
        </fieldset>
    </form>
</div>



//digitron.php
<?php
// Pocetna vrijednost izlaza je prazan string
$izlaz = "";
if (@$_POST['glavni']) {
    $broj1 = $_POST['br1'];
    $broj2 = $_POST['br2'];
    $operacija = $_POST['op'];

    //funkcija trim(string) da ukloni blanko znakove, ukoliko postoje
    $broj1 = trim(strip_tags($broj1));
    $broj2 = trim(strip_tags($broj2));

    // Link za ponistavanje
    $resetporuka = ' <a href="' . htmlentities($_SERVER["REQUEST_URI"]) . '">
Resetuj</a>';

    // operacije uradjene pomocu IFova ali moze i pomocu Switcha 
    if ($operacija == "+") {
        $odgovor = $broj1 + $broj2;
    }
    if ($operacija == "-") {
        $odgovor = $broj1 - $broj2;
    }
    if ($operacija == "*") {
        $odgovor = $broj1 * $broj2;
        $operacija = "x";
    }
    if ($operacija == "/") {
        $odgovor = $broj1 / $broj2;
    }
    // Ako je duzina cijelih brojeva suvise velika
    if (strlen($broj1) > 10 || strlen($broj2) > 10) {
        $izlaz = ' <p class="error"><strong>Greska:</strong> 
Unijeli smo broj sa 10 i vise cifara.' . $resetporuka . '</p>';
    } else
        // Ako su prazna polja
        if (empty($broj1) || empty($broj2)) {
            $izlaz = ' <p class="error"><strong>Greska:</strong> 
Moramo unijeti vrijednosti.' . $resetporuka . '</p>';
        } else
            // Ako nisu unijeti brojevi
            if (
                !preg_match("([0-9])", $broj1) || !preg_match("([0-9])", $broj2) ||
                preg_match("([a-z])i", $broj1) || preg_match("([a-z])i", $broj2)
            ) {
                $izlaz = ' <p class="error"><strong>Greska:</strong> 
Mozemo unijeti samo brojeve.' . $resetporuka . '</p>';
            }
            // Ako je sve u redu
            else {
                $izlaz = " <p><strong>Izlaz: </strong>" . "$broj1" .
                    " $operacija " . "$broj2" . " = " . "$odgovor $resetporuka" . "</p>";
            }
}
?>