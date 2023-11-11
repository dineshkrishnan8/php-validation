<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    body{
        background-image: url("https://t3.ftcdn.net/jpg/04/12/82/16/360_F_412821610_95RpjzPXCE2LiWGVShIUCGJSktkJQh6P.jpg");
        background-repeat: no-repeat;
        /* background-size: 1600px 750px; */
        background-size: 1550px 750px;
    }
   
</style>
</head>
        <body>

            
<div class="container din3" >
    <div class="row">
            <table class="table-responsive table table-bordered">
              <thead>
                <th>S.NO</th>
                <th>first name</th>
                <th>last name</th>
                <th>age</th>
                <th>date</th>
                <th>gen</th>
                <th>password</th>
                <th>update data</th>
                <th>delete data</th>
              </thead>
              <tbody><?php
              $server='localhost';
              $uname='root';
              $password='';
              $database='dinesh';
              
              $con=mysqli_connect($server,$uname,$password,$database) or die('database not connected');
              session_start();
            if((empty($_SESSION)))
            {
                
                echo"<script>alert('login again')
                window.location.href='2.html'</script>";

            }
            else{
              $fname=$_SESSION['fname'];
              echo"<script>alert('welcome $fname')</script>";

        $query1="select * from ins where fname='$fname'";
$res1=mysqli_query($con,$query1);
while($row=mysqli_fetch_array($res1))
{
    $id=$row[0];
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
   
    $pass = base64_decode($row['6']);
     echo "<td>".$pass."</td>";
    echo"<td><a href='ud1.php?id=$id'class='btn btn-primary'>update</a></td>";
    echo"<td><a href='del.php?id=$id'class='btn btn-danger'>delete</a></td>";
    echo "</tr>";


    session_destroy();

}
            }
            ?>