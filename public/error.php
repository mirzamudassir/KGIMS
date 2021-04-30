<?php
/**
* System Error Prompt
*
* @category   GUI
* @package    cPanel V1.0 - DreamBig
* @author     Mudassir Mirza <www.mirzamudassir.me>
* @copyright  DreamBig
* @version    1.0.0
* @since      Available since Release 1.0
*/

$error= $_GET['error_id'];
$error_id= base64_decode($error);


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>System Error</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @media screen and (max-width:500px) {
      body { font-size: .6em; } 
    }
  </style>
</head>

<body style="text-align: center;">

  <h1 style="font-family: Georgia, serif; color: #4a4a4a; margin-top: 4em; line-height: 1.5;">
    It seems system has gone in a critical error, kindly report administrator with Error ID for more help.
  </h1>
  
  <h2 style="  font-family: Verdana, sans-serif; color: #7d7d7d; font-weight: 300;">
    Error # <?php echo $error_id; ?>
  </h2>
  
</body>

</html>