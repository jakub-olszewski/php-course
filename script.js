window.onresize = doALoadOfStuff;

var exerciseCounter = 1;
var numberTitle = 1;

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
    document.write("<h3 name='title' onclick='showHideTitle("+numberTitle+")'>"+title+"</h3><div style='display:none' id='title-"+numberTitle+"'>");
    numberTitle++;
}

function updateCookie(name,value){
    document.cookie = name + '=' + value;
}


function showHideTitle(number){
    hideAllTitle();
    var x = document.getElementById('title-'+number);
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
    updateCookie('title-number',number);
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function clickActiveTitle(){
    if(getCookie('title-number')!=null){
        showHideTitle(getCookie('title-number'));
    }
}



function hideAllTitle(){
    var length = document.getElementsByName("title").length;
    for(var i=1 ; i < length+1; i++){

        var x = document.getElementById('title-'+i);
        // if (x.style.display === "none") {
            // x.style.display = "block";
        // } else {
            x.style.display = "none";
        // }

    }
}



function end(){
    document.write("</div>");
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
        var url = "x"+getZeros(countZeros)+exerciseCounter+"/index.php";
        var className = 'collapsible-todo';
        document.write("<div id='task-"+exerciseCounter+"' class='"+className+"'><a href='"+url+"?number="+title+"'><i>Ćwiczenie "+title+"</i></a></div>");
        exerciseExist(url,exerciseCounter);
        exerciseCounter++;
    }
}

function exerciseExist(url,exerciseCounter){
    var taskElement = document.getElementById("task-"+exerciseCounter);
    var request = new XMLHttpRequest();  
    request.open('GET', url, true);
    request.onreadystatechange = function(){
        if (request.readyState === 4){
            if (request.status === 404) {  
                taskElement.classList.add('collapsible-no-implemented');
                taskElement.classList.remove('collapsible-todo');
            }  
        }
    };
    request.send();
}

function exampleExist(url,counter){
    var taskElement = document.getElementById("example-"+counter);
    var request = new XMLHttpRequest();  
    request.open('GET', url, true);
    request.onreadystatechange = function(){
        if (request.readyState === 4){
            if (request.status === 404) {  
                taskElement.classList.add('no-implemented');
                taskElement.classList.remove('line');
                taskElement.classList.remove('color-odd');
                taskElement.classList.remove('color-even');                
            }  
        }
    };
    request.send();
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
        var sourceUrl = "e"+getZeros(countZeros)+i+"/source.php?title="+encodeURI(title);
        document.write("<div id='example-"+i+"' class=\"line color-"+colorLine+"\" ><div class=\"line-left\"><a href='e"+getZeros(countZeros)+i+"/index.php'>Przykład "+dzial+"."+i+"</a></div>"+github+"<div class=\"line-right\"><button class=\"source-button\" onclick=\"location.href='"+sourceUrl+"'\"><code>Źródło kodu</code></button></div></div>");
        exampleExist(sourceUrl,i);
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