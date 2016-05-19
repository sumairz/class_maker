<?php

include "../assets/includes/header.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../templates/javascript/');
$twig = new Twig_Environment($loader);

include "../assets/includes/twig_filters.php";

$content = array();
$content['author_name'] = "Sumair Zafar";
$content['class_name'] = "CreateFiles";
$content['class_vars_public'] = array("fileName","fileDateCreated","fileFormat","fileSize");
$content['class_vars_private'] = array("fileLength","formatAllowed","fileUploadLimit");
$content['method_names'] = array("createTextFile","createPdfFile","createDocFile","createExcelFile","createCSVFile");

$template = $twig->loadTemplate('prototype.twig');

$fileName = $content['class_name'].".js";

$myfile = fopen($fileName, "w") or die("Unable to open file!");
if($myfile)
{
    fwrite($myfile, $template->render($content));
    fclose($myfile);
}

$file_url = $fileName;
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . $fileName . "\""); 
readfile($fileName); // do the double-download-dance (dirty but worky)
exit;
//echo $template->render($content);




?>