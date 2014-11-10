<?php
setcookie('idu',"");
setcookie('acceso',"");
session_start();
session_unset();
session_destroy();
print"<meta http-equiv='refresh' content='0;
url=index.php?msg=1'>";
?>
