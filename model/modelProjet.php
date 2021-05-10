<?php

require_once("model.php");

class ModelProjet extends Model{
    private $id= NULL;
    private $titre;
    private $description;
    private $image;
    private $lien;
   
    protected static $table = 'projet';
    protected static $primary = 'id';


    public function __construct( $titre = NULL, $description = NULL , $image = NULL , $lien = NULL)
    {
        if (!is_null($titre) && !is_null($description) && !is_null($image) && !is_null($lien)) {
            $this->titre = $titre;
            $this->description = $description;
            $this->image = $image;
            $this->lien = $lien;

           }
        
    }

    public function getId(){
        return $this->id;
    }
    public function getTitre(){
        return $this->titre;
    }
    public function getDescription(){

        return $this->description;
    }
    public function getImage(){
        return $this->image;
    }
    public function getLien(){
        return $this->lien;
    }


}


?>