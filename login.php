<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>LAMP兄弟连-登陆页</title>
		<link rel="stylesheet" href="../public/css/login.css"/>
	</head>
	<body>
		<!--顶部条-->
		<?php include("./head.php"); ?>
		
		<!--大盒子-->
		<div id="big">
			<div class="btfont">
				<h3>注册</h3>
			</div>
			<div class="biaodan">
				<div class="tishi">
					<p>错误次数不得超过五次，否则会被锁定！</p>
				</div>
				<form action="#" method="post">
					<table width="380" border="0" cellspacing="15">
						<tr>
							<td class="you">用户名<span> *</span></td>
							<td class="zuo"><input type="text" name=""/></td>
						</tr>
						<tr>
							<td class="you">密  码<span> *</span></td>
							<td class="zuo"><input type="password" name=""/></td>
						</tr>
						<tr style="text-align:center;">
							<td class="btn" colspan="2">
								<input type="submit" value="登陆"/>
								<input type="reset" value="重置"/>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="butdl">
				<h3>还没有账号？</h3>
				<a href="#"><button>去注册</button></a>
			</div>
		</div>
		<div id="clear"></div>
		<!--大盒子结束-->
			
		<!--页面尾开始-->
		<div id="footer">
		<?php include("./foot.php"); ?>
		
	</body>
</html>