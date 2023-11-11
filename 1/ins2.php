<?php
$server='localhost';
$uname='root';
$password='';
$database='dinesh';

$con=mysqli_connect($server,$uname,$password,$database) or die('database not connected');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$date=$_POST['date'];
$gen=$_POST['gen'];
$pass=$_POST['pass'];

$pa1 = base64_encode($pass);

// $pa1 = password_hash($pass, PASSWORD_BCRYPT);

$query="INSERT INTO ins VALUES(null,'$fname','$lname',$age,'$date','$gen','$pa1')";
if($res=mysqli_query($con,$query))
{
    echo "<script>alert('insert sucessfully')
    window.location.href='1.html'</script>";
}
else
{
    echo "<script>alert('insert not sucessfully')
    window.location.href='1.html'</script>";

}
?>