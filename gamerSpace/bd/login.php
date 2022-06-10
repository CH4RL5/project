<?php
   require_once ("./conexion.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {   
      // username and password sent from form 
      
      $myemail = mysqli_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM users WHERE email = '$myemail' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1){
          
         isset($_SESSION["myemail"]);
         $_SESSION['myemail'] = $myemail;
         
         header("location: ../../Paginaprincipal.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         header("location: ../Login.php");

      }
   }
   
?>