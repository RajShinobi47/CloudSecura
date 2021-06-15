<?php
require "connection.php";

function Video_Upload($title,$link,$image)
{
$db = new PDO('mysql:host=localhost;dbname=eh;charset=utf8', 'enginnsl', 'kushaldhole1');
$sql = $db->prepare("INSERT INTO videos (title,links,image) VALUES (:title,:link,:images)");
$sql->bindParam(':title', $title);
$sql->bindParam(':link', $link);
$sql->bindParam(':images', $image);
$sql->execute();
$tmp_name=$_FILES['file']['tmp_name'];
$location='../images/video/';
move_uploaded_file($tmp_name,$location.$image);
if($sql)
{
return 1;
}
else
{
return 0;
}
}
function delete_vid($id)
{
$db = new PDO('mysql:host=localhost;dbname=eh;charset=utf8', 'enginnsl', 'kushaldhole1');
$sql = $db->prepare("delete from videos where id=:title");
$sql->bindParam(':title', $id);
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
function Product_Upload($name,$brand,$price,$description,$diagram,$image1,$image2,$image3,$image4,$category)
{
$db = new PDO('mysql:host=localhost;dbname=eh;charset=utf8', 'enginnsl', 'kushaldhole1');
$sql = $db->prepare("INSERT INTO eh_products (name,brand,price,description,diagram,image1,image2,image3,image4,category)
VALUES (:name,:brand,:price,:description,:diagram,:image1,:image2,:image3,:image4,:category)");
$sql->bindParam(':name', $name);
$sql->bindParam(':brand', $brand);
$sql->bindParam(':price', $price);
$sql->bindParam(':description', $description);
$sql->bindParam(':diagram', $diagram);
$sql->bindParam(':image1', $image1);
$sql->bindParam(':image2', $image2);
$sql->bindParam(':image3', $image3);
$sql->bindParam(':image4', $image4);
$sql->bindParam(':category', $category);
$sql->execute();
$tmp_name1=$_FILES['diagram']['tmp_name'];
$tmp_name2=$_FILES['file1']['tmp_name'];
$tmp_name3=$_FILES['file2']['tmp_name'];
$tmp_name4=$_FILES['file3']['tmp_name'];
$tmp_name5=$_FILES['file4']['tmp_name'];
$location='../product/images/products/';
move_uploaded_file($tmp_name1,$location.$diagram);
move_uploaded_file($tmp_name2,$location.$image1);
move_uploaded_file($tmp_name3,$location.$image2);
move_uploaded_file($tmp_name4,$location.$image3);
move_uploaded_file($tmp_name5,$location.$image4);
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
function delete_prod($id)
{
$db = new PDO('mysql:host=localhost;dbname=eh;charset=utf8', 'enginnsl', 'kushaldhole1');
$sql = $db->prepare("delete from eh_products where id=:title");
$sql->bindParam(':title', $id);
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
