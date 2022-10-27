11. Music Box (prosljeđivanje checkboxova)
Napraviti formu sa checkbox-ovima gdje korisnik može da između 4 muzičke grupe ili žanra
odabere one koje sluša. Ono što sluša treba bilježiti u niz, nepoznate veličine, a kada
korisnik odabere i pritisne dugme potvrde potrebno je da se prikaže njegov izbor tj. da se
isčita iz niza. U slučaju da korisnik ništa ne odabere, treba da se ispiše da ništa nije izabrano.

<!DOCTYPE html>
<html>

<body>
    <h1>Izaberite muziku koju slusate</h1>
    <?php
    if (!isset($_POST['submit'])) {
        // prikaz forme
    ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <input type="checkbox" name="muzika[]" value="BonJ">Bon Jovi
            <input type="checkbox" name="muzika[]" value="Police">Police
            <input type="checkbox" name="muzika[]" value="Madonna">Madonna
            <input type="checkbox" name="muzika[]" value="RHCP">RHCP
            <input type="submit" name="submit" value="Izaberi">
        </form>
    <?php
    } else {
        if (isset($_POST['muzika'])) {
            echo 'Izabrali ste: <br />';
            foreach ($_POST['muzika'] as $nesto) {
                echo "<i>$nesto</i><br />";
            }
        } else {
            echo 'Nista nije izabrano';
        }
    }
    ?>
</body>

</html>