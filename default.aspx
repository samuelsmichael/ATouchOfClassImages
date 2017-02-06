<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="default.aspx.cs" Inherits="ATouchOfClassImages._default" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
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
<br>
<b>Photo Galleries</b>
<br><br>
<table border="0" cellpadding="0" cellspacing="4" bgcolor="#afafaf">
<tr>
<td align="center" width="118" height="200" valign="top">
<a href="galleries1.php?cat=artistic"><img border="0" src="artistic.jpg"></a>
<br>
<a href="galleries1.php?cat=artistic">Artistic Gallery</a>
</td>
<td align="center" width="118" height="200" valign="top">
<a href="galleries1.php?cat=commercial"><img border="0" src="commercial.jpg"></a>
<br>
<a href="galleries1.php?cat=commercial">Commercial Gallery</a>
</td>
<td align="center" width="118" height="200" valign="top">
<a href="galleries1.php?cat=headshots"><img border="0" src="headshots.jpg"></a>
<br>
<a href="galleries1.php?cat=headshots">Headshots Gallery</a>
</td>
<td align="center" width="118" height="200" valign="top">
<a href="galleries1.php?cat=fashion"><img border="0" src="fashion.jpg"></a>
<br>
<a href="galleries1.php?cat=fashion">Fashion & Glamour Gallery</a>
</td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td align="center" width="118" height="200" valign="top">
<a href="galleries1.php?cat=dancegallery"><img border="0" src="dancegallery.jpg"></a>
<br>
<a href="galleries1.php?cat=dancegallery">Dance Gallery</a>
</td>

<td align="center" width="118" height="200" valign="top">
<a href="galleries1.php?cat=country"><img border="0" src="country.jpg"></a>
<br>
<a href="galleries1.php?cat=country">Nature & Country Gallery</a>
</td>

<td align="center" width="118" height="200" valign="top">
<a href="galleries1.php?cat=filmproduction"><img border="0" src="filmproduction.jpg"></a>
<br>
<a href="galleries1.php?cat=filmproduction">Film Production Gallery</a>
</td>

<td align="center" width="118" height="200" valign="top">
<a href="projects.php"><img border="0" src="projects.jpg"></a>
<br>
<a href="projects.php">Personal Projects Gallery</a>
</td>
</tr>
</table>
<br><br>
</div>
</div>

<div id="footerbox">
P.O. Box 38081, Colorado Springs, CO 80904, 719-633-3786
<br>
© <% =DateTime.Today.ToString() %><?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="mailto:diamondsoftware222@gmail.com">Diamond Software</a>&nbsp;&nbsp;<a href="login.php"><img border="0" src="smiley.png"></a>
</div>

</div>

</body>
</html>
