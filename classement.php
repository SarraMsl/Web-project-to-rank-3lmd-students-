

<?php
@ob_start();
session_start();
?>

<html>
<style>.styled-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  font-family: sans-serif;
  min-width: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.styled-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}</style>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
    </head>

    <table class="styled-table" style="margin-left:120px ;">
        
    <thead>
        <tr>
            <th>Nom et prénom</th>
            <th>Matricule</th>
            <th>MS1</th>
            <th>MS2</th>
            <th>MS3</th>
            <th>MS4</th>
            <th>MS5</th>
            <th>MS6</th>
            <th>MGF</th>
            <th>MGC</th>
            <th>Choix_01</th>
            <th>Choix_02</th>
            <th>Choix_03</th>
            <th>Spécialisation dirigée</th>
        </tr>
    </thead>
 
    <tbody>   <?php
    $sname = "localhost";
    $uname = "root";
    $password = "";
    $db_name = "codershiyar";
    $conn  = mysqli_connect($sname, $uname, $password, $db_name);
    
    if (!$conn) {
      echo "Connection failed!";
    }
                        $sql=$conn->query("select * from `tablename` ");

                      

                        while($row=$sql->fetch_array()){
                          ?>
        <tr>
            <td><?php echo $row['Nometprenoms']; ?></td>
            <td><?php echo $row['Matricule']; ?></td>
            <td><?php echo $row['MS1']; ?></td>
            <td><?php echo $row['MS2']; ?></td>
            <td><?php echo $row['MS3']; ?></td>
            <td><?php echo $row['MS4']; ?></td>
            <td><?php echo $row['MS5']; ?></td>
            <td><?php echo $row['MS6']; ?></td>
            <td><?php echo $row['MGF']; ?></td>
            <td><?php echo $row['MGC']; ?></td>
            <td><?php echo $row['sep_01']; ?></td>
            <td><?php echo $row['sep_02']; ?></td>
            <td><?php echo $row['sep_03']; ?></td>
            <td><?php echo $row['sep']; ?></td>
         
        </tr>
        <?php }
                        ?>
    </tbody>
</table>
<form action="ro.php" method="post">

<button data-text="Goo" name="submitkk"   style="margin-left:300px;margin-top:-50px">
						<span>Entre un choix</span>
					</button>
</form>
<form action="back.php" method="post">

<button data-text="Goo" name="classe"   style="margin-left:600px;margin-top:-175px">
						<span>classé</span>
					</button>
</form>
<form action="delete.php" method="post">

<button data-text="Goo" name="submitd"   style="margin-left:900px;margin-top:-300px">
						<span>delete</span>
					</button>
</form>
<body>
    
</body>
</html>