<html>
<head>
	<!-- Stylesheet link-->
	<link rel="stylesheet" type="text/css" href="meditate.css">
	<!-- Google font link-->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
	<title>Meditation Timer</title>

	<script type="text/javascript" src="jquery-1.11.3.js"></script>
	<script type="text/javascript" src="effects.js"></script>

</head>
<body>
	<div class="main_text">
		<p>How many minutes would you like to meditate?</p>
	</div>
	<div class="timer clickable-text">
		<form action="" method="post" >
			<input type="text" value="15" name="time" class="clickable-text" id="time" required autofocus>
				<br>
				<br>
			<input type="submit" value="Start Timer" name="start_timer" class="clickable-text">
		</form>
	</div>
</body>
</html>