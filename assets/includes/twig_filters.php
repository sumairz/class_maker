<?php

$filter = new Twig_SimpleFilter('camelCase', 'ucwords');



$twig->addFilter($filter);


?>