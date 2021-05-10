<?php

    
$controller = 'testimonial';
      
 //   require("{$ROOT}{$DS}view{$DS}view.php");


 require_once ("{$ROOT}{$DS}model{$DS}ModelTestimonial.php"); // chargement du modèle

 if(isset($_REQUEST['action']))	
 /* recupère l'action passée dans l'URL*/
     $action = $_REQUEST['action'];
 /* NB: On a ajouté un comportement par défaut avec action=readAll.*/
     else $action="readAll";	
     
 switch ($action) {
     case "readAll":
         $pagetitle = "list des  testimonials";
         $view = "readAll";
         require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
         break;
 
     case "read":	
         if(isset($_REQUEST['id'])){
             $id = $_REQUEST['id'];
             $u = ModelTestimonial::select($id);
                 if($u!=null){
                     $pagetitle = "Details de testimonial";
                     $view = "read";
                     require ("{$ROOT}{$DS}view{$DS}view.php");
                 }
             }	
         break;
         
     case "delete":
         if(isset($_REQUEST['id'])){
             $id = $_REQUEST['id'];
             $del = ModelTestimonial::select($id);
             if($del!=null){
             $del->delete($id);
             header('Location: index.php?controller=admin&action=testimonial');
             }
         }
         break;
         

         
     case "created":

         if(isset($_REQUEST['name'])   && isset($_REQUEST['metier'])
         && isset($_REQUEST['message'])
         ){

             $name = $_REQUEST["name"];
           
             $metier = $_REQUEST["metier"];
             $message = $_REQUEST["message"];

             $id = NULL;
             echo $name;
            
                 $u = new ModelTestimonial($name, $metier, $message);	
                 $tab = array(
                    "id" => $id, 
                 "name" => $name,
                 "metier" => $metier,
                 "message" => $message,


                 );				
                 $u->insert($tab);
                 $pagetitle = "Testimonial Enregistré";
                 $view = "admin";
                 $s_view = "gestionTestimonial";
                 $controller = 'admin';

                 require ("{$ROOT}{$DS}view{$DS}view.php");
             
         }
         break;
     
     case "update":
         if(isset($_REQUEST['id'])){
             $id = $_REQUEST['id'];
             $up = ModelTestimonial::select($id);
             if($up!=null){
                 $pagetitle = "Modifier le testimonial";
                 $view = "update";
                 require ("{$ROOT}{$DS}view{$DS}view.php");			
             }
             
         }
         break;
         
     case "updated":
         if(isset($_REQUEST['id']) && isset($_REQUEST['name']) && isset($_REQUEST['metier'])
         && isset($_REQUEST['message'])){
             $oldid = $_REQUEST['id'];
             $tab = array(
                 "id" => $_REQUEST["id"],
                 "name" => $_REQUEST["name"],
                 "metier" => $_REQUEST["metier"],
                 "message" => $_REQUEST["message"],

                 );
             $o = ModelTestimonial::select($oldid);
             if($o!=null){
                 $u = $o->update($tab, $oldid);		
                 $pagetitle = "testimonial modifié";
                 $view = "updated";
                 require ("{$ROOT}{$DS}view{$DS}view.php");
             }
         }	
         break;
 }






?>