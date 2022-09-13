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
    </head>
    <body>
        <div style="margin: 5px">
 
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
                <button style="background: rgb(117,201,33);" onClick="location.href='https://www.apachefriends.org/pl/download.html';" alt="XAMPP Download">Pobierz XAMPP</button>
            </div>
        </div>
        <br>
        <script>
		
			title("Wprowadzenie i struktura języka PHP");
				createExamples(1,'Blok instrukcji PHP',1,4);
				createExamples(1,'Blok PHP w kodzie HTML',5,5);
                createOneExercise('1.1',1);
                // createExercise(1,1,1); 

            title("Składania języka PHP");
				createExamples(2,'Komentarze',6,6);
				createExamples(2,'Zmienne',7,7);
                createOneExercise('2.1',2);
                createExamples(2,'Zmienne predefiniowane',8,8);
                createExamples(2,'Typy danych',9,11);
                createExamples(2,'Typy danych - Tablice indeksowane',12,12);
                createExamples(2,'Typy danych - Tablice asocjacyjne',13,13);	
                createExamples(2,'Typy danych - Tablice wielowymiarowe',14,14);			
                createOneExercise('2.2',3);
                createExamples(2,'Zmiana typu zmiennej - rzutowanie',15,15);			
                createOneExercise('2.3',4);
                createExamples(2,'Stałe',16,16);
                createExamples(2,'Operatory',17,17);
                createExamples(2,'Operatory inkrementacji i dekrementacji',18,18);
                createOneExercise('2.4',5);

            title("Instrukcje sterujące");
                createExamples(3,'Instrukcja warunkowa',19,19);
                createOneExercise('3.1',5);
                createOneExercise('3.2',6);
                createExample(3,'Instrukcja switch',20);
                createOneExercise('3.3',7);
                createOneExercise('3.4',8);
                createExample(3,'Operator warunkowy ',21);
                createExample(3,'Pętle - Pętla for ',22);
                createOneExercise('3.5',9);
                createExample(3,'Pętle - Pętla while ',23);
                createExample(3,'Pętle - Pętla do...while ',24);
                createExample(3,'Pętle - Pętla foreach ',25);
                createOneExercise('3.6',10);
                createOneExercise('3.7',11);
                createOneExercise('3.8',12);
                createOneExercise('3.9',13);
                createExample(3,'Instrukcja break ',26);
                createExample(3,'Instrukcja continue ',27);
                createExample(3,'Naprzemienne bloki kodu PHP i HTML',28);
                createOneExercise('3.10',14);
                createOneExercise('3.11',15);                
                createOneExercise('3.12',16);
