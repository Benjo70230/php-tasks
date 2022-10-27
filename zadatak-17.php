17. Napisati PHP program za provjeru je li broj pozitivan, negativan ili nula,pomoću If else uslova

<?php
// ovdje unijeti bilo koji broj po vašem izboru
$number = 324;

// uslov za pozitivne brojeve
if ($number > 0) 
{
    echo $number . "Pozitivan je broj";
    // uslov za negativne brojeve
} else if ($number < 0) 
{
    echo $number . " Negativan je broj ";
    // uslov za nulu
} else if ($number == 0) 
{
    echo "Unijeli smo nulu";
} else {
    echo " Unesite brojčanu vrijednost";
}
?>