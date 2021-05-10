
<?php

    
require_once("{$ROOT}{$DS}model{$DS}modelContact.php");
require_once("{$ROOT}{$DS}model{$DS}modelProjet.php");
require_once("{$ROOT}{$DS}model{$DS}modelBlog.php");
require_once("{$ROOT}{$DS}model{$DS}modelTestimonial.php");



$controller = "admin";

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="dashboard";	
	
switch ($action) {
    case "dashboard":
        $pagetitle = "Admin panel";
        $view = "admin";
        $s_view = "dashboard";
       	$tab_c = modelContact::getAll();//appel au modèle pour gerer la BD
       	$tab_p = modelProjet::getAll();//appel au modèle pour gerer la BD
       	$tab_b = modelContact::getAll();//appel au modèle pour gerer la BD
       	$tab_t = modelContact::getAll();//appel au modèle pour gerer la BD
       
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;


    case "contact":
        $pagetitle = "Admin panel";
        $view = "admin";
        $s_view = "gestionContact";
       	$tab_c = modelContact::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

        

        case "projet":
            $pagetitle = "Admin panel";
            $view = "admin";
            $s_view = "gestionProjet";
               $tab_p = modelProjet::getAll();//appel au modèle pour gerer la BD
            require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
            break;   
            
            
            case "blog":
                $pagetitle = "Admin panel";
                $view = "admin";
                $s_view = "gestionBlog";
                   $tab_b = modelBlog::getAll();//appel au modèle pour gerer la BD
                require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
                break;


                case "testimonial":
                    $pagetitle = "Admin panel";
                    $view = "admin";
                    $s_view = "gestionTestimonial";
                       $tab_t = modelTestimonial::getAll();//appel au modèle pour gerer la BD
                    require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
                    break;



                    case "createprojet":
                        $view = "admin";
                        $pagetitle = "Admin panel";
                        $s_view = "ajoutProjet";
                       require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
                        break;   


                        case "createtestimonial":
                            $view = "admin";
                            $pagetitle = "Admin panel";
                            $s_view = "ajoutTestimonial";
                           require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
                            break; 

                            case "createblog":
                                $view = "admin";
                                $pagetitle = "Admin panel";
                                $s_view = "ajoutArticle";
                               require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
                                break;   
}



 
?>