
<?php
$cat = $_GET['cat'];
if ($cat=='filmproduction') $title = 'Film Production';
if ($cat=='artistic') $title = 'Artistic';
if ($cat=='commercial') $title = 'Commercial';
if ($cat=='headshots') $title = 'Headshots';
if ($cat=='fashion') $title = 'Fashion and Glamour';
if ($cat=='country') $title = 'Nature and Country';
if ($cat=='cupdress') $title = 'Cupdress';
if ($cat=='dance') $title = 'Dance';
if ($cat=='italy') $title = 'Italy';
if ($cat=='dancegallery') $title = 'Dance';
if ($cat=='chopstickdress') $title = 'Chopstick Dress';
if ($cat=='misc') $title = 'Miscellaneous';

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

<link type="text/css" rel="stylesheet" href="floatbox/floatbox.css" />
<script type="text/javascript" src="floatbox/floatbox.js"></script>

<script>

if (parent.frames.length > 0) {
    parent.location.href = self.document.location
}

</script>

</head>

<body>

<script language=JavaScript>
<!--

var message="Function Disabled!";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// --> 
</script>

<div id="container">

<div id="headerbox">
<img src="images/header.gif" width="975" height="178" border="0" alt="" usemap="#header_Map">
<map name="header_Map">
<area shape="rect" alt="" coords="360,125,463,159" href="contact.php">
<area shape="rect" alt="" coords="244,125,347,159" href="bio.php">
<area shape="rect" alt="" coords="120,125,223,159" href="galleries.php">
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
<b><?php echo "$title";?> Gallery</b>
<br><br>

<?php

$path = "$cat/";
$dir_handle = @opendir($path) or die("Unable to open $path");
$filecount = count(glob($path . "*.jpg"));
echo "<div style=\"width:900px; overflow-x:auto;\"><table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" bgcolor=\"black\"><tr>";
while($file = readdir($dir_handle)) {
  if (substr($file, -3) == 'jpg') {
    echo "<td bgcolor=\"white\"><a href=\"$cat/$file\" rel=\"floatboxGroup\"><img style=\"border: 1px solid #000000; display: block;\" border=\"0\" src=\"$cat/$file\" height=\"166\"></a></td>";
} }
echo "</tr></table></div>";
closedir($dir_handle);

?>

</td></tr>
<tr><td align="center" bgcolor="afafaf"><?php if ($filecount > 6) echo "<img border=\"0\" src=\"scroll.jpg\">"; ?><br><font size="-1">(Click Images to Enlarge)<?php if ($cat == 'cupdress' or $cat == 'dance' or $cat == 'italy' or $cat == 'chopstickdress' or $cat == 'misc') echo "<br><br><a href=\"projects.php\">Back to Projects</a></font>";?>
</td>
</tr>
</table>
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