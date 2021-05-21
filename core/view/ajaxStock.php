<?php
require_once('../controller/UserController.php');

$userid = 0;
$link= database_conn();
if(isset($_POST['userid'])){
   $userid = mysqli_real_escape_string($link,$_POST['userid']);
}
$sql = "select * from `inventory` where id=$userid";
$result = mysqli_query($link,$sql);

while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $barcode= $row['barcode'];
 $item_name = $row['item_name'];
 $quantity= $row['quantity'];
 $available = $row['available'];
 $status = $row['item_status'];
 $posted_by = $row['posted_by'];

echo "
 
 <form action='../core/view/dataParser?f=updateStock' method='POST'>

 <div class='form-group to-left-50'>
     <label>Barcode <span class='title-red'>*</span></label>
     <input class='form-control' value='$barcode' name='barcode' disabled>
    
 </div>
 <div class='form-group to-left-50'>
     <label>Item Name <span class='title-red'>*</span></label>
     <input class='form-control' value='$item_name' name='item_name' disabled>
    
 </div>
 <div class='form-group to-left-50'>
     <label>Quantity <span class='title-red'>*</span></label>
     <input class='form-control' type='number' maxlength='10' value='$quantity' name='quantity' required>
    
 </div>
 <div class='form-group to-left-50'>
     <label>Available <span class='title-red'>*</span></label>
     <input class='form-control' type='number' maxlength='10' value='$available' name='available' required>
    
 </div>

 <div class='form-group to-left-50'>
 <label>Status <span class='title-red'>*</span></label>
     <select class='form-control' name='status' required>
         <option value='$status'>$status</option>
         <option value='In Stock'>In Stock</option>
         <option value='Out of Stock'>Out of Stock</option>
         
     </select>
    
 </div>
 <input type='hidden' value='$id' name='id'>

 <div class='modal-footer'>
                                            
 <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
<input type='submit' name='updateItem' class='btn btn-success button-right-50' value='Update'>

</form>
 ";
}

exit;
?>