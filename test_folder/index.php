<?php

include "../assets/includes/header.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../templates/javascript/');
$twig = new Twig_Environment($loader);

include "../assets/includes/twig_filters.php";

$content = array();
$content['author_name'] = "Sumair Zafar";
$content['class_name'] = "CreateFiles";
$content['class_vars'] = array("fileName","fileDateCreated","fileFormat","fileSize");

$template = $twig->loadTemplate('prototype.twig');
echo $template->render($content);


?>