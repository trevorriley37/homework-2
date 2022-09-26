<?php require_once("header.php"); ?>




<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>





<form action="post.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>




<?php require_once("footer.php"); ?>
