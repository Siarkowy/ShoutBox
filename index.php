<html>

<head>
<meta http-equiv="Refresh" content="20">
</head>

<body>
<center>

<table width=60% border=1>
<tr><td align=left><h1>GG</h1></td></tr>
<tr><td>

<?php
 $tekst = implode("</tr></td><tr><td>", file("gg.txt"));
 echo $tekst;
?>

</td></tr>
</table>

<br>

<form action=dopisz.php method=post>

 <input type=text name=dopisz size=80><br>
 <input type=checkbox name=czysc value=czysc>CLEAR<br>
 <input type=submit value=______SEND______>
</form>

</center>
</body>

</html>
