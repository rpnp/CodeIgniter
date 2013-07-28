<?php header("Content-Type:text/html;charset=utf-8");?>
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
    

<table>
<?php
for($i=0;$news[$i];$i++){
	echo "<tr>";
	echo "<td>".$news[$i]->title."<td>";
	echo "<td><a href=/CodeIgniter/index.php/Tf_news_c/del?id=".$news[$i]->id.">删除|</a></td>";
	echo "<td><a href=/CodeIgniter/index.php/Tf_news_c/updateView?id=".$news[$i]->id.">编辑</a><br /></td>";
	echo "</tr>";
}
?>
</table>

</body>

</div></div></body>
</html>