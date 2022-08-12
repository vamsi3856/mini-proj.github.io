<?php
$con=new mysqli('localhost','root','','std');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


    $username=$_POST['username'];
    $password=$_POST['password']; 

$x=$con->query("SELECT password from admin WHERE username='$username'");
$y=mysqli_fetch_assoc($x);
if($y==!''){
if($password!=$y['password'])
echo '<script>alert("WRONG PASSWORD")</script>';
else
 header('location: dashboard.php');}
else 
echo '<script>alert("invalid username or password")</script>';

?>