<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="../favicon.png"/>
		<title>ZSE PAI-PHP Source: View</title>

		<link rel="stylesheet" href="../codemirror/lib/codemirror.css">
		<link rel="stylesheet" href="../codemirror/doc/docs.css">
		<link rel="stylesheet" href="../style.css">

        <script src="../script.js"></script>
		<script type="text/javascript" src="../codemirror/addon/edit/matchbrackets.js"></script>
		<script type="text/javascript" src="../codemirror/lib/codemirror.js"></script>
		<script type="text/javascript" src="../codemirror/mode/php/php.js"></script>
		<script type="text/javascript" src="../codemirror/mode/javascript/javascript.js"></script>
		<script type="text/javascript" src="../codemirror/mode/xml/xml.js"></script>
		<script type="text/javascript" src="../codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script type="text/javascript" src="../codemirror/mode/css/css.js"></script>
		<script type="text/javascript" src="../codemirror/mode/clike/clike.js"></script>



	</head>
	<body style="overflow: hidden;">
		<script type="text/javascript">
			function closeSourceFrame()
			{
				window.top.document.getElementById("main").style.display = "block"; 
				window.top.document.getElementById("source").style.display = "none"; 
				window.top.document.document.getElementById("source").className = ""; 
			}
		</script>
		

		<h3 style="margin-left: 30px;">
			<button style="background: #0a73bd;margin-bottom: 5px;margin-right: 15px;" onclick="closeSourceFrame()">Zamknij</button>
			<button style="background: #0a73bd;margin-bottom: 5px;margin-right: 15px;" onclick="location.href='index.php';">Wykonaj</button>
			<font name="breakline" size="+2" style="margin-right: 20px;"><?php echo $_GET['title'] ?></font>
			<!-- <code name="breakline" >Plik: <?php echo getcwd(); ?>/index.php</code> -->
		</h3>

		<textarea id='editor' oninput="render()">
<?php
    echo htmlspecialchars(file_get_contents('index.php'), ENT_QUOTES);
?>
		</textarea>

		<script>
			var editor = CodeMirror.fromTextArea(document.getElementById('editor'), {
							mode: 'php',
							lineNumbers: true,
							
			});
			editor.save()
		</script>

	</body>
</html>