<?php if (!defined('THINK_PATH')) exit();?><html>
<div style="text-align:center">
<head><h1>sign up</h1></head>
<form action="/github/CMS/index.php/Home/Index/doRegister" method="post">
<br /><br /><br /><br />
	<table align="center">
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>E-mail(optional):</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password1"></td>
		</tr>
		<tr>
			<td>Confirm:</td>
			<td><input type="password" name="password2"></td>
		</tr>
		<tr>
			<td>Captcha:</td>
			
			<td><input type="text" name="captcha"></td>
		</tr>
		
	</table>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="/github/CMS/index.php/Home/Index/showCaptcha" onclick=this.src="/github/CMS/index.php/Home/Index/showCaptcha/"+Math.random() style="cursor=pointer" />
			<br />
			<input type="submit" value="sign up">
</form>
</div>
</html>