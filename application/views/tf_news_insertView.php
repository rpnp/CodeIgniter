<html>
<head>
<link rel='stylesheet' media="screen" type='text/css' href='/CodeIgniter/css/views.css' />
</head>
<body>
<div id="bigBox">
	<div id="left">
        <ul>
        <li><a href="/CodeIgniter/index.php/Tf_news_c/newsList">首页</a></li>
        <li><a href="/CodeIgniter/index.php/Tf_news_c/newsList">新闻列表</a></li>
        <li><a href="/CodeIgniter/index.php/Tf_news_c/insertView">添加新闻</a></li>
        </ul>
    </div>
    <div id="right">

<form action="/CodeIgniter/index.php/tf_news_c/insert" method="post">
<table>
<tr><td>标题</td>
	<td><input name="title" type="text" size="30" /></td><tr>
<tr><td valign="top">内容</td>
	<td><textarea name="content" cols="70" rows="7"></textarea></td><tr>
<tr><td>&nbsp;</td>
	<td><input class="button" name="sub" type="submit" value="提交" /></td></tr>
</table>
</form>

</div></div></body>
</html>