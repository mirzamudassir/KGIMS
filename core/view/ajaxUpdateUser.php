<?php
require_once('../controller/UserController.php');

$userid = 0;
$link= database_conn();
if(isset($_POST['userid'])){
   $userid = mysqli_real_escape_string($link,$_POST['userid']);
}
$sql = "select * from `user_accounts` where id=$userid";
$result = mysqli_query($link,$sql);

while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $full_name= $row['full_name'];
 $username = $row['username'];
 $user_role = $row['user_role'];
 $user_email = $row['user_email'];
 $user_status = $row['user_status'];

echo "
 
 <form action='../core/view/dataParser?f=updateUser' method='POST'>

 <div class='form-group to-left-50'>
     <label>Full Name <span class='title-red'>*</span></label>
     <input class='form-control' value='$full_name' name='full_name' disabled>
    
 </div>
 <div class='form-group to-left-50'>
     <label>Username <span class='title-red'>*</span></label>
     <input class='form-control' value='$username' name='username' disabled>
    
 </div>
 <div class='form-group to-left-50'>
     <label>Password</label>
     <input class='form-control' type='password' minlength='8' maxlength='20' name='password'>
    
 </div>
 <div class='form-group to-left-50'>
     <label>Email <span class='title-red'>*</span></label>
     <input class='form-control' type='email' value='$user_email' name='email' required>
    
 </div>

 <div class='form-group to-left-50'>
 <label>Role <span class='title-red'>*</span></label>
     <select class='form-control' name='role' required>
         <option value='$user_role'>$user_role</option>
         <option value='Administrator'>Administrator</option>
         <option value='Manager'>Manager</option>
         <option value='Salesmen'>Salesmen</option>
         
     </select>
    
 </div>

 <div class='form-group to-left-50'>
 <label>Status <span class='title-red'>*</span></label>
     <select class='form-control' name='status' required>
         <option value='$user_status'>$user_status</option>
         <option value='ACTIVE'>ACTIVE</option>
         <option value='DISABLED'>DISABLED</option>
         
     </select>
    
 </div>

 <input type='hidden' value='$id' name='id'>

 <div class='modal-footer'>
                                            
 <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
<input type='submit' name='updateUser' class='btn btn-success button-right-50' value='Update'>
<input type='submit' name='deleteUser' class='btn btn-danger button-right-50' value='Delete'>

</form>

 ";
}

exit;
?>