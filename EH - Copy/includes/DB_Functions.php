<?php
require "connection.php";
function Signup($name,$password,$email,$branch)
{
$db = new PDO('mysql:host=localhost;dbname=eh;charset=utf8', 'enginnsl', 'kushaldhole1');
$sql = $db->prepare("INSERT INTO users (username,password,email,branch) VALUES (:name,:password,:email,:branch)");
$sql->bindParam(':name', $name);
$sql->bindParam(':password', $password);
$sql->bindParam(':email', $email);
$sql->bindParam(':branch', $branch);
$sql->execute();
if($sql)
{
return 1;
}
else
{
return 0;
}
}
?>
<?php
function NewsLetter($email)
{
$db = new PDO('mysql:host=localhost;dbname=eh;charset=utf8', 'enginnsl', 'kushaldhole1');
$sql = $db->prepare("INSERT INTO newsletter (email) VALUES (:email)");
$sql->bindParam(':email', $email);
$sql->execute();
if($sql)
{
return 1;
}
else
{
return 0;
}
}
?>