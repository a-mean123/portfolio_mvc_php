









<?php


session_start();

if((!isset($_SESSION['role'])) || (empty($_SESSION['role'])))
{
		header("location: index.php?controller=login");
}

if(($_SESSION['role']==2))
{


    require ("headerAdmin.php");


$filepath = $ROOT.$DS.$controller.$DS;

$filename = "view".ucfirst($s_view).".php";


require_once($filepath.$filename);


}









?>



