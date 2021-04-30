<?php
/**
* Database Connection
*
* @category   Script
* @package    cPanel V1.0 - DreamBig
* @author     Mudassir Mirza <www.mirzamudassir.me>
* @copyright  DreamBig
* @version    1.0.0
* @since      Available since Release 1.0
*/

require_once('config.php');

class Database_Connection{
private $con;

public function establish_connection(){

	$this->con= mysqli_connect(server, user, pwd);
	if (!$this->con) {
		$error= "cfnb1ce@1";
		$error_id= base64_encode($error);
		redirect_to('../../../error.php?error_id=$error_id');
	}
	else{
		$select_db= mysqli_select_db($this->con, databse);
		if (!$select_db) {
			$error= "cfnb1ce@2";
			$error_id= base64_encode($error);
		redirect_to('../../../error.php?error_id=$error_id');
		}
	}

}

public function close_connection(){

	if (isset($this->con)) {
		mysqli_close($this->con);
		unset($this->con);
	}
}

function hash_pwd($pwd){
	$salt1= "omw#I@G";
	$salt2= "%tqM&zP";

	$hash_pwd= password_hash($pwd, PASSWORD_DEFAULT);
	return $hash_pwd;
}


	
}
$mydb = new Database_Connection();
  
?>