window.onresize = doALoadOfStuff;

var exerciseCounter = 1;

function doALoadOfStuff() {
    console.log(window.innerWidth);
    var elements = document.getElementsByName('breakline');

    for(var i = 0; i < elements.length; i++) {
        var value = elements[i].innerHTML;

        if(window.innerWidth < 1024 && !value.startsWith('<br>')){  
            elements[i].innerHTML = '<br>' + value;
        };
        if(window.innerWidth >= 1024 && value.startsWith('<br>')){ 
            elements[i].innerHTML = value.substring(4);
        };
    };


};


/**
 * Metody 
 **/
 function urlExists(url, callback) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            callback(xhr.status < 400);
        }
    };
    xhr.open('HEAD', url);
    xhr.onerror = function() {
        alert("Zadanie należy wykonać samemu a następnie przesłać!");
        };
    xhr.send();
}

function answer() {
    urlExists('./answer/index.php', function(exists) {
        if(!exists) alert("Zadanie należy wykonać samemu a następnie przesłać!");
    });
}

function title(title){
    document.write("<h3>"+title+"</h3>");
}

function createOneExercise(dzial,startStop){
    createExercise(dzial,startStop,startStop);
}

function createOneExercise(dzial){
    createExercise(dzial,1,1);
}

function createExercise(dzial,start, stop){
    var positions = 3;
    // document.write("<br>");
    for(var i = start ; i<=stop ; i++)
    {
        //count zeros
        var countZeros = positions-String(exerciseCounter).length;
        var title = dzial;//+"."+i;
        document.write("<div class='collapsible-todo'><a href='x"+getZeros(countZeros)+exerciseCounter+"/index.php?number="+title+"'><i>Ćwiczenie "+title+"</i></a></div>");
        exerciseCounter++;
    }
}

function createProject(name){
    // document.write("<br>");
    document.write("<div class='collapsible-todo'><a href='projects/"+name+"/index.php'>Projekt "+name+"</a></div>");

}

function createExamples(dzial,title,start, stop){
    // document.write("<p>"+title+"</p>");
    document.write('<button type="button" class="collapsible">'+title+'</button>');
    var positions = 3;

    document.write('<div class="content">');
    for(var i = start ; i<=stop ; i++)
    {
        //count zeros
        var countZeros = positions-String(i).length;
        var colorLine = i%2==0?"odd":"even";
        var github = '<a href="https://github.com/jakub-olszewski/php-course/blob/main/e'+getZeros(countZeros)+i+'/index.php"><img class="github-button" src="github.png" alt="github" ></a>';

        document.write("<div class=\"line color-"+colorLine+"\" ><div class=\"line-left\"><a href='e"+getZeros(countZeros)+i+"/index.php'>Przykład "+dzial+"."+i+"</a></div>"+github+"<div class=\"line-right\"><button class=\"source-button\" onclick=\"location.href='e"+getZeros(countZeros)+i+"/source.php?title="+encodeURI(title)+"'\"><code>Źródło kodu</code></button></div></div>");
    }
    document.write('</div>');
}

function createExample(dzial,title,startStop){
    createExamples(dzial,title,startStop, startStop);
}

function getZeros(count){
    var zeros = "";
    for(var i = 0 ; i < count ; i++){
        zeros += "0";
    }
    return zeros;
}