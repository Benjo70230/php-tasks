19. Pretvorba PHP polja u niz.
Napraviti obrazac koji prihvaća ime kao i boje,nakon podnošenja, podaci obrasca bit će poslani na drugu stranicu.
Prikazati odabrane boje (kao popis) i korisničko ime.Odabir korisničkog imena i boja je obavezan.

<html>

<head>
    <title>
        array to string
    </title>
</head>

<body>
    <form action="data.php" method="post">
        Username: <input type="text" name="username" placeholder="enter name" required /><br /><br />
        Select your favourite colors:<br />
        Crvena<input type="checkbox" name="check_list[]" value="crvena" /><br />
        Plava<input type="checkbox" name="check_list[]" value="plava" /><br />
        Zelena<input type="checkbox" name="check_list[]" value="zelena" /><br />
        Zuta<input type="checkbox" name="check_list[]" value="zuta" /><br />
        Roza<input type="checkbox" name="check_list[]" value="roza" /><br />
        Crna<input type="checkbox" name="check_list[]" value="crna" /><br />
        Bijela<input type="checkbox" name="check_list[]" value="bijela" /><br /><br />
        <input type="submit" name="submit" value="Submit" /><br />
    </form>
</body>

</html>



<?php
if (isset($_POST['submit'])) {
    if (!empty($_POST['check_list'])) {
        // brojanje označenih checkboxes.
        $checked_count = count($_POST['check_list']);
        $name = $_POST['korisnicko ime'];
        echo $name . " 'najdraza boja je " . $checked_count . " option(s): <br/>";
        // Petlja za pohranu i prikaz vrijednosti pojedinačnih označenih checkbox.
        foreach ($_POST['check_list'] as $selected) {
            echo "<p>" . $selected . "</p>";
        }
    } else {
        echo "<b>Odaberi barem jednu opciju.</b>";
    }
}
