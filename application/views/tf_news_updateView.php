<html>
<form action="/CodeIgniter/index.php/tf_news_c/update" method="post">
<table>
<tr><td>标题</td>
	<td><input name="title" type="text" value=<?php echo $new[0]->title?> /></td><tr>
<tr><td valign="top">内容</td>
	<td><textarea name="content" cols="60" rows="12"><?php echo $new[0]->content?></textarea></td><tr>
<tr><td>&nbsp;</td>
	<td><input name="sub" type="submit" value="提交" />
	<input name="id" type="hidden" value=<?php echo $new[0]->id;?>></td></tr>
</table>
</form>
</html>