6. Slanje podataka u web adresi korišćenjem GET parametra
Napisati skript koji ima tri linka koji vode na istu stranicu ispit.php. Svaki link treba da
prosleđuje različite podatke.
Na stranici ispit.php pročitati podatke koji su proslijeđeni kao argumenti ispit, indeks i ocijena i
odštampati ih na standardnom izlazu. Koristiti superglobalnu promenljivu $_GET.

//index.php
<!DOCTYPE html>
<html>

<body>
    <h1>PHP primjer sa GET zahtijevom</h1>
    Poziv iste PHP stranice sa razlicitim argumentima:
    <br />
    <a href="ispit.php?predmet=os4ip&indeks=2022/0123&ocijena=10">
        Test primjer 1</a>: OS4IP, 2022/0123, ocijena 10
    <br />

    <a href="ispit.php?predmet=os4ip&indeks=2022/0396&ocijena=8">
        Test primjer 2</a>: OS4IP, 2022/0396, ocijena 8
    <br />

    <a href="ispit.php?predmet=ir4pia&indeks=2022/0150&ocijena=9">
        Test primjer 3</a>: IR4PIA, 2022/0150, ocijena 9
</body>

</html>


//ispit.php
<html>

<body>
    <table border="1">
        <tr>
            <td>Ispit:</td>
            <td><?php echo $_GET['predmet']; ?> </td>
        </tr>
        <tr>
            <td>Student:</td>
            <td><?php echo $_GET['indeks']; ?> </td>
        </tr>
        <tr>
            <td>Ocijena:</td>
            <td><?php echo $_GET['ocijena']; ?> </td>
        </tr>
    </table>
</body>

</html>