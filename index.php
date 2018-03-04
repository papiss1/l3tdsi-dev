<?php
$page = htmlentities($GET['page']);
$pages=scandir('pages');
if (!empty($page) && in_array($GET['page'].".php",$pages)) {
	$content='pages/'.$_GET['page'].".php";
}	
else{
	header("Location:index.php?page=login");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<div id="content">
		<?php
			include($content);
		?>
	</div>

</body>
</html>