<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>LAMP兄弟连-列表页</title>
		<link rel="stylesheet" href="../public/css/list.css"/>
	</head>
	<body>
		<!--顶部条-->
		<?php include("./head.php"); ?>
		
		<!--大盒子-->
		<div id="big">
			<!--顶部搜索条-->
			<div id="search">
				<form action="#" method="post">
					<input type="text" placeholder="让学习成为一种习惯!" name=""/>
					<select name="">
						<option value="1">帖子</option>
						<option value="2">日志</option>
						<option value="3">用户</option>
						<option value="4">板块</option>
					</select>
					<input type="submit" value="搜索"/>
				</form>
				<ul id="hot">
					<li>热搜：</li>
					<li class="red">php</li>
					<li class="red">php视频</li>
					<li class="red">php教程</li>
				</ul>
				<div id="guanzhu">
					<ul>
						<li><a href="#"><img src="../public/webpic/sina_n.png" title="关注新浪微博"/></a></li>
						<li><a href="#"><img src="../public/webpic/qq_n.png" title="添加到QQ"/></a></li>
						<li><a href="#"><img src="../public/webpic/6.gif" title="添加笔记"/></a></li>
						<li><a href="#"><img src="../public/webpic/21.gif" title="百度浏览"/></a></li>
						<li><a href="#"><img src="../public/webpic/medal.png" title="排行榜"/></a></li>
					</ul>
				</div>
			</div>
			<!--顶部搜索条结束-->
			
			<!--引导层开始-->
			<div id="yindao">
				<p><a href="#">LAMP兄弟连</a> > <a href="#">PHP技术交流</a></p>
			</div>
			<!--引导层结束-->
			
			<!--列表开始-->
			<div id="list">
				<div id="listbt">
					<div id="bkname">
						<h4>PHP技术交流</h4>
					</div>
					<div id="bzname">
						<h4>版主：远飞</h4>
					</div>
				</div>
				<div id="bkinfo">
					<div id="bklogo">
						<img src="../public/webpic/PHP.png"/>
					</div>
					<div id="tjinfo">
						<ul>
							<li>今日:<span>3</span> |</li>
							<li>主题:<span>10736</span> |</li>
							<li>贴数:<span>93546</span></li>
						</ul>
					</div>
					<div id="bkjianj">
						<p>PHP基础编程、疑难解答、学习和开发中的经验总结等。</p>
					</div>
				</div>
				<div id="page">
					<div id="pagefy">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">…537</a></li>
							<li><a href="#">下一页</a></li>
						</ul>
					</div>
					<div id="fatie">
						<a href="#"><button image="../public/webpic/fatie.png">发帖</button></a>
					</div>
				</div>
				<div id="tiezifl">
					<ul>
						<li class="gaol"><a href="#">全部</a></li>
						<li><a href="#">精华</a></li>
						<li><a href="#">投票</a></li>
						<li><a href="#">悬赏</a></li>
						<li><a href="#">商品</a></li>
					</ul>
				</div>
				<div id="tiezifl2">
					<ul>
						<li><a href="#">全部</a> |</li>
						<li><a href="#">已解决</a> |</li>
						<li><a href="#">我要提问</a> |</li>
						<li><a href="#">PHP</a> |</li>
						<li><a href="#">其他</a> |</li>
						<li><a href="#">经验技巧</a> |</li>
					</ul>
				</div>
				<div id="biaotou">
					<ul>
						<li class="tiezibt">排序:<a href="#">最新发帖</a>|<a href="#">最后回复</a></li>
						<li><a href="#">作者</a></li>
						<li><a href="#">回复</a></li>
						<li><a href="#">最后发表</a></li>
					</ul>
				</div>
				<div id="listks">
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
					<div class="invitationzt">
						<div class="invitalogo">
							<img src="../public/webpic/tongzhi.png"/>
						</div>
						<div class="invitationbt">
							<a href="#">站点公告：《跟兄弟连学PHP》正式发售啦！</a>
						</div>
						<div class="custorzt">
							<img src="../public/webpic/zuanshi.png"/>
						</div>
						<div class="custor">
							<a href="#">海峰</a>
						</div>
						<div class="reply">
							<a href="#">27/5961</a>
						</div>
						<div class="last">
							<a href="#">20分钟前</a>
						</div>
					</div>
				</div>
				<div id="page">
					<div id="pagefy">
						<ul>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">…537</a></li>
							<li><a href="#">下一页</a></li>
						</ul>
					</div>
					<div id="fatie">
						<a href="#"><button image="../public/webpic/fatie.png">发帖</button></a>
					</div>
				</div>
			</div>
			<!--列表结束-->
		</div>
		<div id="clear"></div>
		<!--大盒子结束-->
			
		<!--页面尾开始-->
		<?php include("./foot.php"); ?>
	</body>
</html>