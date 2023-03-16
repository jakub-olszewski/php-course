<?php 
    include_once("secure.php");
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>ZSE PAI PHP</title>
        <link rel="icon" type="image/png" href="./favicon.png"/>
        <meta charset="utf-8"/>
        <meta name="author" content="Jakub Olszewski">
        <meta name="description" content="spis treści">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script src="script.js"></script>
        <script>
            window.onload = function() {
                var coll = document.getElementsByClassName("collapsible");
                var i;

                for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                    content.style.display = "none";
                    } else {
                    content.style.display = "block";
                    }
                });
                }            
            };
        </script>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6333595943822086" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="main" style="margin: 5px">
        
                <table style="text-align: left;width:100%;border: 1px solid white ">
                    <tr>
                    <th style="text-align: left;width:3%;border: 1px solid white ;"><img class="me-photo" src="me.jfif" alt="Jakub Olszewski" ></th>
                    <th>
                        <div class="line-left">
                            <h2 style="margin: 5px;">ZSE Pracownia Aplikacji Internetowych</h2>
                            <h3 style="margin: 5px;">Nauczyciel: Jakub Olszewski</h3> 
                        </div>
                    </th>
                    </tr>
                </table>
                <div class="line">
                    <div class="line-left" style="height: 30px;">
                        <button style="background: #0a73bd;" onclick="location.href='https://github.com/jakub-olszewski/php-course/archive/refs/heads/main.zip';">Pobierz wszystko</button>
                        <button style="background: #0a73bd;" onClick="window.open('editor.php','_blank');" alt="Edytor">Edytor</button>
                        <button style="background: rgb(117,201,33);" onClick="location.href='https://www.apachefriends.org/pl/download.html';" alt="XAMPP Download">Pobierz XAMPP</button>
                    </div>
                </div>
                <br>
                <script>
                
                    title("Wprowadzenie i struktura języka PHP");
                        createExamples(1,'Blok instrukcji PHP',1,4);//4
                        createExamples(1,'Blok PHP w kodzie HTML',5,5);
                        createOneExercise('1.1');
                        // createExercise(1,1,1); 
                    end();

                    title("Składania języka PHP");
                        createExamples(2,'Komentarze',6,6);
                        createExamples(2,'Zmienne',7,7);
                        createOneExercise('2.1');
                        createExamples(2,'Zmienne predefiniowane',8,8);
                        createExamples(2,'Typy danych',9,11);//3
                        createExamples(2,'Typy danych - Tablice indeksowane',12,12);
                        createExamples(2,'Typy danych - Tablice asocjacyjne',13,13);	
                        createExamples(2,'Typy danych - Tablice wielowymiarowe',14,14);			
                        createOneExercise('2.2');
                        createExamples(2,'Zmiana typu zmiennej - rzutowanie',15,15);			
                        createOneExercise('2.3');
                        createExamples(2,'Stałe',16,16);
                        createExamples(2,'Operatory',17,17);
                        createExamples(2,'Operatory inkrementacji i dekrementacji',18,18);
                        createOneExercise('2.4');
                    end();

                    title("Instrukcje sterujące");
                        createExamples(3,'Instrukcja warunkowa',19,19);
                        createOneExercise('3.1');
                        createExample(3,'Instrukcja switch',20);
                        createOneExercise('3.2');
                        createOneExercise('3.3');
                        createExample(3,'Operator warunkowy ',21);
                        createExample(3,'Pętle - Pętla for ',22);
                        createOneExercise('3.4');
                        createExample(3,'Pętle - Pętla while ',23);
                        createExample(3,'Pętle - Pętla do...while ',24);
                        createExample(3,'Pętle - Pętla foreach ',25);
                        createOneExercise('3.5');
                        createOneExercise('3.6');
                        createOneExercise('3.7');
                        createOneExercise('3.8');
                        createOneExercise('3.9');
                        createExample(3,'Instrukcja break ',26);
                        createExample(3,'Instrukcja continue ',27);
                        createExample(3,'Naprzemienne bloki kodu PHP i HTML',28);
                        createOneExercise('3.10',);
                        createOneExercise('3.11');                
                        createOneExercise('3.12');
                    end();

                    title("Funkcje");
                        createExamples(4,'Definiowanie funkcji',29,30);
                        createOneExercise('4.1');
                        createExample(4,'Zwracanie wartości przez funkcje',31);
                        createOneExercise('4.2');
                        createExample(4,'Zasięg zmiennych - Zmienne globalne',32);
                        createExamples(4,'Zasięg zmiennych - Instrukcja global',33,34);
                        createOneExercise('4.3');
                        createExample(4,'Zasięg zmiennych - Zmienne lokalne',35);
                        createExamples(4,'Zasięg zmiennych - Zmienne statyczne',36,37);
                        createExample(4,'Argumenty funkcji - przekazywane przez wartość',38);
                        createOneExercise('4.4');
                        createOneExercise('4.5');
                        createOneExercise('4.6');
                        createExample(4,'Argumenty funkcji - przekazywane przez referencję',39);
                        createOneExercise('4.7');
                        createExamples(4,'Argumenty funkcji - domyślne argumenty funkcji',40,41);
                        createOneExercise('4.8');
                    end();

                    title("Funkcje wbudowane");
                        createExample(5,'Funkcje tablic',42);
                        createExample(5,'Funkcje sortowania',43);
                        createExample(5,'Funkcja wyszukiwania',44);
                        createOneExercise('5.1');
                        createExamples(5,'Funkcja daty i czasu',45,48);
                        createOneExercise('5.2');
                        createOneExercise('5.3');
                        createOneExercise('5.4');
                        createExamples(5,'Funkcje formatowania ciągów',49,54);
                        createOneExercise('5.5');
                        createExamples(5,'Funkcje analizowania ciągów znaków',55,62);
                        createOneExercise('5.6');
                    end();

                    title("Funkcje obsługi plików");
                        createExamples(6,'Dołączanie plików',63,64);
                        createExamples(6,'Operacje na plikach',65,76);
                        createOneExercise('6.1');
                        createOneExercise('6.2');
                        createOneExercise('6.3');
                        createOneExercise('6.4');
                        createOneExercise('6.5');
                        createExamples(6,'Operacje na katalogach',77,79);
                        createOneExercise('6.6');
                        createExamples(6,'Praktyczne zastosowania operacji na plikach',80,81);
                        createOneExercise('6.7');
                        createExamples(6,'Funkcje wyjścia',82,82);

                    end();
                    title("Obsługa formularzy");
                        createExamples(7,'Formularz HTML',83,84);
                        createExamples(7,'Funkcja isSet()',85,86);
                        createExamples(7,'Funkcja empty()',87,90);
                        createOneExercise('7.1');
                        createOneExercise('7.2');
                        createExamples(7,'Przesyłanie plików na serwer',91,92);

                        
                    end();
                    title("Pliki cookies i sesje");
                        createExamples(8,'Tworzenie pliku cookies',93,93);
                        createExamples(8,'Usuwanie pliku cookies',94,94);
                        createOneExercise('8.1');
                        createExamples(8,'Zastosowanie plików cookies',95,98);
                        createOneExercise('8.2');
                        createOneExercise('8.3');
                        createExamples(8,'Sesje',99,100);
                        createExamples(8,'Praktyczne zastosowania sesji',101,105);
                        createOneExercise('8.4');
                    end();
                    title("Bazy danych w PHP 1/2 - MySQLi proceduralny");
                        createExamples(9,'Nawiązanie połączenia',106,106);
                        createExamples(9,'Kończenie połączenia',107,107);
                        createOneExercise('9.1');
                        createExamples(9,'Zapytania do bazy danych',108,110);
                        createOneExercise('9.2');
                        createOneExercise('9.3');
                        createExamples(9,'Wstawianie do bazy danych',111,111);
                        createOneExercise('9.4');
                        createExamples(9,'Aktualizowanie danych',112,112);
                        createOneExercise('9.5');
                        createExamples(9,'Usuwanie danych',113,114);
                        createOneExercise('9.6');
                    end();
                    title("Bazy danych w PHP 2/2 - MySQLi zorientowany obiektowo");
                        createExamples(9,'Nawiązanie połączenia',115,115);
                        createExamples(9,'Kończenie połączenia',116,116);
                        createOneExercise('9.7');
                        createExamples(9,'Zapytania do bazy danych',117,117);
                        createExamples(9,'Wstawianie do bazy danych',118,118);
                        createOneExercise('9.8');
                        createExamples(9,'Aktualizowanie danych',119,119);
                        createOneExercise('9.9');
                        createExamples(9,'Usuwanie danych',120,121);
                        createOneExercise('9.10');
                    end();
                    title("Biblioteka PDO");
                        createExamples(10,'Nawiązanie połączenia',122,122);
                        createExamples(10,'Kończenie połączenia',123,123);
                        createExamples(10,'Pobieranie danych',124,124);
                        createOneExercise('10.1');
                    end();
                    // title("Wprowadzenie i testy aplikacji");
                    // title("Debugowanie aplikacji");
                    // title("Komentarze");
                    // title("Tworzenie dokumentacji programu");
                    // title("Automatyczne generowanie dokumentacji użytkownika");

                    // hideAllTitle();
                    clickActiveTitle();

                </script>
        </div>

        <iframe id="source" style="width: 100%;height: 100%;position: absolute;top: 0;left: 0;display:none;" allowTransparency="true" frameborder="0" scrolling="yes" src="" type= "text/javascript"></iframe>

    </body>
</html>