/**
            title("Struktura języka JavaScript");
                createExamples(3,'JavaScript w HTML',1,2);
                createExamples(3,'Instrukcja document.write',3,6);

            title("Składnia języka JavaScript");
                createExamples(3,'Wprowadzenie',7,7);
                createExamples(3,'Komentarze',8,8);
                createExamples(3,'Zmienne',9,10);
                createOneExercise(3,1);
                createExamples(3,'Skalarne typy danych',11,13);
                createExamples(3,'Złożone typy danych',14,15);
                createExamples(3,'Operatory arytmetyczne',16,17);
                createExamples(3,'Operatory porównania',18,19);

            title("Instrukcje sterujące");
                createExamples(3,'Instrukcja warunkowa',20,20);
                createOneExercise(3,2);
                createExamples(3,'Instrukcja switch',21,21);
                createOneExercise(3,3);
                createExamples(3,'Pętla for',22,24);
                createExercise(3,4,5);
                createExamples(3,'Pętla while',25,25);
                createOneExercise(3,6);
                createExamples(3,'Pętla do...while',26,26);
                createExamples(3,'Instrukcja break',27,27);
                createOneExercise(3,7);
                createExamples(3,'Instrukcja continue',28,28);
                createExercise(3,8,9);

            title("Funkcje");
                createExamples(3,'Definiowanie funkcji',29,29);
                createExamples(3,'Wywołanie funkcji',30,31);
                createExamples(3,'Argumenty',32,33);
                createExamples(3,'Zasięg zmiennych',34,34);
                createExamples(3,'Zasięg blokowy',35,35);
                createExamples(3,'Funkcje wbudowane',36,41);

                createProject("sayHello");
                createProject("christmasTree");
                createProject("christmasTreeAnimate");
                createProject("calculator");
            
            title("Obiekty");
                createExamples(3,'Wprowadzenie',42,42);
                createExamples(3,'Tworzenie obiektów',43,44);
                createOneExercise(3,10);
                createExamples(3,'Tworzenie obiektów z użyciem konstruktora',45,45);
                createExamples(3,'Słowo kluczowe new',46,47);
                createOneExercise(3,11);
                createExamples(3,'Właściwość prototype',48,48);
                createOneExercise(3,12);

            title("Obiekty wbudowane języka JavaScript");
                createExamples(3,'Obiekt String',49,53);
                createExamples(3,'Obiekt Array',54,58);
                createOneExercise(3,13);
                createExample(3,'Obiekt Array - Tablice wielowymiarowe',59);
                createExample(3,'Obiekt Array - Łączenie elementów tablicy',60);  
                createExample(3,'Obiekt Array - Odwracanie kolejności elementów tablicy',61);  
                createOneExercise(3,14);
                createExamples(3,'Obiekt Array - Sortowanie',62,64);  
                createOneExercise(3,15);
                createExamples(3,'Obiekt Date',66,67);
                createOneExercise(3,16);
                
            title("Obiekty DOM");
                createExamples(3,'Obiekty DOM',68,68);
                createExamples(3,'Obiekt window',69,70);
                createExamples(3,'Obiekt navigator',71,71);
                createExamples(3,'Obiekt document',72,74);
                createOneExercise(3,17);
                createOneExercise(3,18);
                createExamples(3,'Obiekt location',75,75);
                createExamples(3,'Obiekt form',76,77);

            title("Obsługa zdarzeń");
                createExamples(3,'Obsługa zdarzeń',78,78);
                createExamples(3,'Obsługa zdarzeń w kodzie HTML',79,79);
                createExamples(3,'Obsługa zdarzenia jako właściwości obiektu',80,80);
                createExamples(3,'Zdarzenia myszy',81,83);
                //createOneExercise(3,19);

            title("Wykorzystanie skryptów na stronie internetowej");
                createExamples(3,'Animacje',84,85);
                createOneExercise(3,19);
                createOneExercise(3,20);

            
            title("Walidacja formularzy");
                createExamples(3,'Sprawdzanie wypełnienia pól formularza',86,86);
                createExamples(3,'Sprawdzanie pól po wypełnieniu formularza',87,87);
                createExamples(3,'Wyrażenia regularne',88,88);
                createExamples(3,'Zerowanie formularza',89,89);
                createOneExercise(3,21);

            title("Wprowadzenie do biblioteki jQuery");
                createExamples(3,'Dołączenie biblioteki jQuery',90,91);
                createExamples(3,'Selektory',92,94);
                createExamples(3,'Filtry selektorów',95,96);
                //createOneExercise(3,21);

            title("Zdarzenia biblioteki jQuery");
                createExamples(3,'Opis zdarzeń',97,97);
                createExamples(3,'Zdarzenia myszy',98,98);
            
            title("Zastosowanie biblioteki jQuery na stronie internetowej");
                createExamples(3,'Pokazywanie i ukrywanie treści',99,99);
                createExamples(3,'Proste animacje',100,100);
                createOneExercise(3,22);
                createExamples(3,'Zaawansowane animacje',101,103);
                createOneExercise(3,23);
                createExamples(3,'Pokaz zdjęć',104,104);
            
            title("Walidacja formularzy z użyciem jQuery");
                createExamples(3,'Walidacja formularza',105,105);
                createOneExercise(3,24);
                createExamples(3,'jQuery Validation Plugin Demo',106,106);
**/
        </script>
    </div>
    </body>
</html>