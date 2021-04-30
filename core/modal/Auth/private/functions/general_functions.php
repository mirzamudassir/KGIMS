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
        <a href='abc.html'>Price List</a>
    </li>
    <li>
        <a href='morris.html'>Bills</a>
    </li>
    <li>
    <a href='morris.html'>Transactions</a>
  </li>
</ul>
</li>

<li>
<a href=''><i class='fa fa-download fa-fw'></i>Reports<span class='fa arrow'></span></a>
<ul class='nav nav-second-level'>
    <li>
        <a href='abc.html'>Stock Report</a>
    </li>
    <li>
        <a href='morris.html'>Transactions Report</a>
    </li>
</ul>

<li class='active'>
<a href='settings'><i class='fa fa-gear fa-fw'></i>User Management</a>
</li>

";


?>
