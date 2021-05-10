<?php

   require_once('connect.php');

   class Query extends DatabaseConnection{

   	private $Connection = "";
   	 function __construct(){

         parent::__construct("localhost", "root", "", "smu_funders");

         $this->Connection = $this->connect();

   	 }
   	 public function count($sql){

   	 	 return mysqli_fetch_row(mysqli_query($this->Connection,$sql))[0];

   	 }
   	 public function row($sql){

   	 	return mysqli_fetch_assoc(mysqli_query($this->Connection,$sql));

   	 }
   	 public function rows($sql){

   	 	return mysqli_query($this->Connection,$sql);

   	 }
   	 public function insert($sql){
   	 	 return mysqli_query($this->Connection,$sql) ? true : false;

   	 }

       public function update($sql){
         return mysqli_query($this->Connection, $sql) ? true : false;
       }

       public function delete($sql){
         return mysqli_query($this->Connection,$sql) ? true : false;
       }
   	 #Auxilliary Functions

   	 public function assoc($query){

   	 	 return mysqli_fetch_assoc($query);

   	 }

   }

   $query = new Query();

?>