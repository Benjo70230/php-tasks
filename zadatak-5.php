5. Forma za slanje imena
Napisati skript koji ima formu za unos imena i dugme za potvrdu. Kada se unese ime i
pošalje forma, ime koje je unešeno kroz formu se ispisuje ispod te forme. Koristiti ćemo
superglobalne promenljive $_SERVER[‘PHP_SELF’] i $_SERVER[‘REQUEST_METHOD’]

<html>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Unesite ime: <input type="text" name="ime">
        <input type="submit" value="Pošalji">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['ime'];
        //ovdje bi moglo i $_POST['ime']
        if (empty($name)) {
            echo "Ime je prazno!";
        } else {
            echo $name;
        }
    }
    ?>
</body>

</html>