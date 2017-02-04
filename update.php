<?php

$ID = $_POST['ID'];
$galleryname = $_POST['galleryname'];
$image = $_POST['image'];
$foldername = $_POST['foldername'];
$display = $_POST['display'];
$action = $_GET['action'];

//$con = mysql_connect("localhost", "root", "miche11e");
$con = mysql_connect("atouchofclass.db.6418905.hostedresource.com", "atouchofclass", "Phototopo1!");
if (!$con) {
     die(mysql_error());
}

$db_selected = mysql_select_db("atouchofclass", $con);
if (!$db_selected) {
     die (mysql_error());
}

if ($action == 'update')
mysql_query

("
update projects
SET galleryname = '$galleryname', image = '$image', foldername = '$foldername', display = '$display'
WHERE ID = $ID
");

if ($action == 'add')
mysql_query

("
Insert Into projects
(
galleryname,
image,
foldername,
display
)
values
( 
'$galleryname',
'$image',
'$foldername',
'$display'
)
");

mysql_close($con);

echo"<div align=\"center\"><br><br><br><br>The changes have been made.<META HTTP-EQUIV=Refresh CONTENT=\"3; URL=projects.php\">";

?>