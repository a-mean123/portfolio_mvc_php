<?php

require_once("model.php");

class ModelTestimonial extends Model{
    private $id = NULL;
    private $name;
    private $metier;
    private $message;

    protected static $table = 'testimonial';
    protected static $primary = 'id';


    public function __construct( $name = NULL,  $metier = NULL, $message = NULL)
    {
       
        if (!is_null($name) && !is_null($metier) && !is_null($message) 
       ) 
        {

            $this->name = $name;
            $this->metier = $metier;
            $this->message = $message;
            echo $this->name;

        }
    }

    
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getMetier(){
        return $this->metier;
    }
    public function getMessage(){
        return $this->message;
    }


}


?>