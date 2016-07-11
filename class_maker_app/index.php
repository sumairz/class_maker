<?php
include '../assets/includes/app_constant.php';

$content = array();
$content['author_name'] = htmlspecialchars(trim($_POST['author_name']));
$content['class_name'] = htmlspecialchars(trim($_POST['class_name']));
$content['class_vars_public'] = array();
$content['class_vars_private'] = array();
$content['method_names'] = array();
$content['template_name'] = htmlspecialchars(trim($_POST['template'])).'.twig';
$content['language'] = htmlspecialchars(trim($_POST['language']));


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
foreach($class_methods_explode as $key=>$value)
{
    array_push($content['method_names'],htmlspecialchars(trim($value)));
}

require_once "../assets/libraries/Twig-1.24.0/lib/Twig/Autoloader.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../templates/javascript/');
$twig = new Twig_Environment($loader);

include "../assets/includes/twig_filters.php";

$template = $twig->loadTemplate($content['template_name']);


$fileName = $content['class_name'].".js";
$filePath = "../".USER_FILES_LOCATION."/".$fileName;

$myfile = fopen($filePath, "w") or die("Unable to open file!");
if($myfile)
{
    fwrite($myfile, $template->render($content));
    fclose($myfile);
}

$file_url = $filePath;
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"" . $fileName . "\""); 
readfile($filePath);
exit;
?>