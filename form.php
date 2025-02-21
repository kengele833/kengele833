<?php
//to insert data to mysql from input
if(isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = " ";
    $database = "student";
//get values from input text and number
$usname =$_POST['usname'];
$ename =$_POST['ename'];
$pasname =$_POST['pasname'];
$cpasname =$_POST['ename'];
 
//connect to mysql data using mysqli
$connect = mysqli_connect($host,$username,$password,$database);

//msql query to insert data
$query = "INSERT INTO users(usname,ename,pasname,cpasname) VALUES ('$usname','$ename','$pasname','$cpasname')";
$result = mysqli_query($connect,$query);
my_mysqli_close($connect);
}
?>