9. Napisati skript koji definiše niz od 7 boja, za svaki dan u nedelji po jednu boju, i koji
dinamički na osnovu dana u nedelji (koji pročita iz PHP funkcije za datum) prikazuje boju
pozadine koja određuje baš taj dan. Na primjer: ponedeljak je definisan tamno plavom,
utorak svijetlo plavom, srijeda tamno zelenom, četvrtak narandžastom...


//mijenjajboju.php
<html>

<head>
    <title>Pozadinska boja</title>
</head>
<?php
$today = date("w");
$bgcolor = array(
    "#BA55D3", "#0000FF", "#00FFFF", "#228B22",
    "#FFA500", "#FFFF00", "#FF0000"
);
?>

<body bgcolor="<?php print("$bgcolor[$today]"); ?>">
    <br>Ovo je boja za danasnji dan.
</body>

</html>