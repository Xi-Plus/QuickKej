<html>
<head>
<base href="http://kej.tw/flvretriever/">
<meta charset="UTF-8">
<title>Fast Kej's FLV Retriever</title>
</head>
<body>
<center>
利用<a href="http://kej.tw/flvretriever/" target="_blank">Kej's FLV Retriever</a>並且自動填入需下載的檔案
<form action="" method="get">
	Youtube 網址: <input type="url" name="url">
	<input type="submit" value="送出" />
</form>
</center>
<hr>
<?php
iF(@$_GET["url"]!=""){
	$html=file_get_contents("http://kej.tw/flvretriever/youtube.php?videoUrl=".$_GET["url"]);
	echo $html;
	preg_match("/請先<a.*href=\"(.*)\">下載此檔案/",$html,$match);
	?>
	<script>
		videoInfo.value="<?php echo file_get_contents($match[1]); ?>";
		getYouTubeUrl();
	</script>
	<hr>
<?php
}
?>
<center>
<?php
include("../function/developer.php");
?>
</center>
</body>
</html>