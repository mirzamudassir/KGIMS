<?php 
require_once '../initialize.php';
if(isset($_POST['login'])){
/**
* Validation
*
* @category   Login Script
* @package    KGIMS - CS619
* @version    1.0.0
* @since      Available since Release 1.0
*/
$link= database_conn();
        // retrieve the values submitted via the form
    $username = stripslashes($_POST['username']);
    $pwd = stripslashes($_POST['pwd']);

    try{  
            $query= "SELECT * FROM `user_accounts` WHERE username= '$username'";
                $result= $link->query($query);
                if($result){
                while($row= $result->fetch_assoc()){

                $user= $row['username'];
                $user_pwd= $row['password_hash'];
                $full_name= $row['full_name'];
                $status= $row['user_status'];
                
        
          $pwd_verify= password_verify($pwd, $user_pwd);
          if($pwd_verify==TRUE){
            // successful login
          after_successful_login($full_name);
          redirect_to('http://localhost/project/public/dashboard');
          }

          else{
            redirect_to('http://localhost/project/public/index');
          }


        } 
      }

      else{
        // failed login
        $_SESSION['notifStatus']= "LOGIN FAILED";
        redirect_to('http://localhost/project/public/index');
      }

    }
      catch(Exception $e){
          echo 'ERROR: ' .$e->getMessage();
      }

    }
  
    

?>