<?php 
    include_once("secure.php");
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <title>ZSE PAI Edytor PHP</title>
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
<iframe id="source" style="margin-top: -100px;width: 100%;height: 111%;position: absolute;top: 0;left: 0;display:block;" allowTransparency="true" frameborder="0" scrolling="yes" src="https://openstack.by/biblioteka/w3/www.w3schools.com/php/phptryit.asp%3Ffilename=tryphp_intro.html" type= "text/javascript"></iframe>

</body>
</html>