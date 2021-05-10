
<?php

    
require_once("{$ROOT}{$DS}model{$DS}modelProjet.php");




if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des Projet";
        $view = "readAllProjet";
       	$tab_p = ModelProjet::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelProjet::select($id);
				if($u!=null){
					$pagetitle = "Details de l'utilisateur";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$del = ModelProjet::select($id);
			if($del!=null){
			$del->delete($id);
			header('Location: index.php?controller=admin&action=projet');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Ajouter un projet";
		$view = "createProjet";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
        if(isset($_REQUEST['titre']) && isset($_REQUEST['description'])
          && isset($_REQUEST['lien'])){
			
			$image=$_FILES['image']['name']; 
			$expimage=explode('.',$image);
			$imageexptype=$expimage[1];
			date_default_timezone_set('Australia/Melbourne');
			$date = date('m/d/Yh:i:sa', time());
			$rand=rand(10000,99999);
			$encname=$date.$rand;
			$imagename=md5($encname).'.'.$imageexptype;
			$imagepath="assets/images/".$imagename;
			move_uploaded_file($_FILES["image"]["tmp_name"],$imagepath);
			
			
			
			
			$titre = $_REQUEST["titre"];
			$description = $_REQUEST["description"];
            $image = $imagename;
			$lien = $_REQUEST["lien"];
            
			$id = NULL;









			
				$u = new ModelProjet($titre, $description, $image, $lien);	
				$tab = array(
					"id" => $id,    
				"titre" => $titre,
				"description" => $description,
                "image" => $image,
                "lien" => $lien
				);				
				$u->insert($tab);
			
				header('Location: index.php?controller=admin&action=projet');
			
		}
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$up = ModelProjet::select($id);
			if($up!=null){
				$pagetitle = "Modifier le projet";
				$view = "updateProjet";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
        if(isset($_REQUEST['id']) && isset($_REQUEST['titre'])
         && isset($_REQUEST['description']) && isset($_REQUEST['image'])
         && isset($_REQUEST['lien'])){
			$id = $_REQUEST['id'];
			$tab = array(
   			 "id" => $_REQUEST["ncin"],
   			 "titre" => $_REQUEST["titre"],
                "description" => $_REQUEST["description"],
                "image" => $_REQUEST["image"],
   			 "lien" => $_REQUEST["lien"]
   			 );
			$o = ModelProjet::select($id);
			if($o!=null){
				$u = $o->update($tab, $id);		
				$pagetitle = "Projet modifié";
				$view = "updatedProjet";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;




}



 
?>