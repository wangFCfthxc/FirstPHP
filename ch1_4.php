<?php
// 注意URL
print <<<_HTML_
<form method="get" action="$_SERVER[PHP_SELF]">
Your Name: <input type="text" name="user" />
<br />
<button type="submit">Say Hello</button>
</form>
_HTML_;
?>