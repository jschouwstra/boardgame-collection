<?php
$auth = new User($db);
//$auth->redirectWithoutSession();
echo $_SESSION['username'];
echo "your id is:".$_SESSION['ID'];

?>