<?php
require_once(APP_ROOT . "/modal/initialize.php");

function postCatagory($catagory_name, $sub_catagory){
global $link;

$query= "INSERT INTO `catagory` (catagory_name, sub_catagory) VALUES ('$catagory_name', '$sub_catagory')";

if($link->query($query) === TRUE){
    $_SESSION['notifStatus']= "Catagory Added";
    redirect_to("../../public/inventory");
}

else{
    $_SESSION['notifStatus']= "Error";
    redirect_to("../../public/inventory");
}

}

function deleteCatagory($id){
    global $link;

    $query= "DELETE FROM `catagory` WHERE id='$id'";
    if($link->query($query) === TRUE){
        $_SESSION['notifStatus']= "Catagory Deleted";
        redirect_to("../../public/inventory");
    }

    else{
        $_SESSION['notifStatus']= "Error";
        redirect_to("../../public/inventory");
    }
}

function postTaxGroup($tax_group_name, $tax_rate){
    global $link;
    
    $query= "INSERT INTO `tax_group` (tax_group_name, tax_rate) VALUES ('$tax_group_name', '$tax_rate')";
    
    if($link->query($query) === TRUE){
        $_SESSION['notifStatus']= "Tax Group Added";
        redirect_to("../../public/priceList");
    }
    
    else{
        $_SESSION['notifStatus']= "Error";
        redirect_to("../../public/priceList");
    }
    
    }

    function postUser($username, $password, $full_name, $role, $email, $status){
        global $link;
        
        $password_hash= password_hash($password, PASSWORD_DEFAULT);
        $query= "INSERT INTO `user_accounts` (username, password_hash, full_name, user_role, user_email, user_status) VALUES ('$username', '$password_hash', '$full_name', '$role', '$email', '$status')";
        
        if($link->query($query) === TRUE){
            $_SESSION['notifStatus']= "User Saved";
            redirect_to("../../public/settings");
        }
        
        else{
            $_SESSION['notifStatus']= "Error";
            redirect_to("../../public/settings");
        }
        
        }


    function deleteTaxGroup($id){
        global $link;
    
        $query= "DELETE FROM `tax_group` WHERE id='$id'";
        if($link->query($query) === TRUE){
            $_SESSION['notifStatus']= "Tax Group Deleted";
            redirect_to("../../public/priceList");
        }
    
        else{
            $_SESSION['notifStatus']= "Error";
            redirect_to("../../public/priceList");
        }
    }


    function postItem($barcode, $item_name, $description, $catagory, $sub_catagory, $posted_by){
        global $link;
        
        $query= "INSERT INTO `inventory` (barcode, item_name, item_description, catagory, sub_catagory, posted_by) 
        VALUES ('$barcode', '$item_name', '$description', '$catagory', '$sub_catagory', '$posted_by')";
        
        if($link->query($query) === TRUE){
            $_SESSION['notifStatus']= "Item Added";
            redirect_to("../../public/inventory");
        }
        
        else{
            $_SESSION['notifStatus']= "Error";
            redirect_to("../../public/inventory");
        }
        
        }

        function updateItem($id, $barcode, $item_name, $description, $catagory, $sub_catagory){
            global $link;
            
            $query= "UPDATE `inventory` SET barcode='$barcode', item_name='$item_name', item_description='$description', catagory='$catagory', sub_catagory='$sub_catagory' WHERE id='$id'";
            
            if($link->query($query) === TRUE){
                $_SESSION['notifStatus']= "Item Updated";
            redirect_to("../../public/inventory");
            }
            
            else{
                $_SESSION['notifStatus']= "Error";
                redirect_to("../../public/inventory");
            }
            
            }

            function updateUser($id, $password, $role, $email, $status){
                global $link;

                if($password==''){
                    $query= "UPDATE `user_accounts` SET user_role='$role', user_email='$email', user_status='$status' WHERE id='$id'";
                
                if($link->query($query) === TRUE){
                    $_SESSION['notifStatus']= "User Updated";
                redirect_to("../../public/settings");
                }
                
                else{
                    $_SESSION['notifStatus']= "Error";
                    redirect_to("../../public/settings");
                }
                }else{
                
                $password_hash= password_hash($password, PASSWORD_DEFAULT);
                $query= "UPDATE `user_accounts` SET password_hash='$password_hash', user_role='$role', user_email='$email', user_status='$status' WHERE id='$id'";
                
                if($link->query($query) === TRUE){
                    $_SESSION['notifStatus']= "User Updated";
                redirect_to("../../public/settings");
                }
                
                else{
                    $_SESSION['notifStatus']= "Error";
                    redirect_to("../../public/settings");
                }
                
                }
            }

            function updateStock($id, $quantity, $available, $status){
                global $link;
                
                $query= "UPDATE `inventory` SET quantity='$quantity', available='$available', item_status='$status' WHERE id='$id'";
                
                if($link->query($query) === TRUE){
                    $_SESSION['notifStatus']= "Stock Updated";
                redirect_to("../../public/stock");
                }
                
                else{
                    $_SESSION['notifStatus']= "Error";
                    redirect_to("../../public/stock");
                }
                
                }

                function updatePriceList($id, $unit_purchase_cost, $unit_selling_price, $tax_group , $estimated_profit){
                    global $link;
                    
                    $query= "UPDATE `inventory` SET unit_purchase_cost='$unit_purchase_cost', unit_selling_price='$unit_selling_price', tax_rate='$tax_group', estimated_profit='$estimated_profit' WHERE id='$id'";
                    
                    if($link->query($query) === TRUE){
                        $_SESSION['notifStatus']= "Price List Updated";
                    redirect_to("../../public/priceList");
                    }
                    
                    else{
                        $_SESSION['notifStatus']= "Error";
                        redirect_to("../../public/priceList");
                    }
                    
                    }

            function deleteItem($id){
                global $link;
            
                $query= "DELETE FROM `inventory` WHERE id='$id'";
                if($link->query($query) === TRUE){
                    $_SESSION['notifStatus']= "Item Deleted";
                    redirect_to("../../public/inventory");
                }
            
                else{
                    $_SESSION['notifStatus']= "Error";
                    redirect_to("../../public/inventory");
                }
            }

            function deleteUser($id){
                global $link;
            
                $query= "DELETE FROM `user_accounts` WHERE id='$id'";
                if($link->query($query) === TRUE){
                    $_SESSION['notifStatus']= "User Deleted";
                    redirect_to("../../public/settings");
                }
            
                else{
                    $_SESSION['notifStatus']= "Error";
                    redirect_to("../../public/settings");
                }
            }

            function postStock($barcode, $item_name, $description, $catagory, $sub_catagory, $unit_purchase_cost, $unit_selling_price, $tax_group, $posted_by, $status){
                global $link;
                
                $query= "INSERT INTO `inventory` (barcode, item_name, item_description, catagory, sub_catagory, unit_purchase_cost, unit_selling_price, tax_group, posted_by, item_status) 
                VALUES ('$barcode', '$item_name', '$description', '$catagory', '$sub_catagory', '$unit_purchase_cost', '$unit_selling_price', '$tax_group', '$posted_by', '$status')";
                
                if($link->query($query) === TRUE){
                    $_SESSION['notifStatus']= "Item Added";
                    redirect_to("../../public/inventory");
                }
                
                else{
                    $_SESSION['notifStatus']= "Error";
                    redirect_to("../../public/inventory");
                }
                
                }
    
?>