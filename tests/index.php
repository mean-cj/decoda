<?php
error_reporting(E_ALL);

function debug($var) {
	echo '<pre>'. print_r($var, true) .'</pre>';
}

include '../Decoda.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Decoda</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		* { margin: 0; padding: 0; }
		body { padding: 50px; font: normal 12px Arial, Tahoma, sans-serif; color: #000; }
		h1 { font-size: 32px; }
		h2 { margin: 50px 0 15px 0; font-size: 24px; }
		code { background: beige; padding: 2px 5px; border-radius: 5px; }
		.clear { clear: both; display: block; }
		.float-right { float: right; }
		.float-left { float: left; }
		.align-left { text-align: left; }
		.align-right { text-align: right; }
		.align-center { text-align: center; }
		.align-justify { text-align: justify; }
		.decoda-quote { background: #FFFFCC; padding: 10px; margin: 0 0 15px 15px; }
		.decoda-quoteAuthor { font-weight: bold; margin-bottom: 5px; }
		.decoda-quoteAuthor .decoda-quoteDate { float: right; }
		.decoda-spoilerBody { background: #FFFFCC; padding: 10px; margin-top: 10px; }
		.decoda-code { background: #f4f4f4; padding: 10px; border-radius: 10px; }
		.decoda-alert { background: lightpink; padding: 10px; border-radius: 10px; }
		.decoda-note { background: powderblue; padding: 10px; border-radius: 10px; }
		.decoda-spoilerContent { background: palegreen; margin-top: 5px; padding: 10px; border-radius: 10px; }
		.decoda-spoilerContent .decoda-spoiler { margin-top: 10px; }
		.decoda-spoilerContent .decoda-spoilerContent { background: oldlace; }
	</style>
</head>
<body>

<h1>Decoda Tests</h1>

<?php 
$code = new Decoda('Copyright 2009-'. date('Y') .' [sup]&copy;[/sup] Miles Johnson - [url]http://milesj.me[/url]');
echo $code->parse();

$view = strtolower(isset($_GET['view']) ? $_GET['view'] : 'default');

if (file_exists($view .'.php')) {
	include $view .'.php';
} else {
	include 'default.php';
} ?>

</body>
</html>