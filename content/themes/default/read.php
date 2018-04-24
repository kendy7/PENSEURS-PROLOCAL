<?php
if(!empty($_GET['filename'])){
$file=rel_uploads_path;

    $fileName = basename($_GET['filename']);
    $filePath = $file. '/' .$fileName;
    if(!empty($fileName) && file_exists($filePath)){
        // Define headers
		header("Cache-Control: no-store");
		header("Expires: 0");
		header("Content-Type: application/pdf");
		header("Cache-Control: public");
		header('Content-Disposition: inline; filename="' . $fileName . '"');
		header("Content-Transfer-Encoding: binary");
	    header("HTTP/1.1 206 Partial Content");
		header('Accept-Ranges: bytes');   
        // Read the file
        @readfile($filePath);
        exit;
    }else{
        echo 'le fichier n exixte pas.';
    }
}

?>