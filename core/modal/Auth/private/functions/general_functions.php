<?php
require_once 'config.php';
// Put all of your general functions in this file

// header redirection often requires output buffering 
// to be turned on in php.ini.
function redirect_to($new_location) {
  header("Location: " . $new_location);
  exit;
}


//menu code
$mainMenu= "<li class='active'>
<a href='dashboard'><i class='fa fa-dashboard fa-fw'></i>Dashboard</a>
</li>

<li>
<a href=''><i class='fa fa-bar-chart-o fa-fw'></i>Inventory<span class='fa arrow'></span></a>
<ul class='nav nav-second-level'>
    <li>
        <a href='inventory'>Manage Inventory</a>
    </li>
    <li>
        <a href='stock'>Stock Level</a>
    </li>
</ul>
</li>

<li>
<a href=''><i class='fa fa-money fa-fw'></i>Finance<span class='fa arrow'></span></a>
<ul class='nav nav-second-level'>
    <li>
        <a href='priceList'>Price List</a>
    </li>
    
</ul>
</li>



<li class='active'>
<a href='settings'><i class='fa fa-gear fa-fw'></i>User Management</a>
</li>

";

$dropDownMenu= "
<ul class='dropdown-menu dropdown-user'>
    <li><a href='javascript:void(0)' data-toggle='modal' data-target='#userProfile'><i class='fa fa-user fa-fw'></i>Profile</a>
    </li>
    <li><a href='settings'><i class='fa fa-gear fa-fw'></i>Settings</a>
    </li>
    <li class='divider'></li>
    <li><a href='../core/modal/Auth/logout'><i class='fa fa-sign-out fa-fw'></i>Logout</a>
    </li>
</ul>
";


?>
