<?php
$s = mysql_connect("127.0.0.1", "root", "root") or die(mysql_error());
echo "OK! connected.";
mysql_close($s);
?>