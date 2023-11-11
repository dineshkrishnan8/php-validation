<?php
$server='localhost';
$uname='root';
$password='';
$database='dinesh';

$con=mysqli_connect($server,$uname,$password,$database) or die('database not connected');

$fname=$_POST['fname'];
$pa1=$_POST['pass'];



$query="select * from ins where fname='$fname'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
{
    $pass = base64_decode($row['pa1']);
    if($pa1==$pass)
    {
        echo "<script>alert('login sucessfully')
        </script>";
        session_start();
        $_SESSION['fname']=$fname;
        header("location:login2.php");
    }
    else
    {
        echo "<script>alert('login not sucessfully')
        window.location.href='2.html'</script>";
    
    }

}
else{
    echo "<script>alert('login not sucessfully')
    window.location.href='2.html'</script>";

}
?>
