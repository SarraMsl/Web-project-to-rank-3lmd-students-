
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

if (isset($_POST["classe"])) {
    $con=0;
    $classgl=0;
    $classgi=0;
    $classrt=0;

    $sql =("select * from tablename");
    $result=$conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
        while ($rowData = mysqli_fetch_array($result)) {
            if ($rowData["sep_01"]=="gl") {
                if ($classgl<mysqli_num_rows($result)/3) {
                    $sql ="update tablename set sep='gl' where  id=".$rowData["id"];
                    $res=$conn->query($sql);
                    $classgl++;
                } elseif ($rowData["sep_02"]=="gi") {
                    if ($classgi<mysqli_num_rows($result)/3) {
                        $sql ="update tablename set sep='gi' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classgi++;
                    } else {
                        $sql ="update tablename set sep='rt' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classrt++;
                    }
                } elseif ($rowData["sep_02"]=="rt") {
                    if ($classrt<mysqli_num_rows($result)/3) {
                        $sql ="update tablename set sep='rt' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classrt++;
                    } else {
                        $sql ="update tablename set sep='gi' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classgi++;
                    }
                }
            } elseif ($rowData["sep_01"]=="gi") {
                if ($classgi<mysqli_num_rows($result)/3) {
                    $sql ="update tablename set sep='gi' where  id=".$rowData["id"];
                    $res=$conn->query($sql);
                    $classgi++;
                } elseif ($rowData["sep_02"]=="gl") {
                    if ($classgl<mysqli_num_rows($result)/3) {
                        $sql ="update tablename set sep='gl' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classgl++;
                    } else {
                        $sql ="update tablename set sep='rt' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classrt++;
                    }
                } elseif ($rowData["sep_02"]=="rt") {
                    if ($classrt<mysqli_num_rows($result)/3) {
                        $sql ="update tablename set sep='rt' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classrt++;
                    } else {
                        $sql ="update tablename set sep='gl' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classgl++;
                    }
                }
            } elseif ($rowData["sep_01"]=="rt") {
                if ($classrt<mysqli_num_rows($result)/3) {
                    $sql ="update tablename set sep='rt' where  id=".$rowData["id"];
                    $res=$conn->query($sql);
                    $classrt++;
                } elseif ($rowData["sep_02"]=="gl") {
                    if ($classgl<mysqli_num_rows($result)/3) {
                        $sql ="update tablename set sep='gl' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classgl++;
                    } else {
                        $sql ="update tablename set sep='gi' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classgi++;
                    }
                } elseif ($rowData["sep_02"]=="gi") {
                    if ($classgi<mysqli_num_rows($result)/3) {
                        $sql ="update tablename set sep='gi' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classgi++;
                    } else {
                        $sql ="update tablename set sep='gl' where  id=".$rowData["id"];
                        $res=$conn->query($sql);
                        $classgl++;
                    }
                }
            }
        }

    }
    header("location:\cassement\colorlib-regform-25\classement.php");

}