<?php

/**
 * @Author: SUPERMAN
 * @Date:   2022-06-13 22:49:40
 * @Last Modified by:   SUPERMAN
 * @Last Modified time: 2022-06-14 10:38:26
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $info; ?></title>
	<!-- View Port -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
	<!-- CSS Reset -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
	<!-- Milligram CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

</head>
<body>
	<main>

		<div class="container">
			<div class="row">
				<div class="column column-50 column-offset-25">
					<form method="POST" action="task.php">
					  	<fieldset>
					  		<input type="hidden" name="id" value="">
						    <input type="text" name="fname" placeholder="First Name" id="fname">

						    <input type="text" name="lname" placeholder="Last Name" id="lname">

						    <input type="number" name="roll" placeholder="Roll" id="roll">

						    <input class="button-primary" type="submit" name="submit" value="Save">
						    <input type="hidden" name="action" value="add">
					  	</fieldset>
					</form>
				</div>
			</div>
		</div>


	</main>
</body>
</html>