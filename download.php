<?php

if (isset($_GET['file'])) {
$file = $_GET['file'];
if (file_exists($file) && is_readable($file)) {
	// header('Content-Type: application/html');
	// header("Content-Disposition: attachment; filename=\"$file\"");
    header('Content-Type: application/octet-stream');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\"" . basename($file) . "\""); 
	readfile($file);
	}else{
        echo "Błąd pobierania !";
    }

}else{
    echo "Błąd pliku !";
}

?>
