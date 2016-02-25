<?php
$auth = new Auth($db);
//$auth->redirectWithoutSession();
echo $_SESSION['username'];
echo "your id is:".$_SESSION['ID'];

?>