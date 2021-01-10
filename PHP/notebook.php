<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>notebook</title>
<style>body{text-align: center}</style>
</head>

<body>
	<?php
	if(isset($_GET["sub"])){
		$fp=fopen('..\\TXT\\note.txt','ab+');
        fwrite($fp,'-----------------'.date('Y-m-d H:i:s').'-----------------<br>'."\n");
        fwrite($fp,$_GET['in']);
        fwrite($fp,'<br>'."\r\n\r\n\r\n");
        fclose($fp);
		echo "\"".$_GET['in']."\""."<br>笔记写入成功";
	}
    elseif(isset($_GET["cl"])){
		//unlink("..\\TXT\\note.txt");
		//touch("..\\TXT\\note.txt");
		$fp=fopen('..\\TXT\\note.txt','w');
		fclose($fp);
		echo "笔记已清空";
	}
	elseif(isset($_GET["pr"])){
		readfile('..\\TXT\\note.txt');
	}
	else{
		echo " ";
	}
	?>
	<form method="get" name="frm" action="">
		<textarea name="in" cols="40" rows="6">输入笔记</textarea>
		<br>
		<input type="submit" name="sub" value="提交">
		<br>
		<br>
		<input type="submit" name="pr" value="打印笔记">
		<br>
		<br>
		<input type="submit" name="cl" value="清除笔记">
	</form>
</body>
</html>