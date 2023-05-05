<?php
$name=$_POST["name"];
$fname=$_POST["fname"];
$gender=$_POST["gender"];
$contactno=$_POST["contactno"];
$dob=$_POST["dob"];
$email=$_POST["email"];
$address=$_POST["address"];
$password=$_POST["password"];
$pass=md5($password);
$image=$_FILES["image"]["name"];
$size=$_FILES["image"]["size"];
$type=$_FILES["image"]["type"];
$tmpname=$_FILES["image"]["tmp_name"];
$location="upload/";

$con=mysqli_connect("localhost","root","","crud");
$query2="select * from crud_tbl where contactno='$contactno' and email='$email' ";
$res=mysqli_query($con,$query2);
if($row=mysqli_fetch_assoc($res))
{
    echo "<script>alert('This email is already registered');window.location.href='index.php';</script>";
}
else
{
$query="INSERT INTO crud_tbl(`name`, `fname`, `gender`, `contactno`, `dob`, `email`, `address`, `password`, `profile_pic`, `status`, `date`) 
VALUES('$name', '$fname', '$gender', '$contactno', '$dob', '$email', '$address', '$pass', '$image', 'Y', now())";
mysqli_query($con,$query);
move_uploaded_file($image,$location.$tmpname);
echo "<script>alert('Ragistration is done');window.location.href='login.php';</script>";
}
?>