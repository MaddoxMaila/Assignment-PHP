<?php
   


   class DatabaseConnection{

   	  private $User, $Host, $Password, $Database;
   	  private $Connection;

   	  function __construct($host, $user, $password, $database){

   	  	$this->Host = $host;
   	  	$this->User = $user;
   	  	$this->Password = $password;
   	  	$this->Database = $database;

   	  }

   	  protected function Connect(){

   	  	 $this->Connection = mysqli_connect($this->Host, $this->User, $this->Password, $this->Database);

   	  	 if($this->Connection){

   	  	 	  return $this->Connection;

   	  	 }else{

   	  	 	  echo "Database Connection Failed!";
   	  	 	  exit();

   	  	 }

   	  }

   }

?>