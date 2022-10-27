10. Registrovanje korisnika na forumu
Napraviti formular za registrovanje korisnika na studentskom forumu koji će sadržati polja
za ime, telefon, e-mail adresu i potvrdu e-mail adrese. Kada korisnik unese e-mail koji nije u
formatu: ime@domen treba da se ispiše poruka da je pogrešan unos e-maila. Ako korisnik
ne unese potvrdu e-maila treba da se ispiše da je pogrešno potvrđen e-mail. Kada korisnik
potvrdi e-mail, ispisuje se poruka da će šifra korisniku ime stići na e-mail ime@domen.

//registrovanje.html
<!DOCTYPE html>
<html>

<head>
    <title>Provjera lozinke</title>
</head>
<h1>Otvaranje naloga za studentski forum</h1>
<form action="potvrda.php" method=post>
    <table border=0>
        <tr>
            <td width=250 align=center>Ime i prezime</td>
            <td width=150 align=left><input type="text" name="ime"></td>
        </tr>
        <tr>
            <td width=250 align=center>Mobilni</td>
            <td width=150 align=left><input type="text" name="mob"></td>
        </tr>
        <tr>
            <td width=250 align=center>Unesite e-mail adresu</td>
            <td width=150 align=left><input type="text" name="email1"></td>
        </tr>
        <tr>
            <td width=250 align=center>Potvrdite vasu e-mail adresu</td>
            <td width=150 align=left><input type="text" name="email2"></td>
        </tr>
        <tr>
            <td colspan=2 align=center>
                <input type=submit value="Registruj me">
            </td>
        </tr>
    </table>
</form>
</body>

</html>


//potvrda.php
<?php
// pravljenje kratkih imena
$ime = $_POST['ime'];
$mob = $_POST['mob'];
$email1 = $_POST['email1'];
$email2 = $_POST['email2'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT']; //ovo mora da postoji
$uporedi = strcmp($email1, $email2);
$email_niz = explode('@', $email1);
$brojac = count($email_niz);
if (strlen($email_niz[1]) == 0)
    echo 'Niste lijepo unijeli e-mail adresu!!! Pokusajte ponovo.';
else if ($uporedi != 0)
    echo 'Niste potvrdili mail adresu, pokusajte ponovo registraciju.';
else {
    echo 'Uspesna registracija naloga: ' . $email_niz[0] .
        '<br/> Sifra za forum ce uskoro stici na vas mail: ' . $email2;
}
?>