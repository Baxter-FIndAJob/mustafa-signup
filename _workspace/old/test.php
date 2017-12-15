<?php include("server.php"); ?>
<!DOCTYPE html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="WebsiteTest.css" type="text/css" rel="stylesheet">
	<title>WebsiteTest</title>
</head>
<body>
	<div class="header">
		<div class="pfp">
		</div>
	</div>
	<div class="register">
		<form>
			<div class="inputWithIcon" name="name_input" data-type="input">
				<input type="text" data-type="text" placeholder="Full Name" maxlength="25" id="form_name">
				<i name="text_icon" class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
				<i name="correct_icon" class="fa fa-check fa-lg fa-fw" aria-hidden="true"></i>
			</div>
			<div class="inputWithIcon" name="email_input" data-type="input">
				<input type="email" data-type="text" placeholder="Email" id="form_email">
				<i name="text_icon" class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
				<i name="error_icon" class="fa fa-exclamation-circle fa-lg fa-fw" aria-hidden="true"></i>
			</div>
			<div class="inputWithIcon" name="password1_input" data-type="input">
				<input type="password" data-type="text" placeholder="Password" maxlength="15" class="password1" id="form_password">
				<i name="text_icon" class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>

			</div>
			<div class="inputWithIcon" name="password2_input" data-type="input">
				<input type="password" data-type="text" placeholder="Verify Password" maxlength="15" id="form_retype_password">
				<i name="text_icon" class="fa fa-unlock-alt fa-lg fa-fw" aria-hidden="true"></i>
			</div>
			<div class="messageUpdates" name="message_Updates">
				<div class="toggle_button" data-type="button">
					<h4>Allow us to message you about upcoming updates, notifactions via Email.</h4>
					<input type="checkbox">
						<div class="checkbox_button"/>
					</input>
				</div>
			</div>
		</form>
	</div>
</body>