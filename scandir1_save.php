

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<title>A Touch of Class Images - Photography by Alberto Leopizzi</title>

<meta name="description" content="A Touch of Class Images - Photography by Alberto Leopizzi" />	
<meta name="keywords" content="" />
<meta name="revisit" content="1 days" />
<meta name="robots" content="index, follow" />

<style>
body, p, td { font-family:arial;font-size:11pt; }
A:link { color:black; text-decoration:underline; }
A:hover { text-decoration:none;	color:red; }
A:active { color:silver; } /* when link is clicked */
</style>

<link type="text/css" rel="stylesheet" href="floatbox/floatbox.css" />
<script type="text/javascript" src="floatbox/floatbox.js"></script>

<link rel="stylesheet" type="text/css" href="gallerystyle.css" />
      

<!-- Do not edit IE conditional style below -->
<!--[if gte IE 5.5]>
<style type="text/css">
#motioncontainer {
width:expression(Math.min(this.offsetWidth, maxwidth)+'px');
}
</style>

</head>

<body background="bg.jpg" font="arial">
<div align="center">

<table border="0" cellpadding="0" cellspacing="0" width="973" height="100%">
<tr>
<td valign="top"><img style="display: block;" border="0" src="header.gif"></td>
</tr>
<tr>
<td align="center" valign="middle" bgcolor="#afafaf">
<br><br>
<?php

$path = 'artistic/';
$dir_handle = @opendir($path) or die("Unable to open $path");
echo "<div style=\"width:900px; overflow-x:auto;\"><table border=\"0\" cellpadding=\"2\" cellspacing=\"1\" width=\"900\" bgcolor=\"black\"><tr>";
while($file = readdir($dir_handle)) {
  if (substr($file, -3) == 'jpg') {
    echo "<td bgcolor=\"white\"><img style=\"display: block;\" border=\"1\" src=\"artistic/$file\" height=\"200\"></td>";
} }
echo "</tr></table></div>";
closedir($dir_handle);

?> 
</td></tr>
<tr><td align="center" bgcolor="afafaf"><br>~~~ Click Images to Enlarge ~~~</td></tr>
<tr><td valign="bottom" align="center" height="230" bgcolor="#afafaf">
<font size="-1">P.O. Box 38081, Colorado Springs, CO 80904, 719-633-3786
<br></font><font size="-2">© 2011 Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="http://www.robinbriggs.com">Robin Briggs</a>
</font><br><br>
</div>
</td>
</tr>
</table>
</div>
</body>
</html>