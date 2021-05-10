
<?php

    

    $pagetitle = 'Home';
    $view = 'home';
    $controller = 'home';
      

require_once("{$ROOT}{$DS}model{$DS}modelProjet.php");
require_once("{$ROOT}{$DS}model{$DS}modelBlog.php");
require_once("{$ROOT}{$DS}model{$DS}modelTestimonial.php");

$tab_p = modelProjet::getAll();
$tab_t = modelTestimonial::getAll();

    require("{$ROOT}{$DS}view{$DS}view.php");




?>