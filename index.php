<?php
  include('data.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style2.css" rel='stylesheet' type='text/css' />
<script src="js/index.js"></script>
</head>
<body>
	<div class="main">
		<div class="login">
			<h1 class="main_h1">短信开会通知系统</h1>
			<div class="inset">
				<!--start-main-->
				<form name="login-form" action="api_demo/SmsDemo.php" method="post" onSubmit="return checkForm()">
			         <div>
			         	<h2>短信群发系统</h2>
						<span><label>开会时间</label></span>
						<input type="text" class="textbox" placeholder="请输入开会时间" name="time" id="time" onBlur="checktime()" oninput="checktime()">
					 <div>
						<span><label>开会地址</label></span>
						<input type="text" class="textbox" placeholder="请输入开会地址" name="adress" id="adress" onBlur="checkadress()" oninput="checkadress()">
					 </div>
					<div class="sign">
					<input type="button" onclick="" value="返回首页" class="submit">
						<input type="submit" value="发送短信" class="submit"/>
					</div>
					</form>
				</div>
			</div>
		<!--//end-main-->
		</div>
</body>
</html>