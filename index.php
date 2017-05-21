<html>
<head>
	<meta charset="UTF-8">
	<base href="http://kej.tw/flvretriever/">
	<title>Quick Kej's FLV Retriever</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
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
if (isset($_GET["url"]) && $_GET["url"] !== "") {
	$html = file_get_contents("http://kej.tw/flvretriever/youtube.php?videoUrl=".$_GET["url"]);
	echo $html;
	preg_match("/請先<a.*href=\"(.*)\">下載此檔案/", $html, $match);
	?>
	<script>
		videoInfo.value="<?php echo file_get_contents($match[1]); ?>";
		getYouTubeUrl();
	</script>
<?php
}
?>
</body>
</html>
