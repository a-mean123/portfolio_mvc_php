<?php

require_once("model.php");

class ModelContact extends Model{
    private $id = NULL;
    private $name;
    private $lastname;
    private $email;
    private $budget;
    private $phone;
    private $organization;
    private $message;

    protected static $table = 'contact';
    protected static $primary = 'id';


    public function __construct( $name = NULL, $lastname = NULL , $email = NULL , $budget = NULL
    , $phone = NULL, $organization = NULL, $message = NULL)
    {
       
        if (!is_null($name) && !is_null($lastname) && !is_null($email) 
        && !is_null($budget) && !is_null($phone) && !is_null($organization)
        && !is_null($message)) 
        {

            $this->name = $name;
            $this->lastname = $lastname;
            $this->email = $email;
            $this->budget = $budget;
            $this->phone = $phone;
            $this->organization = $organization;
            $this->message = $message;

            echo $this->name;
            echo $this->lastname;
            echo $this->id;


        }
    }

    
    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getLastname(){
        return $this->lastname;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getBudget(){
        return $this->budget;
    }
    public function getPhone(){
        return $this->phone;
    }
    public function getOrganization(){
        return $this->organization;
    }
    public function getMessage(){
        return $this->message;
    }


}


?>