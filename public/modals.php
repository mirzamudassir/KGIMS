<?php
require_once 'header.php';
before_every_protected_page();
$arr= getUserData($_SESSION['username']); 
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />
      <link href="../assets/css/main-style.css" rel="stylesheet" />
      <script src="../assets/scripts/jquery-3.4.1.min.js" type="text/javascript"></script>

</head>

<body>


  <!-- Modal Alert Start -->
  <div class="modal fade" id="userProfile" tabindex="-1" role="dialog" aria-labelledby="userProfile" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Welcome <?php echo $_SESSION['username']; ?></h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                       <?php 
                                            echo "Full Name: " . $arr['full_name'] . "<br>";
                                            echo "Email: " . $arr['email'] . "<br>"; 
                                            echo "Role: " . $arr['role'] . "<br>";
                                            echo "Status: " . $arr['status'];
                                       ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Modal Alrt End -->

  <!-- Add Item Modal Alert Start -->
    <div class="modal fade" id="addItem" tabindex="-1" role="dialog" aria-labelledby="addItem" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add Item</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        <form action="../core/view/dataParser?f=postItem" method="POST">

                                        <div class="form-group to-left-50">
                                            <label>Barcode <span class="title-red">*</span></label>
                                            <input class="form-control" name="barcode" type="varchar" maxlength="30" required>
                                           
                                        </div>
                                        <div class="form-group to-left-50">
                                            <label>Item Name <span class="title-red">*</span></label>
                                            <input class="form-control" name="item_name" type="varchar" maxlength="30" required>
                                           
                                        </div>
                                        <div class="form-group to-left-50">
                                            <label>Description</label>
                                            <input class="form-control" name="description" type="varchar" maxlength="30">
                                           
                                        </div>
                                        <div class="form-group to-left-50">
                                        <label>Catagory<span class="title-red"> *</span></label>
                                            <select class="form-control" name="catagory" required>
                                            <option> -- Select -- </option>
                                                <?php getCatagoryValues(); ?>
                                                
                                            </select>
                                           
                                        </div>
                                        <div class="form-group to-left-50">
                                        <label>Sub-Catagory</label>
                                            <select class="form-control" name="sub_catagory" required>
                                            <option> -- Select -- </option>
                                                <?php getSubCatagoryValues(); ?>
                                                
                                            </select>
                                           
                                        </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" name="add" class="btn btn-success button-right-50" value="Save">
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Add Item Modal Alrt End -->

                        <!-- Add Catagory Modal Alert Start -->
