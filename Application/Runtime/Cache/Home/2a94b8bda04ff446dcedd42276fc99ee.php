<?php if (!defined('THINK_PATH')) exit();?><html>
	<title>Please Login</title>
	<body>
		<h1 align="center">Please enter your user info</h1>
		<div style="width:100%;text-align:center">
		<form action="/github/CMS/index.php/Home/Index/verifyLoginInput" method="post">
			User Name:<br />
			<input type="text" name="username">
			<br />
			Password:<br />
			<input type="password" name="password">
			<br />
			Captcha:<br />
			<img height="40" width="110" src="/github/CMS/index.php/Home/Index/showCaptcha" onclick=this.src="/github/CMS/index.php/Home/Index/showCaptcha/"+Math.random() style="cursor:pointer;" />
			<br />
			<input type="text" name="captcha">
			<br />
			<input type="submit" value="sign in"> <a href="index.php/Home/Index/register">sign up</a>
			<br />
		</form>
		</div>
	</body>
</html>