<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Work</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="/style/style.css">
</head>
<body>
	<?php 
		if($_COOKIE['user'] == ''):
	?>
	<div class="back-fon">
		<div class="container">
			<div class="column">
				<div class="column__title">
					<h2>Login To Your Account / Register New</h2>
				</div>
				<div class="wrap">
					<div class="header">
						<div class="header__icon">
							<img class="header__icon-icon" src="/image/icon.png" alt="Icon">
						</div>
						<div class="header__title">
							<h1>Login To Your Account / Register New</h1>
						</div>
					</div>
					<div class="main">
						<!-- Form login -->
						<div class="main__login-form">
							<div class="main__form-title">
								<h3>LogIn</h3>
							</div>
							<form action="/includes/form_login.php" method="POST">
								<div class="items">
									<div class="item">
										<input class="item__input userName" type="name" id="check1" name="userName">
										<label class="item__label" for="check1">User Name</label>
									</div>
									<div class="item">
										<input class="item__input password" autocomplete="on" type="password" id="check2" name="password">
										<label class="item__label" for="check2">Password</label>
									</div>
									<div class="items__row">
										<div class="item__row">
											<input class="item__input-checkbox checkbox" type="checkbox" id="check3" name="checkbox">
											<label class="item__label-checkbox checkbox-text" for="check3">
												<span tooltip='You no longer need to enter a password every time you use the site'>Remember My password</span>
											</label>
										</div>
										<div class="item__row">
											<button class="item__button-login">Login</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!-- Form register -->
						<div class="main__register-form">
							<div class="main__form-title">
								<h3>Register</h3>
							</div>
							<form id="form_reg" action="/includes/form_request.php" method="POST">
								<div class="items">
									<div class="item">
										<input class="item__input email require" type="email" id="check4" name="email">
										<label class="item__label" for="check4">Email</label>
									</div>
									<div class="item">
										<input class="item__input userName require" type="name" id="check5" name="userName">
										<label class="item__label" for="check5">User Name</label>
									</div>									
									<div class="item">
										<input class="item__input password require" type="password" id="check6" name="password">
										<label class="item__label" for="check6">Password</label>
									</div>
									<div class="submit">
										<button class="item__button-register">Register</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php else: ?>
		<div class="center">
			<h1>Hello <?=$_COOKIE['user']?> . Click <a href="/includes/logout.php">here</a> to exit</h1>
		</div>
	<?php endif;?>
	<script type="text/javascript" src="/script/script.js"></script>
</body>
</html>