<div class="modal fade" id="addCatagory" tabindex="-1" role="dialog" aria-labelledby="addCatagory" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> Manage Catagory</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="../core/view/dataParser?f=postCatagory" method="POST">
                                        <div class="form-group to-left-50">
                                            <label>Catagory <span class="title-red">*</span></label>
                                            <input class="form-control" name="catagory" type="text" maxlength="30" required>
                                           
                                        </div>
                                        <div class="form-group to-left-50">
                                            <label>Sub-Catagory</label>
                                            <input class="form-control" name="sub_catagory" type="text" maxlength="30">
                                           
                                        </div>
                                       <input type="submit" name="add" class="btn btn-success button-right-50" value="Add">
                                        </form>

                                        <div class="table-responsive">
                                         <table class="table table-striped table-bordered table-hover" id="dataTabless-example">
                                        <thead>
                                        <th> Catagory </th>
                                        <th> Sub-Catagory </th>
                                        <th> Action </th>
                                        </thead>
                                        <tbody>
                                        <?php getCatagory(); ?>
                                        </tbody>
                                        </table>
                                        </div>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Add Catagory Modal Alrt End -->

                         <!-- Add Tax Group Modal Alert Start -->
                            <div class="modal fade" id="addTaxGroup" tabindex="-1" role="dialog" aria-labelledby="addTaxGroup" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"> Manage Tax Groups</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="../core/view/dataParser?f=postTaxGroup" method="POST">
                                        <div class="form-group to-left-50">
                                            <label>Tax Group Name <span class="title-red">*</span></label>
                                            <input class="form-control" name="tax_group_name" type="text" maxlength="30" required>
                                           
                                        </div>
                                        <div class="form-group to-left-50">
                                            <label>Tax Rate (%) <span class="title-red">*</span></label>
                                            <input class="form-control" name="tax_rate" type="number" maxlength="30" required>
                                           
                                        </div>
                                       <input type="submit" name="add" class="btn btn-success button-right-50" value="Add">
                                        </form>

                                        <div class="table-responsive">
                                         <table class="table table-striped table-bordered table-hover" id="dataTabless-tax-example">
                                        <thead>
                                        <th> Tax Group Name </th>
                                        <th> Tax Rate </th>
                                        <th> Action </th>
                                        </thead>
                                        <tbody>
                                        <?php getTaxGroup(); ?>
                                        </tbody>
                                        </table>
                                        </div>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Add Tax Group Modal Alrt End -->

                         
                        <!-- Add Stock Modal Alert Start -->
                            <div class="modal fade" id="addStock" tabindex="-1" role="dialog" aria-labelledby="addStock" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add Stock</h4>
                                        </div>
                                        <div class="modal-body">
                                        

                                        <div class="table-responsive">
                                         <table class="table table-striped table-bordered table-hover" id="dataTablesss-tax-example">
                                        <thead>
                                        <th> Tax Group Name </th>
                                        <th> Tax Rate </th>
                                        <th> Action </th>
                                        </thead>
                                        <tbody>
                                        <?php getItemList(); ?>
                                        </tbody>
                                        </table>
                                        </div>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Post Stock Modal Alrt End -->

                        <!-- Add Stock Modal Alert Start -->
                        <div class="modal fade" id="addLevel" tabindex="-1" role="dialog" aria-labelledby="addLevel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add Stock Level</h4>
                                        </div>
                                        <div class="modal-body">
                                        

                                        <form action="../core/view/dataParser?f=postTaxGroup" method="POST">
                                        <div class="form-group to-left-50">
                                            <label>Tax Group Name <span class="title-red">*</span></label>
                                            <input class="form-control" name="tax_group_name" type="text" maxlength="30" required>
                                           
                                        </div>
                                        <div class="form-group to-left-50">
                                            <label>Tax Rate (%) <span class="title-red">*</span></label>
                                            <input class="form-control" name="tax_rate" type="number" maxlength="30" required>
                                           
                                        </div>
                                       <input type="submit" name="add" class="btn btn-success button-right-50" value="Add">
                                        </form>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Post Stock Modal Alrt End -->


                          <!-- Add User Modal Alert Start -->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Add User</h4>
                                        </div>
                                        <div class="modal-body">
                                        
                                        <form action="../core/view/dataParser?f=postUser" method="POST">

                                        <div class="form-group to-left-50">
                                            <label>Full Name <span class="title-red">*</span></label>
                                            <input class="form-control" name="full_name" type="varchar" maxlength="30" required>
                                           
                                        </div>
                                        <div class="form-group to-left-50">
                                            <label>Email <span class="title-red">*</span></label>
                                            <input class="form-control" name="email" type="email" maxlength="30" required>
                                           
                                        </div>
                                        
                                        <div class="form-group to-left-50">
                                        <label>Password <span class="title-red"> *</span></label>
                                        <input class="form-control" name="password" type="password" minlength="8" maxlength="20">
                                           
                                        </div>

                                         <div class="form-group to-left-50">
                                            <label>Username <span class="title-red">*</span></label>
                                            <input class="form-control" id="txt_username" name="username" type="text" minlength="6" maxlength="15">
                                            
                                        </div>
                                        
                                        <div class="form-group to-left-50">
                                        <label>Role <span class="title-red"> *</span></label>
                                            <select class="form-control" name="role" required>
                                            <option value="NULL"> -- Select -- </option>
                                            <option value="Administrator"> Administrator </option>
                                            <option value="Employee"> Manager </option>
                                            <option value="Salesmen"> Salesmen </option>
                                            </select>
                                           
                                        </div>
                                      
                                        <div class="form-group to-left-50">
                                        <label>Status<span class="title-red"> *</span></label>
                                        <select class="form-control" name="status" required>
                                                <option> -- Select -- </option>
                                                <option>ACTIVE</option>
                                                <option>DISABLED</option>
                                                
                                            </select>
                                           
                                        </div>
                                        <div id="uname_response" ></div>
                         
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <input type="submit" name="add" class="btn btn-success button-right-50" value="Save">
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- Add User Modal Alrt End -->

                        <?php require_once 'footer.php' ?>

                        <script>

$(document).ready(function(){

$("#txt_username").keyup(function(){

    var username = $(this).val().trim();

  if(username != ''){

     $.ajax({
        url: '../core/view/ajaxcheckUsername',
        type: 'post',
        data: {username:username},
        success: function(response){

           // Show response
           $("#uname_response").html(response);

        }
     });
  }else{
     $("#uname_response").html("");
  }

});

});
                        </script>
</body>
</html>