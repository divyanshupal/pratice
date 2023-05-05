<?php
$email=$_POST["email"];
$password=$_POST["password"];
$con=mysqli_connect("localhost","root","","crud");
$query="select * from crud_tbl where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    echo "login success";
}
else
{
    echo "Not login";
}
?>