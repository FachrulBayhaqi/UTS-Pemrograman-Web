<?php  
session_start();
if(!isset($_SESSION['rid']) or !isset($_SESSION['uname'])){
   header("Location: index.php");
}
 include_once 'dbconnect.php'; 
  $sql = "DELETE FROM Bahan WHERE iid = '".$_POST["id"]."'";  
 if(mysqli_query($con, $sql))  
 {  
      echo 'Bahan telah dihapus';  
 }  
 ?>  
