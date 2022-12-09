




<?php
@ob_start();
session_start();
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v9 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- DATE-PICKER -->
		<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="back_add_choix.php" method="post">
					<h3>Choix Etudiant</h3>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">Nom et prénom *</label>
							<input type="text" class="form-control" placeholder=" Nom et prénom " name="Nometprenoms">
						</div>
						<div class="form-wrapper">
							<label for=""> Matricule *</label>
							<input type="text" class="form-control" placeholder="Matricule" name="Matricule">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">MS1 *</label>
							<input type="text" class="form-control" placeholder="MS1" name="MS1">
						</div>
						<div class="form-wrapper">
							<label for=""> MS2 *</label>
							<input type="text" class="form-control" placeholder="MS2" name="MS2">
						</div>
					</div>

					<div class="form-row">
						<div class="form-wrapper">
							<label for="">MS3 *</label>
							<input type="text" class="form-control" placeholder="MS3" name="MS3">
						</div>
						<div class="form-wrapper">
							<label for=""> MS4 *</label>
							<input type="text" class="form-control" placeholder="MS4" name="MS4">
						</div>
						
					</div>

					<div class="form-row">
						<div class="form-wrapper">
							<label for="">MS5 *</label>
							<input type="text" class="form-control" placeholder="MS5" name="MS5">
						</div>
						<div class="form-wrapper">
							<label for=""> MS6 *</label>
							<input type="text" class="form-control" placeholder="MS6" name="MS6">
						</div>
					</div>
					<div class="form-row">
						<div class="form-wrapper">
							<label for="">MFG *</label>
							<input type="text" class="form-control" placeholder="MGF" name="MGF">
						</div>
						<div class="form-wrapper">
							<label for=""> MFC *</label>
							<input type="text" class="form-control" placeholder="MGC" name="MGC">
						</div>
					</div>
					<div class="form-row last">
						<div class="form-wrapper">
							<label for="">Choix 01 * </label>
							<select name="sep_01" id="" class="form-control">
								<option value="">Choix_01</option>
								<option value="gl">gl</option>
								<option value="gi">gi</option>
								<option value="rt">rt</option>
							
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						<div class="form-wrapper">
							<label for=""> Choix 02 *</label>
							<select name="sep_02" id="" class="form-control">
								<option value="">Choix_02</option>

								<option value="gl">gl</option>
								<option value="gi">gi</option>
								<option value="rt">rt</option>
							
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
						&nbsp;
						<div class="form-wrapper">
							<label for=""> Choix 03 *</label>
							<select name="sep_03" id="" class="form-control">
								<option value="">Choix_03</option>
								<option value="gl">gl</option>
								<option value="gi">gi</option>
								<option value="rt">rt</option>
							</select>
							<i class="zmdi zmdi-chevron-down"></i>
						</div>
					</div>
			
					<button data-text="Book Room" name="submitcp">
						<span>submit</span>
					</button></form>
					<form action="classement.php">
					<button data-text="Goo" name="submit" style="margin-top:-151.9px ; margin-left:220px">
						<span>view</span>
					</button>
				</form>
				
			</div>
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>