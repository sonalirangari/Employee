<?php

class DBConnect{
    
    public $db;
    
    
 public function __construct() {
     try {
     $db= new mysqli("localhost","root","","student_info");
     
     $this->db=$db;
     
     }catch (Exception $exc) {
        echo 'An error occurs';
    }
 }
 
 
 public function view_all(){
     try{
     $con=$this->db;
     $query="SELECT*FROM `student`";
     $result= $con->query($query);
     return $result;   
     }catch (Exception $exc) {
            echo $exc->getMessage();
        }
        
 }
 
 
 public function add($name,$email,$contact,$address,$city,$education){
     try {
         $con= $this->db;
         $query= "INSERT INTO `student` (`name`,`email`,`contact_no`,`address`,`city`,`education`)VALUES('$name','$email','$contact','$address','$city','$education')";
         $result= $con->query($query);
         return $result;
         
     } catch (Exception $ex) {
          echo $exc->getMessage();
         
     }
 }
 
 
 public function delete($id){
     try {
         $con=$this->db;
         $query= "DELETE FROM `student` WHERE `student_id`=$id";
         $result= $con->query($query);
         return $result;
     } catch (Exception $ex) {
         echo $exc->getMessage();
         
     }
 }
 
 public function view_single($id){
     try {
         $con= $this->db;
         $query= "SELECT *FROM `student` WHERE `student_id`=$id ";  
         $result= $con->query($query);
         return $result;
         
     } catch (Exception $ex) {
         echo $exc->getMessage();
     }
 }
    
}
