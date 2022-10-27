18. U ovom zadatku treba pronaći je li polje podskup drugog polja.Pretpostavimo da postoje dva niza,
prvi niz je velik i ima 6 vrijednosti,drugi niz je mali i ima 2 vrijednosti.
Pronaći je li drugi niz podskup prvog, što znači da bi sve vrijednosti drugog niza trebale postojati u prvom nizu.

<?php
// Definisati dva niza
$array1 = array('a', '1', '2', '3', '4');
$array2 = array('a', '3');

// presijecati/slagati vrijednosti trebaju biti jednake prvom nizu
if (array_intersect($array2, $array1) === $array2) {
    echo "Ovo je podskup";
} else {
    echo "Ovo nije podskup";
}
?>