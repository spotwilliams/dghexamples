<?php require 'validador.php';?>

<!DOCTYPE HTML>
<html>
	<head>
	<title>Form Validation with PHP - Demo Preview</title>
	<link rel="stylesheet" href="style.css" />
	</head>
	<body>

		<div class="maindiv">
			<div class="form_div">
			<div class="title"><h2>Form Validation with PHP.</h2></div>

			<form method="POST" action="index.php">
				<h2>Form</h2>
				
				<br>
				<hr/>
				<br>
				Name:<br><input class="input" type="text" name="name" value="">
				<span class="error">* <?php echo $nameError;?></span>
				<br>

				E-mail:<br><input class="input" type="text" name="email" value="">
				<span class="error">* <?php echo $emailError;?></span>
				<br>
				Gender:<br>
				<input class="radio" type="radio" name="gender" value="female">Female
				<input class="radio" type="radio" name="gender" value="male">Male
				<span class="error">*<?php echo $genderError;?></span>
				<br>

				Website:<br><input class="input" type="text" name="website" value="">
				<span class="error"><?php echo $websiteError;?></span>
				<br>
				Comment:<br><textarea name="comment" rows="5" cols="40"></textarea>
				<br>
				<input class="submit" type="submit" name="submit" value="Submit">
			</form>
			</div>

			</div>
		</div>
	</body>
</html>
<!--html ends here-->
