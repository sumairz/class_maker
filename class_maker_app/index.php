<?php

$content = array();
$content['author_name'] = htmlspecialchars(trim($_POST['author_name']));
$content['class_name'] = htmlspecialchars(trim($_POST['class_name']));
$content['class_vars_public'] = array();
$content['class_vars_private'] = array();
$content['method_names'] = array();

$class_vars_explode = explode("\n", htmlspecialchars(trim($_POST['class_variables'])));
foreach($class_vars_explode as $key=>$value)
{
    $var = explode(" ",$value);
    if(strtolower($var[0]) == "public")
    {
        array_push($content['class_vars_public'],htmlspecialchars(trim($var[1])));
    }
    else {
        array_push($content['class_vars_private'],htmlspecialchars(trim($var[1])));
    }
}

$class_methods_explode = explode("\n", htmlspecialchars(trim($_POST['class_methods'])));
foreach($class_vars_explode as $key=>$value)
{
    array_push($content['method_names'],htmlspecialchars(trim($value)));
}

//echo "<pre>";print_r($content);echo "</pre>";
require_once "../assets/libraries/Twig-1.24.0/lib/Twig/Autoloader.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../templates/javascript/');
$twig = new Twig_Environment($loader);

include "../assets/includes/twig_filters.php";

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
header("location: ../index.php");
exit;
?>