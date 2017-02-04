<?php
if (isset($_GET['user'])) {
$user = $_GET['user'];
}

if (isset($_COOKIE["$user"]));
else
  header("Location: login.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>A Touch of Class Images - Photography by Alberto Lopizzi</title>

<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="description" content="A Touch of Class Images - Photography by Alberto Lopizzi" />	
<meta name="keywords" content="" />
<meta name="revisit" content="1 days" />
<meta name="robots" content="index, follow" />

<link rel="stylesheet" type="text/css" href="main.css" />

<script>

if (parent.frames.length > 0) {
    parent.location.href = self.document.location
}

</script>

</head>

<body>
<div id="container">

<div id="headerbox">
<img src="images/header.gif" width="975" height="178" border="0" alt="" usemap="#header_Map">
<map name="header_Map">
<area shape="rect" alt="" coords="360,125,463,159" href="contact.php">
<area shape="rect" alt="" coords="244,125,347,159" href="bio.php">
<area shape="rect" alt="" coords="120,125,223,159" href="galleries.php?cat=main">
<area shape="rect" alt="" coords="0,125,103,159" href="default.php">
<area shape="rect" alt="" coords="943,128,964,149" href="http://www.facebook.com/AlbertoLeopizzi" target="_blank">
<area shape="rect" alt="" coords="921,128,942,149" href="http://twitter.com/albertoleopizzi" target="_blank">
<area shape="rect" alt="" coords="899,128,920,149" href="http://www.linkedin.com/pub/alberto-leopizzi/18/325/987" target="_blank">
</map>
</div>

<div id="bodybox">
<div id="innerbodybox" align="center">
<br><br>
<br><br>
<b>Personal Projects Administration Area</b>
<br><br>

<?php

//$con = mysql_connect("localhost", "root", "miche11e");
$con = mysql_connect("atouchofclass.db.6418905.hostedresource.com", "atouchofclass", "Phototopo1!");
if (!$con) {
     die(mysql_error());
}

$db_selected = mysql_select_db("atouchofclass", $con);
if (!$db_selected) {
     die (mysql_error());
}

$query =

"select		*
from		projects";

$result = mysql_query($query);

mysql_close();

$numrows = mysql_num_rows($result);
$rows = ($numrows + 1);

$i=0;


echo"<b>Edit Existing Records</b>
<table border=\"1\" cellspacing=\"0\" cellpadding=\"3\">
<tr>
<td align=\"left\"><b>ID</b></td>
<td align=\"left\"><b>Gallery Name</b></td>
<td align=\"left\"><b>Image Name</b></td>
<td align=\"left\"><b>Folder Name</b></td>
<td align=\"left\"><b>Display</b></td>
<td align=\"left\"><b>Update</b></td>
</tr>";
while ($i < $numrows)
{

$ID = mysql_result($result, $i, "ID");
$galleryname = mysql_result($result, $i, "galleryname");
$image = mysql_result($result, $i, "image");
$foldername = mysql_result($result, $i, "foldername");
$display = mysql_result($result, $i, "display");

echo"
<form action=\"update.php?user=$user&action=update\" method=\"post\">
<tr>
<td align=\"left\"><input type=\"hidden\" name=\"ID\" value=\"$ID\">$ID</td>
<td align=\"left\"><input type=\"text\" name=\"galleryname\" value=\"$galleryname\"></td>
<td align=\"left\"><input type=\"text\" name=\"image\" value=\"$image\"></td>
<td align=\"left\"><input type=\"text\" name=\"foldername\" value=\"$foldername\"></td>";
if ($display == 'yes')
echo"
<td align=\"left\"><input type=\"radio\" name=\"display\" value=\"yes\" checked>Yes&nbsp;&nbsp;<input type=\"radio\" name=\"display\" value=\"no\">No</td>
<td align=\"left\"><input style=\"width: 125px\" type=\"submit\" value=\"Update Record\" width=\"10\"></td> 
</tr>
</form>";
else
echo"
<td align=\"left\"><input type=\"radio\" name=\"display\" value=\"yes\">Yes&nbsp;&nbsp;<input type=\"radio\" name=\"display\" value=\"no\" checked>No</td>
<td align=\"left\"><input style=\"width: 125px\" type=\"submit\" value=\"Update Record\" width=\"10\"></td> 
</tr>
</form>";

$i++;
};

$ID = ($ID + 1);
echo"
</tr>
</table>
<br>
<br>
<form action=\"update.php?user=$user&action=add\" method=\"post\">
<b>Add New Record</b>
<table border=\"1\" cellspacing=\"0\" cellpadding=\"3\">
<tr>
<td align=\"left\"><b>ID</b></td>
<td align=\"left\"><b>Gallery Name</b></td>
<td align=\"left\"><b>Image Name</b></td>
<td align=\"left\"><b>Folder Name</b></td>
<td align=\"left\"><b>Display</b></td>
<td align=\"left\"><b>Update</b></td>
</tr>
<tr>
<td align=\"left\"><input type=\"hidden\" name=\"ID\" value=\"$ID\">$ID</td>
<td align=\"left\"><input type=\"text\" name=\"galleryname\"></td>
<td align=\"left\"><input type=\"text\" name=\"image\"></td>
<td align=\"left\"><input type=\"text\" name=\"foldername\"></td>
<td align=\"left\"><input type=\"radio\" name=\"display\" value=\"yes\" checked>Yes&nbsp;&nbsp;<input type=\"radio\" name=\"display\" value=\"no\">No</td>
<td align=\"left\"><input style=\"width: 125px\" type=\"submit\" name=\"Submit\" value=\"Add New Gallery\" width=\"10\"></td>
</tr>
</table>
<br>
</form>
";

?>

</div>
</div>

<div id="footerbox">
P.O. Box 38081, Colorado Springs, CO 80904, 719-633-3786
<br>
© <?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="http://www.robinbriggs.com">Robin Briggs</a>&nbsp;&nbsp;<a href="login.php"><img border="0" src="smiley.png"></a>
</div>

</div>

</body>
</html>