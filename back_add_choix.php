
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

if(isset($_POST['submitcp']))
{	 
    $Nometprenoms = $_POST['Nometprenoms'];
    $Matricule = $_POST['Matricule'];
    $MS1 = $_POST['MS1'];
    $MS2 = $_POST['MS2'];
    $MS3 = $_POST['MS3'];
    $MS4 = $_POST['MS4'];
    $MS3 = $_POST['MS5'];
    $MS6 = $_POST['MS6'];
    $MGF = $_POST['MGF'];
    $MGC = $_POST['MGC'];
    $MGC = $_POST['MGC'];
    $MGF = $_POST['MGF'];
    $sep_01 = $_POST['sep_01'];
    $sep_02 = $_POST['sep_02'];
    $sep_03 = $_POST['sep_03'];
    $sql = "INSERT INTO  tablename(`Nometprenoms`,`Matricule`,`MS1`,`MS2`,`MS3`,`MS4`,`MS5`,`MS6`,`sep_01`,`sep_02`,`sep_03`,`MGF`,`MGC`) VALUES ('$Nometprenoms','$Matricule','$MS1','$MS1','$MS3','$MS4','$MS5','$MS6','$sep_01','$sep_02','$sep_03','$MGF','$MGC')";

	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);}
     header("location:\cassement\colorlib-regform-25\index.php");
	 mysqli_close($conn);
}
?>
