<?php 
require_once '../initialize.php';
if(isset($_POST['login'])){
/**
* Validation
*
* @category   Script
* @package    cPanel V1.0 - DreamBig
* @author     Mudassir Mirza <www.mudassirmirza.me>
* @copyright  DreamBig
* @version    1.0.0
* @since      Available since Release 1.0
*/
$link= database_conn();
        // retrieve the values submitted via the form
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    
    try{  
            $query= "SELECT * FROM `user_accounts` WHERE username= '$username'";
                $result= $link->query($query);

                while($row= $result->fetch_assoc()){

                $user= $row['username'];
                $user_pwd= $row['password'];
                $full_name= $row['full_name'];
                
        if($username==$user AND $pwd==$user_pwd)  {
            // successful login
          after_successful_login($full_name);
          redirect_to('http://localhost/project/public/dashboard');
        } else {
          // failed login
          
          redirect_to("http://localhost/project/public/index");
        }
      }
    }
      catch(Exception $e){
          echo 'ERROR: ' .$e->getMessage();
      }

      }
  
    

?>