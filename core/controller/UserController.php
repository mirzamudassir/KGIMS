<?php
require_once(realpath(dirname(__FILE__) . '/..') . '/modal/initialize.php');

  function getUserData($username){
    global $link;

    $query= "SELECT * FROM `user_accounts` WHERE full_name= '$username'";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
  
    $user= $row['username'];
    $full_name= $row['full_name'];
    $email= $row['user_email'];
    $role= $row['user_role'];
    $status= $row['user_status'];
  
  }
  $result= array("username"=>"$user", "full_name"=>"$full_name","email"=> "$email", "role"=>"$role", "status"=>"$status");
  return $result;

  }
  
  function getInventoryList(){
    global $link;

    $query= "SELECT * FROM `inventory`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
    $id= $row['id'];
    $barcode= $row['barcode'];
    $item_name= $row['item_name'];
    $description= $row['item_description'];
    $catagory= $row['catagory'];
    $unit_selling_price= $row['unit_selling_price'];
    $available= $row['available'];
    $status= $row['item_status'];
    $posted_by= $row['posted_by'];
    
   echo "<tr class='odd gradeX'>
    <td>$barcode</td>
    <td>$item_name</td>
    <td>$description</td>
    <td class='center'>$catagory</td>
    <td>$unit_selling_price</td>
    <td>$available</td>
    <td>$status</td>
    <td>$posted_by</td>
    <td><button data-id='$id' class='userinfo btn btn-success'>Update</button></td>
</tr>";
    }
  //$result= array("barcode"=>"$barcode", "item_name"=>"$item_name", "description"=>"$description", "catagory"=>"$catagory", "unit_purchase_cost"=>"$unit_purchase_cost", "unit_selling_price"=>"$unit_selling_price", "tax_group"=>"$tax_group", "posted_by"=>"$posted_by", "status"=>"$status");

  }

  function getUsersList(){
    global $link;

    $query= "SELECT * FROM `user_accounts`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
    $id= $row['id'];
    $full_name= $row['full_name'];
    $email= $row['user_email'];
    $username= $row['username'];
    $role= $row['user_role'];
    $status= $row['user_status'];
    
   echo "<tr class='odd gradeX'>
    <td>$full_name</td>
    <td>$email</td>
    <td>$username</td>
    <td class='center'>$role</td>
    <td>$status</td>
    <td><button data-id='$id' class='userinfo btn btn-success'>Update</button></td>
</tr>";
    }
  //$result= array("barcode"=>"$barcode", "item_name"=>"$item_name", "description"=>"$description", "catagory"=>"$catagory", "unit_purchase_cost"=>"$unit_purchase_cost", "unit_selling_price"=>"$unit_selling_price", "tax_group"=>"$tax_group", "posted_by"=>"$posted_by", "status"=>"$status");

  }

  function getStock(){
    global $link;

    $query= "SELECT * FROM `inventory`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
    $id= $row['id'];
    $barcode= $row['barcode'];
    $item_name= $row['item_name'];
    $catagory= $row['catagory'];
    $quantity= $row['quantity'];
    $available= $row['available'];
    $status= $row['item_status'];
    $posted_by= $row['posted_by'];
    
    //another query

    
    echo "<tr class='odd gradeX'>
    <td>$barcode</td>
    <td>$item_name</td>
    <td class='center'>$quantity</td>
    <td class='center'>$available</td>
    <td class='center'>$status</td>
    <td class='center'>$posted_by</td>
    <td><button data-id='$id' class='userinfo btn btn-success'>Update</button></td>
    ";

    }
    }

    function getStockForDashboard(){
      global $link;
  
      $query= "SELECT * FROM `inventory` WHERE available<5";
      $result= $link->query($query);
    
      while($row= $result->fetch_assoc()){
      
      $id= $row['id'];
      $barcode= $row['barcode'];
      $item_name= $row['item_name'];
      $catagory= $row['catagory'];
      $quantity= $row['quantity'];
      $available= $row['available'];
      $status= $row['item_status'];
      $posted_by= $row['posted_by'];
      
      //another query
  
      
      echo "<tr class='odd gradeX'>
      <td>$barcode</td>
      <td>$item_name</td>
      <td class='center'>$quantity</td>
      <td class='center'>$available</td>
      <td class='center'>$status</td>
      ";
  
      }
      }

    function getPriceList(){
      global $link;
  
      $query= "SELECT * FROM `inventory`";
      $result= $link->query($query);
    
      while($row= $result->fetch_assoc()){
      
      $id= $row['id'];
      $barcode= $row['barcode'];
      $item_name= $row['item_name'];
      $unit_purchase_cost= $row['unit_purchase_cost'];
      $unit_selling_price= $row['unit_selling_price'];
      $tax_rate= $row['tax_rate'];
      $estimated_profit= $row['estimated_profit'];
      
      $tax_rate_percent= $tax_rate . "%";
      //another query
  
      
      echo "<tr class='odd gradeX'>
      <td>$barcode</td>
      <td>$item_name</td>
      <td class='center'>$unit_purchase_cost</td>
      <td class='center'>$tax_rate_percent</td>
      <td class='center'>$unit_selling_price</td>
      <td class='center'>$estimated_profit</td>
      <td><button data-id='$id' class='userinfo btn btn-success'>Update</button></td>
      ";
  
      }
      }

  function getCatagory(){
    global $link;

    $query= "SELECT * FROM `catagory`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
    $id= $row['id'];
    $catagory_name= $row['catagory_name'];
    $sub_catagory= $row['sub_catagory'];
    
   echo "<tr>
   <form action='../core/view/dataParser?f=deleteCatagory' method='POST'>
    <td>$catagory_name</td>
    <td>$sub_catagory</td>
    <input type='hidden' value='$id' name='id'>
    <td><input type='submit' name='deleteCatagory' class='btn btn-danger' data-toggle='tooltip' data-placement='top' title='Are you sure?' value='Delete'></td>
    </form>
    </tr>";
    }
  
  }

  function getCatagoryValues(){
    global $link;

    $query= "SELECT * FROM `catagory`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
      $catagory_name= $row['catagory_name'];

      echo "
      <option value='$catagory_name' name='catagory'>$catagory_name</option>
      ";
    }
  }

  function getSubCatagoryValues(){
    global $link;

    $query= "SELECT * FROM `catagory`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
      $sub_catagory= $row['sub_catagory'];

      echo "
      <option value='$sub_catagory' name='sub_catagory'>$sub_catagory</option>
      ";
    }
  }

  function getTaxGroup(){
    global $link;

    $query= "SELECT * FROM `tax_group`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
    $id= $row['id'];
    $tax_group_name= $row['tax_group_name'];
    $tax_rate= $row['tax_rate'];
    $tax_rate_percent= $tax_rate . "%";
    
   echo "<tr>
   <form action='../core/view/dataParser?f=deleteTaxGroup' method='POST'>
    <td>$tax_group_name</td>
    <td>$tax_rate_percent</td>
    <input type='hidden' value='$id' name='id'>
    <td><input type='submit' name='deleteTaxGroup' class='btn btn-danger' data-toggle='tooltip' data-placement='top' title='Are you sure?' value='Delete'></td>
    </form>
    </tr>";
    }
  
  }

  function getItemList(){
    global $link;

    $query= "SELECT * FROM `inventory`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
    $id= $row['id'];
    $item_name= $row['item_name'];
    $catagory= $row['catagory'];
    
   echo "<tr>

    <td>$item_name</td>
    <td>$catagory</td>
    <input type='hidden' value='$id' name='id'>
    <td><input type='submit' name='addLevel' class='btn btn-success' data-toggle='modal' data-target='#addLevel' value='Add Stock'></td>
    
    </tr>";
    }
  
  }

  function getTaxGroupValue(){
    global $link;

    $query= "SELECT * FROM `tax_group`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
      $tax_group_name= $row['tax_group_name'];

      echo "
      <option>$tax_group_name</option>
      ";
    }
  }

  function getErrorNotification(){
    if(isset($_SESSION['notifStatus']) && $_SESSION['notifStatus'] != ''){
      $flag= $_SESSION['notifStatus'];
      
                            ?>
                          <script>  
                          var flag= <?php echo json_encode($flag); ?>
                          
                   swal({
                   title: JSON.stringify(flag),
                   icon: "error",
                   button: "Ok",
                   });
                      </script>
<?php

unset($_SESSION['notifStatus']);

  }
  }

  
  function getNotification(){
    if(isset($_SESSION['notifStatus']) && $_SESSION['notifStatus'] != ''){
      $flag= $_SESSION['notifStatus'];

      if($flag=="Error"){
        getErrorNotification();
      }else{
      
                            ?>
                          <script>  
                          var flag= <?php echo json_encode($flag); ?>
                          
                   swal({
                   title: JSON.stringify(flag),
                   icon: "success",
                   button: "Ok",
                   });
                      </script>
<?php

unset($_SESSION['notifStatus']);

  }
  }
}


 function getTotalItems(){
    global $link;

    $query= "SELECT COUNT(*) AS totalItems FROM `inventory`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
      $totalItems= $row['totalItems'];

      echo "
      <h3> $totalItems </h3>
      ";
  }
}

function getStockStatus(){
  global $link;

    $query= "SELECT COUNT(*) AS totalItems FROM `inventory` WHERE quantity='' AND available=''";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
      $totalItems= $row['totalItems'];

      echo "
      <h3> $totalItems </h3>
      ";
  }
}

function getPriceListStatus(){
  global $link;

    $query= "SELECT COUNT(*) AS totalItems FROM `inventory` WHERE unit_purchase_cost='' AND unit_selling_price=''";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
      $totalItems= $row['totalItems'];

      echo "
      <h3> $totalItems </h3>
      ";
  }
}

function getTaxGroupForPriceList(){
  global $link;

  $query= "SELECT * FROM `tax_group`";
    $result= $link->query($query);
  
    while($row= $result->fetch_assoc()){
    
      $tax_group_name= $row['tax_group_name'];
      $tax_rate= $row['tax_rate'];

echo "
  <option value='$tax_rate'> $tax_group_name </option>
";
    }
}

  
  $current_location= dirname(__FILE__);
  if($current_location== 'F:\xampp\htdocs\project\core\controller' OR $current_location== 'F:\xampp\htdocs\project\core\view'){
    
  }else{
    require_once('footer.php');
  }
  
?>