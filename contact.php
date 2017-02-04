
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
<area shape="rect" alt="" coords="120,125,223,159" href="galleries.php">
<area shape="rect" alt="" coords="0,125,103,159" href="default.php">
<area shape="rect" alt="" coords="943,128,964,149" href="http://www.facebook.com/AlbertoLeopizzi" target="_blank">
<area shape="rect" alt="" coords="921,128,942,149" href="http://twitter.com/albertoleopizzi" target="_blank">
<area shape="rect" alt="" coords="899,128,920,149" href="http://www.linkedin.com/pub/alberto-leopizzi/18/325/987" target="_blank">
</map>
</div>

<div id="bodybox">
<div id="innerbodybox">
<br><br>
<br>
<div align="center">
<b>Contact Form</b>
<form name="validation" onSubmit="return checkbae()" action="send_mail.php" method="post">
<table border="0" cellpadding="0" cellspacing="2">
<tr>
<td valign="bottom" align="right" nowrap>
First Name:
</td>
<td align="left">
<input type="text" name="fname" size="25">
</td>
</tr>
<tr>
<td valign="bottom" align="right">
Last Name:
</td>
<td align="left">
<input type="text" name="lname" size="25">
</td>
</tr>
<tr>
<td valign="bottom" align="right">
E-mail Address:
</td>
<td align="left">
<input type="text" name="email" size="25">
</td>
</tr>
<tr>
<td colspan="2">
<br><br>
Please enter your comments or questions below:
<br>
<textarea name="comments" cols="45" rows="7"></textarea>
</td>
</tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<font size ="-1"> ...or... </font>
<input type="reset" value="Clear Form">
<p><br>
</td>
</tr>
</table>
</form>
</div>
</div>
<div id="footerbox">
P.O. Box 38081, Colorado Springs, CO 80904, 719-633-3786
<br>
© <?php print(Date("Y")); ?> Alberto Leopizzi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web Services by <a href="http://www.robinbriggs.com">Robin Briggs</a>&nbsp;&nbsp;<a href="login.php"><img border="0" src="smiley.png"></a>
</div>
</div>

<script language="JavaScript1.2">

var testresults
function checkemail(){
var str=document.validation.email.value
var filter=/^.+@.+\..{2,3}$/
if (filter.test(str))
testresults=true
else{
alert("Please input a valid email address!")
testresults=false
}
return (testresults)
}
</script>

<script>
function checkbae(){
if (document.layers||document.all)
return checkemail()
else
return true
}
</script>

</body>
</html>
