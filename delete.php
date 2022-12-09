
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
   die('Could not Connect My Sql:' .mysqli_connect_error());
}

if(isset($_POST['submitd']))
{	 

    $sql = "UPDATE `tablename` SET sep=NULL";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);}
     header("location:\cassement\colorlib-regform-25\classement.php");
	 mysqli_close($conn);
}
?>
