<?php
$con = mysqli_connect("localhost","root","","houserentmanagement");
if(mysqli_connect_errno())
{
echo "Failed to connect to Mysql " .mysqli_connect_error();
}
?>