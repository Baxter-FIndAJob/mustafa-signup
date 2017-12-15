<!DOCTYPE html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/app.css" type="text/css" rel="stylesheet">
	<title>Login Screen</title>
</head>
<body>
	<div class="header">
		<div class="pfp">
		</div>
	</div>
	<div class="register">
		<form method="post">

			<!-- EMAIL INPUT -->
			<div class="inputWithIcon" name="email_input" data-type="input">
				<input type="email" data-type="text" placeholder="Email" id="form_email" name="email">
				<i name="text_icon" class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
				<i name="error_icon" class="fa fa-exclamation-circle fa-lg fa-fw" aria-hidden="true"></i>
			</div>

			<!-- PASSWORD INPUT -->
			<div class="inputWithIcon" name="password1_input" data-type="input">
				<input type="password" data-type="text" placeholder="Password" maxlength="15" class="password1" id="form_password" name="password">
				<i name="text_icon" class="fa fa-lock fa-lg fa-fw" aria-hidden="true"></i>
			</div>

			<div class="error" style="color: red;"><?php echo $message; ?></div>

			<input type="hidden" name="action" value="login" />

			<br />
 			<button>Submit</button>
		</form>
	</div>
</body>