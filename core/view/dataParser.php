<?php
require_once("../modal/initialize.php");
$link= database_conn();

if(isset($_GET['f'])){
$func= $_GET['f'];
switch($func){
    case 'postCatagory':

        $catagory_name= mysqli_real_escape_string($link, $_POST['catagory']);
        $sub_catagory= mysqli_real_escape_string($link, $_POST['sub_catagory']);

        postCatagory($catagory_name, $sub_catagory);
        break;
    case 'postItem':

        $barcode= mysqli_real_escape_string($link, $_POST['barcode']);
        $item_name= mysqli_real_escape_string($link, $_POST['item_name']);
        $description= mysqli_real_escape_string($link, $_POST['description']);
        $catagory= mysqli_real_escape_string($link, $_POST['catagory']);
        $sub_catagory= mysqli_real_escape_string($link, $_POST['sub_catagory']);
        $posted_by= $_SESSION['username'];
        
        postItem($barcode, $item_name, $description, $catagory, $sub_catagory, $posted_by);
        break;
        case 'postUser':

            $full_name= mysqli_real_escape_string($link, $_POST['full_name']);
            $email= mysqli_real_escape_string($link, $_POST['email']);
            $password= mysqli_real_escape_string($link, $_POST['password']);
            $username= mysqli_real_escape_string($link, $_POST['username']);
            $role= mysqli_real_escape_string($link, $_POST['role']);
            $status= mysqli_real_escape_string($link, $_POST['status']);
    
            postUser($username, $password, $full_name, $role, $email, $status);
            break;
        case 'updateItem':
            
            $id= mysqli_real_escape_string($link, $_POST['id']);
            $barcode= mysqli_real_escape_string($link, $_POST['barcode']);
            $item_name= mysqli_real_escape_string($link, $_POST['item_name']);
            $description= mysqli_real_escape_string($link, $_POST['description']);
            $catagory= mysqli_real_escape_string($link, $_POST['catagory']);
            $sub_catagory= mysqli_real_escape_string($link, $_POST['sub_catagory']);
            $unit_purchase_cost= mysqli_real_escape_string($link, $_POST['unit_purchase_cost']);
            $unit_selling_price= mysqli_real_escape_string($link, $_POST['unit_selling_price']);
            $tax_group= mysqli_real_escape_string($link, $_POST['tax_group']);
            $posted_by= $_SESSION['username'];
            $status= mysqli_real_escape_string($link, $_POST['status']);

            if(isset($_POST['deleteItem'])){
                deleteItem($id);
            }else{
    
            updateItem($id, $barcode, $item_name, $description, $catagory, $sub_catagory, $unit_purchase_cost, $unit_selling_price, $tax_group, $posted_by, $status);
            }
            break;
        case 'updateUser':

            $id= mysqli_real_escape_string($link, $_POST['id']);
            $password= mysqli_real_escape_string($link, $_POST['password']);
            $email= mysqli_real_escape_string($link, $_POST['email']);
            $role= mysqli_real_escape_string($link, $_POST['role']);
            $status= mysqli_real_escape_string($link, $_POST['status']);

            if(isset($_POST['deleteUser'])){
                deleteUser($id);
            }else{
    
            UpdateUser($id, $password, $role, $email, $status);
            }
            break;
        case 'updateStock':

            $id= mysqli_real_escape_string($link, $_POST['id']);
            $quantity= mysqli_real_escape_string($link, $_POST['quantity']);
            $available= mysqli_real_escape_string($link, $_POST['available']);
            $status= mysqli_real_escape_string($link, $_POST['status']);
        
            updateStock($id, $quantity, $available, $status);
            break;
        case 'updatePriceList':

            $id= mysqli_real_escape_string($link, $_POST['id']);
            $unit_purchase_cost= mysqli_real_escape_string($link, $_POST['unit_purchase_cost']);
            $unit_selling_price= mysqli_real_escape_string($link, $_POST['unit_selling_price']);
            $tax_group= mysqli_real_escape_string($link, $_POST['tax_group']);
            $unit_selling_price_with_tax= ceil((($unit_selling_price * $tax_group) / 100) + $unit_selling_price);
            $estimated_profit= ceil(((($unit_selling_price - $unit_purchase_cost) / $unit_selling_price) * 100)) . "%";
        
            updatePriceList($id, $unit_purchase_cost, $unit_selling_price_with_tax, $tax_group , $estimated_profit);
            break;
        case 'deleteItem':

            $id= mysqli_real_escape_string($link, $_POST['id']);
            $barcode= mysqli_real_escape_string($link, $_POST['barcode']);
            $item_name= mysqli_real_escape_string($link, $_POST['item_name']);
            $description= mysqli_real_escape_string($link, $_POST['description']);
            $catagory= mysqli_real_escape_string($link, $_POST['catagory']);
            $sub_catagory= mysqli_real_escape_string($link, $_POST['sub_catagory']);
            $unit_purchase_cost= mysqli_real_escape_string($link, $_POST['unit_purchase_cost']);
            $unit_selling_price= mysqli_real_escape_string($link, $_POST['unit_selling_price']);
            $tax_group= mysqli_real_escape_string($link, $_POST['tax_group']);
            $posted_by= $_SESSION['username'];
            $status= mysqli_real_escape_string($link, $_POST['status']);
    
            deleteItem($id);
            break;
    case 'deleteCatagory':

        $id= mysqli_real_escape_string($link, $_POST['id']);

        deleteCatagory($id);
        break;
    case 'postTaxGroup':

        $tax_group_name= mysqli_real_escape_string($link, $_POST['tax_group_name']);
        $tax_rate= mysqli_real_escape_string($link, $_POST['tax_rate']);

        postTaxGroup($tax_group_name, $tax_rate);
        break;
     case 'deleteTaxGroup':

        $id= mysqli_real_escape_string($link, $_POST['id']);

        deleteTaxGroup($id);
        break;

    default:

    echo "ERROR: ERR_DATAPARSER";


}
}
?>