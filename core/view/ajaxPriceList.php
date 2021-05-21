<?php
require_once('../controller/UserController.php');

$userid = 0;
$link= database_conn();
if(isset($_POST['userid'])){
   $userid = mysqli_real_escape_string($link,$_POST['userid']);

$sql = "select * from `inventory` where id=$userid";
$result = mysqli_query($link,$sql);

while( $row = mysqli_fetch_array($result) ){
 $id = $row['id'];
 $barcode= $row['barcode'];
 $item_name = $row['item_name'];
 $unit_purchase_cost= $row['unit_purchase_cost'];
 $unit_selling_price = $row['unit_selling_price'];
 $tax_rate = $row['tax_rate'];
 $estimated_profit = $row['estimated_profit'];

echo " <form action='../core/view/dataParser?f=updatePriceList' method='POST'>";

echo "<div class='form-group to-left-50'>";
echo "<label>Barcode <span class='title-red'>*</span></label>";
echo "<input class='form-control' value='$barcode' name='barcode' disabled>";
    
echo "</div>";
echo "<div class='form-group to-left-50'>";
echo "<label>Item Name <span class='title-red'>*</span></label>";
echo "<input class='form-control' value='$item_name' name='item_name' disabled>";
    
echo "</div>";
echo "<div class='form-group to-left-50'>";
echo "<label>Unit Purchase Cost <span class='title-red'>*</span></label>";
echo "<input class='form-control' type='number' maxlength='10' value='$unit_purchase_cost' name='unit_purchase_cost' required>";
    
echo "</div>";
echo "<div class='form-group to-left-50'>";
echo "<label>Unit Selling Price <span class='title-red'>*</span></label>";
echo "<input class='form-control' type='number' maxlength='10' value='$unit_selling_price' name='unit_selling_price' required>";
    
echo "</div>";

echo "<div class='form-group to-left-50'>";
echo "<label>Tax Group <span class='title-red'>*</span></label>";
echo "<select class='form-control' name='tax_group' required>";
echo "<option value='$tax_rate'>$tax_rate </option>";
           getTaxGroupForPriceList();
         
           echo "</select>";
    
           echo "</div>";
           echo "<input type='hidden' value='$id' name='id'>";

           echo "<div class='modal-footer'>";
                                            
           echo "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>";
           echo "<input type='submit' name='updatePriceList' class='btn btn-success button-right-50' value='Update'>";


           echo "</form>";
 
}
}
else{
    header("Location: http://localhost/project/core/modal/Auth/logout");
}
exit;
?>