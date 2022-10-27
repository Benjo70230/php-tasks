8. Četrnaest evropskih zemalja učestvovaće na takmičenju za pijesmu Evrovizije 2033. godine.
Niz PNG fajlova sadrži zastavu svake zemlje učesnice. Napisati PHP skriptu koja će
slučajnim izborom rasporediti 14 zastava iz datog niza u dvije polufinalne večeri (u prvom
redu prikazati zemlje koje učestvuju u prvom polufinalu, a u drugom redu prikazati zemlje
koje učestvuju u drugom polufinalu).

//zastave.php
<?php
$slike = array(
    'bosnia.png', 'croatia.png', 'denmark.png', 'france.png',
    'germany.png', 'greece.png', 'italy.png', 'macedonia.png',
    'montenegro.png', 'romania.png', 'serbia.png', 'spain.png',
    'sweden.png', 'uk.png'
);
shuffle($slike); //funkcija koja izmijesa zastave u nizu slike
?>
<html>

<head>
    <title>Eurosong</title>
</head>

<body>
    <center>
        <h1>Eurosong</h1>
        <table width="100%" cellspacing="3" cellpadding="3">
            <tr>
                <?php
                for ($i = 0; $i < count($slike) / 2; $i++) {
                    echo '<td align="center"><img src="';
                    echo $slike[$i];
                    echo '"width="140"></td>';
                }
                ?>
            </tr>
            <tr>
                <?php
                for ($i = count($slike) / 2; $i < count($slike); $i++) {
                    echo '<td align="center"><img src="';
                    echo $slike[$i];
                    echo '"width="140"></td>';
                }
                ?>
            </tr>
        </table>
    </center>
</body>

</html>