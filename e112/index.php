<!DOCTYPE HTML>
<html>
    <head>
        <title>Aktualizacja</title>
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
 * Aktualizacja danych
 * ============================================
 * 
 */

$serwer = 'localhost';
$login = 'root';
$haslo ='';
$baza = 'ksiegarnia';

$do_bazy = mysqli_connect($serwer, $login, $haslo, $baza);

if (mysqli_connect_errno()){
    echo "[ERROR] Bład połaczenia z serwerem MySQL:" . mysqli_connect_error() . "<br><br>";
    exit;

}else{

    echo "[INFO] Połaczono z serwerem baz danych . <br><br>";

?>

    <form action="index.php" method="post">
        Szukaj tytułu: <input type="text" name="find">
        <input type="submit" value="Szukaj" name="search"><br><br>
    </form>

<?php

if(isset($_POST['save'])){

    $zapytanie = mysqli_query($do_bazy,'UPDATE Film SET rezyser = "'. $_POST['producer'] .'", rok_prod = "'.$_POST['year'].'" WHERE tytul_filmu = "'.$_POST['title'].'"');

    if(!$zapytanie){
        mysqli_close();
        echo "Błąd w zapisie.<br>";
        exit;
    }else{
        echo "Zapisano.<br>";
    }
}

if(isset($_POST['find'])){
    echo "Szukam: " . $_POST['find']."<br><br>";

    $zapytanie = mysqli_query($do_bazy,'SELECT * FROM Film WHERE tytul_filmu = "'. $_POST['find'] .'"');

    $title = '';
    $producer = '';
    $year = '';

    if(!$zapytanie){
        mysqli_close();
        echo "Błąd w Wyszukiwaniu<br>";
        exit;
    }else{

        $wiersz = mysqli_fetch_array($zapytanie);

        if($wiersz != null && count($wiersz)>0){

            $title = $wiersz[0];
            $producer = $wiersz[1];
            $year = $wiersz[2];

            ?>

            <form action="index.php" method="post">
                Tytuł: <input type="text" name="title" value="<?php echo $title;?>" readonly><br>
                Rezyser: <input type="text" name="producer" value="<?php echo $producer;?>"><br>
                Rok: <input type="text" name="year" value="<?php echo $year;?>"><br><br>
                <input type="submit" value="Zapisz zmiany" name="save"><br><br>
            </form>
        
            <?php
        
        }else{
            echo "Nie znaleziono.<br>";
        }
        
    }    

}

    mysqli_close($do_bazy);
}

?>