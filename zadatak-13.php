13. Napisati PHP skriptu da dobijete IP adresu klijenta

<?php
//da li je IP iz dijeljenog interneta
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
}
//da li je ip iz proxyja
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
//da li je IP s udaljene adrese
else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}
echo $ip_address;
?>