<!DOCTYPE HTML>
<html>
    <head>
        <title>Usuwanie</title>
        <meta http-equiv= "Content-Type" content="text/html;charset-UTF-8">
        <meta chartset="UTF-8">
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>
    <body>
<?php

/**
 * ============================================
 * Usuwanie danych
 * ============================================
 * 
 */

$serwer = 'localhost';
$login = 'root';
$haslo ='';
$baza = 'ksiegarnia';

$do_bazy = new mysqli($serwer, $login, $haslo, $baza);

if ($do_bazy->connect_error){
    echo "[ERROR] Bład połaczenia z serwerem MySQL:" . $do_bazy->connect_error . "<br><br>";
    ?>
    </body>
    </html>
    <?php
    exit;
}else{
    echo "[INFO] Połaczono z serwerem baz danych . <br><br>";

?>

    <form action="index.php" method="post">
        Szukaj tytułu: <input type="text" name="find">
        <input type="submit" value="Szukaj" name="search"><br><br>
    </form>

<?php

if(isset($_POST['delete'])){

    $zapytanie = $do_bazy->query('DELETE FROM Film WHERE rezyser = "'. $_POST['producer'] .'" AND rok_prod = "'.$_POST['year'].'" AND  tytul_filmu = "'.$_POST['title'].'"');

    if(!$zapytanie){
        $do_bazy->close();
        echo "Błąd podczas usuwania.<br>";
        exit;
    }else{
        echo "Usunięto.<br>";
    }
}

if(isset($_POST['find'])){
    echo "Szukam: " . $_POST['find']."<br><br>";

    $zapytanie = 'SELECT * FROM Film WHERE tytul_filmu = "'. $_POST['find'] .'"';
    $wynik = $do_bazy->query($zapytanie);
    $title = '';
    $producer = '';
    $year = '';

    if($wynik->num_rows > 0){
        
            $wiersz = $wynik->fetch_assoc();
        if($wiersz != null){
            $title = $wiersz['Tytul_filmu'];
            $producer = $wiersz['Rezyser'];
            $year = $wiersz['Rok_prod'];

            ?>

            <form action="index.php" method="post">
                Tytuł: <input type="text" name="title" value="<?php echo $title;?>" readonly><br>
                Rezyser: <input type="text" name="producer" value="<?php echo $producer;?>" readonly><br>
                Rok: <input type="text" name="year" value="<?php echo $year;?>" readonly><br><br>
                <input type="submit" value="Usuń" name="delete" readonly><br><br>
            </form>
        
            <?php
        
        }else{
            echo "Nie znaleziono.<br>";
        }
    }else{ 
        $do_bazy->close();
        echo "Błąd w Wyszukiwaniu<br>";
        exit;
    }    
}    
    $do_bazy->close();
}


?>