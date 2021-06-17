<?php
require "includes/DB_Functions.php";
if(isset($_POST['folder']))
{
$folder=$_POST['folder'];
if (!file_exists($folder)) {
$kkk=mkdir($folder, 0700);
if($kkk)
{
if(folder($folder)==1)
{
echo "Created";
}
}
}
else
{
echo "File Is Already Exist";
}
}
?>

<form action="folder.php" method="POST">
<input type="text" name="folder" >
<input type="submit" value="submit">
</form>