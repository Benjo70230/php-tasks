15. Napisati program u PHP-u za uklanjanje određenog elementa po vrijednosti iz niza pomoću PHP programa,i to na dva 3 načina:
a) pomoću array_search()
b) pomoću foreach()
c) pomoću array_diff()

a)
<?php
$delete_item = 'march';
// uzeti popis mjeseci u nizu
$months = array('jan', 'feb', 'march', 'april', 'may');
if (($key = array_search($delete_item, $months)) !== false) {
    unset($months[$key]);
}

// ispisati polje da vidite najnovije vrijednosti
var_dump($months);
?>

b)
<?php
$delete_item = 'april';
// uzeti popis mjeseci u nizu
$months = array('jan', 'feb', 'march', 'april', 'may'); // for april, the key is 4
foreach (array_keys($months, $delete_item) as $key) {
    unset($months[$key]);
}

// ispis niza za pregled najnovijih vrijednosti
var_dump($months);
?>

c)
<?php
$delete_item = 'april';
// uzeti popis mjeseci u nizu
$months= array('jan', 'feb', 'march', 'april', 'may');
$final_months= array_diff($months, array($delete_item));

// ispisati polje da vidite najnovije vrijednosti
var_dump($final_months);
?>