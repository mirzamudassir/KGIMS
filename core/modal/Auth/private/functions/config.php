<?php
/**
* Database Connection Configuration
*
* @category   Script
* @package    cPanel V1.0 - DreamBig
* @author     Mudassir Mirza <www.mirzamudassir.me>
* @copyright  DreamBig
* @version    1.0
* @since      Available since Release 1.0
*/

defined('server') ? null : define("server", "localhost");
defined('user') ? null : define("user", "root");
defined('pwd') ? null : define("pwd", "");
defined('databse') ? null : define("databse", "kgims");

function database_conn(){

$link= mysqli_connect("localhost", "root", "", "kgims");

return $link;
}
?>