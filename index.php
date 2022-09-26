<?php require_once("header.php"); ?>



function MyFunction() {
  echo "This is my function.";
}


MyFunction();




<form action="post.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>




<?php require_once("footer.php"); ?>
