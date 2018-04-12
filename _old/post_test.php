<?php
/*
if (isset($_REQUEST['fname']) && $_REQUEST['fname'] != '') {
	echo "Med \$_REQUEST!<br />";
	echo "Hello " . $_POST['fname'] . "!";
}
*/

if (isset($_POST['fname']) && $_POST['fname'] != '') {
	echo "Med \$_POST!<br />";
	echo "Hello " . $_POST['fname'] . "!";
}

?>

<html>
<head>
    <title>Post Test</title>
</head>
<body>
    <form action="post_test.php" method="post">
        <input type="text" name="fname" /><br />
        <input type="submit" value="Kör!" />
    </form>
</body>
</html>
