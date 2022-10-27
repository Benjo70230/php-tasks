16. Napisati PHP program za provjeru ima li osoba pravo glasa ili ne. 
Minimalna dob potrebna za glasanje je 18 godina.


<?php
//funkcija je deklarirana
function check_vote() 
{
    $name = "Rakesh";
    $age = 19;
    if ($age >= 18) {
        echo $name . ", you Are Eligible For Vote";
    } else {
        echo $name . ", you are not eligible for vote. ";
    }
}
//funkcija je pozvana
check_vote(); 

?>