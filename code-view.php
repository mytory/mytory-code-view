<?php
if( ! isset($_POST['pre']) OR empty($_POST['pre'])){
    echo "I need codes.";
    exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Code View</title>
    <link rel="stylesheet" href="http://yandex.st/highlightjs/7.3/styles/monokai.min.css">
    <script type="text/javascript" src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
    <script type="text/javascript">hljs.initHighlightingOnLoad();</script>
</head>
<body style="margin:0;background:#272822">
    <pre style="margin:0"><code><? echo $_POST['pre']?></code></pre>
</body>
</html>