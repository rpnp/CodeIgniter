<?php header("Content-Type:text/html;charset=utf-8");?>
<html>
<body>
<a href="/CodeIgniter/index.php/Tf_news_c/insertView">添加新闻</a>
<?php 
$i=0;
while($news[$i++]){
	echo $news[$i]->title;
	echo "<a href=/CodeIgniter/index.php/Tf_news_c/del?id=".$news[$i]->id.">【删除】</a>";
	echo "<a href=/CodeIgniter/index.php/Tf_news_c/updateView?id=".$news[$i]->id.">【编辑】</a><br />";
}
?>
</body>
</html>