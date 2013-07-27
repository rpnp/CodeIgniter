<html>
<form action="/CodeIgniter/index.php/tf_news_c/update" method="post">
标题<input name="title" type="text" value=<?php echo $new[0]->title?> /><br />
内容<textarea name="content" cols="60" rows="20"><?php echo $new[0]->content?></textarea><br />
<input name="sub" type="submit" value="提交" />
<input name="id" type="hidden" value=<?php echo $new[0]->id;?>>
</form>
</html>