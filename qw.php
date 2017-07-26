<?php
if(isset($_POST))
{
  print_r($_POST);
}
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <input type="text" name="data" value="1" />
  <input type="submit" value="Submit" />
</form>