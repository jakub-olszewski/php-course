<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>ZSE-PHP Ćwiczenie <?php echo ( empty($_GET["number"]) ) ? '' : htmlspecialchars($_GET["number"]) ?></title>
        <meta charset="utf-8"/>
        <meta name="author" content="Jakub Olszewski">
        <link rel="icon" type="image/png" href="./../favicon.png"/>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <div style="margin: 50px">
            <h1>Ćwiczenie <?php echo ( empty($_GET["number"]) ) ? '' : htmlspecialchars($_GET["number"]) ?></h1>
            <p>
                Napisz skrypt, który będzie wyświetlał listę osób z grupy i usuwał wylosowaną osobę:  
                <br>Na stronie pojawi się :
                <ul>
                    <li>lista osób z grupy<code></code></li>
                    <li>wylosowana osoba<code></code></li>
                    <li>lista osób po usunięciu wylosowanej osoby<code></code></li>
                </ul>
                <br>Należy wykorzystać odpowiedni zasięg zmiennych oraz argumenty funkcji przekazywane przez referencję.<code></code>
                <br><br>Nazwy funkcji: 
                <ul>
                    <li><code>add(tablica,index,imie)</code> - dodaje osobę do tablicy</li>
                    <li><code>delete(tablica,index)</code> - usuwa osobę o danym indeksie</li>
                    <li><code>printStudents(tablica)</code> - wypisuje osoby z tablicy</li>
                </ul>
                
                <!-- <br><br>Należy użyć w wywołaniu funkcji przykładów, pojednym z każdego powyższego przypadku. -->
                <br><br>Po wykonaniu ćwiczenia należy przesłać plik <code>index.php</code>
                <br><br>Uwaga. Pomocna może okazać się funkcja <code>rand(od,do)</code> oraz <code>unset(tablica[index])</code>
                <!--<a href="https://www...">(więcej)</a> -->
            </p><code></code>
        </div>
    </body>
</html>
