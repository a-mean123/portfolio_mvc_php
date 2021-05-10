
<?php

    
require_once("{$ROOT}{$DS}model{$DS}modelBlog.php");

$controller ='blog';


if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Notre Blog";
		$view = "readAllBlog";
		$tab_old = ModelBlog::getOld();//appel au modèle pour gerer la BD
		
       	$tab_u = ModelBlog::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelBlog::select($id);
				if($u!=null){
					$pagetitle = "Details de l'article";
					$view = "readOneBlog";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;
		
	case "delete":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$del = ModelBlog::select($id);
			if($del!=null){
			$del->delete($id);
			header('Location: index.php?controller=admin&action=blog');
			}
		}
	    break;
		
	case "create":
		$pagetitle = "Ajouter un Article";
		$view = "createBlog";
		require ("{$ROOT}{$DS}view{$DS}view.php");
		break;
		
	case "created":
        if(isset($_REQUEST['titre']) && isset($_REQUEST['description'])
        ){


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
			$date = date("Y-m-d h:i:sa", $d);
			$id = NULL;




			
				$u = new ModelBlog($titre, $description, $image, $date);	
				$tab = array(
					"id" => $id,    
				"titre" => $titre,
				"description" => $description,
                "image" => $image,
                "date" => $date
				);				
				$u->insert($tab);
				header('Location: index.php?controller=admin&action=blog');
			
		}
		break;
	
	case "update":
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$up = ModelBlog::select($id);
			if($up!=null){
				$pagetitle = "Modifier l'article";
				$view = "updateBlog";
				require ("{$ROOT}{$DS}view{$DS}view.php");			
			}
			
		}
		break;
		
	case "updated":
        if(isset($_REQUEST['id']) && isset($_REQUEST['titre'])
         && isset($_REQUEST['description']) && isset($_REQUEST['image'])
         && isset($_REQUEST['date'])){
			$id = $_REQUEST['id'];
			$tab = array(
   			 "id" => $_REQUEST["ncin"],
   			 "titre" => $_REQUEST["titre"],
                "description" => $_REQUEST["description"],
                "image" => $_REQUEST["image"],
   			 "date" => $_REQUEST["date"]
   			 );
			$o = ModelBlog::select($id);
			if($o!=null){
				$u = $o->update($tab, $id);		
				$pagetitle = "Article modifié";
				$view = "updatedBlog";
				require ("{$ROOT}{$DS}view{$DS}view.php");
			}
		}	
		break;
}



 
?>