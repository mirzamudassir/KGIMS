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
        redirect_to("../../public/inventory");
    }
    
    else{
        $_SESSION['notifStatus']= "Error";
        redirect_to("../../public/inventory");
    }
    
    }


    function deleteTaxGroup($id){
        global $link;
    
        $query= "DELETE FROM `tax_group` WHERE id='$id'";
        if($link->query($query) === TRUE){
            $_SESSION['notifStatus']= "Tax Group Deleted";
            redirect_to("../../public/inventory");
        }
    
        else{
            $_SESSION['notifStatus']= "Error";
            redirect_to("../../public/inventory");
        }
    }


    function postItem($barcode, $item_name, $description, $catagory, $sub_catagory, $unit_purchase_cost, $unit_selling_price, $tax_group, $posted_by, $status){
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

        function updateItem($id, $barcode, $item_name, $description, $catagory, $sub_catagory, $unit_purchase_cost, $unit_selling_price, $tax_group, $posted_by, $status){
            global $link;
            
            $query= "UPDATE `inventory` SET barcode='$barcode', item_name='$item_name', item_description='$description', catagory='$catagory', sub_catagory='$sub_catagory',
            unit_purchase_cost='$unit_purchase_cost', unit_selling_price='$unit_selling_price', tax_group='$tax_group', posted_by='$posted_by', item_status='$status' WHERE id='$id'";
            
            if($link->query($query) === TRUE){
                $_SESSION['notifStatus']= "Item Updated";
            redirect_to("../../public/inventory");
            }
            
            else{
                $_SESSION['notifStatus']= "Error";
                redirect_to("../../public/inventory");
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