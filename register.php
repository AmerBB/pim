<?php session_start();

 require_once 'dbconfig.php';

 if($_POST)
 {
  $email = $_POST['email'];
 
   
 try
  { 
  
   $stmt = $db_con->prepare("SELECT * FROM newsletter WHERE email = :email");
 
   $stmt->execute(array(":email"=>$email));
 
   $count = $stmt->rowCount();

   if($count==0){
 
       $stmt = $db_con->prepare("INSERT INTO newsletter(email)  VALUES(:email)");
 
      $result = $stmt->execute(array(":email"=>$email));
        if($result)
        {  
         header("location:index.php?resultat=success");
        }
        else
        {
            header("location:index.php?resultat=error");
        }
       
       }
   else{
    
   header("location:index.php?resultat=exist");
   }
    
  }
  catch(PDOException $e){
       echo $e->getMessage();
  }
 }

?>