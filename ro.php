
<?php
@ob_start();
session_start();
?>
<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "codershiyar";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['submitkk']))
{	 
    
     header("location:\cassement\colorlib-regform-25\index.php");
}
?>