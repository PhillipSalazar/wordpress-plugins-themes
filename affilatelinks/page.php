<?php

if (!empty($_POST['data']))
{
    $data = $_POST['data'];
}

?>
<div class="wrap">
<h1>Your Plugin Page Title</h1>
<form method="post" action="affilatelinks.php">
  <input type="text" name="data">
  <input type="submit" name="submit">
</form>
<?php echo $data; ?>
</div>
