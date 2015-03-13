<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> ROHIT FROM BAIJNATH</title>
<link href="fonts.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
table.menu {
	font-size:100%;
	position:absolute;
	visibility:hidden;
	width: 177px;
	background-color: #E5E5E5;
}
-->
</style>


<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>



<link href="../fonts.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div align="center"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="750" height="18" align="center" valign="top" class="yellow"><span class="yellow"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr class="white">
    <td align="left" valign="top" class="text_black_huge"><p>All Information </p>
      <p align="center" class="text_black_bold"><a href="information2003Search.php">Go Back </a></p>
      <p>
	<?php

include ('demo.php');
$Query="SELECT * from batch2003";
$dbresult=mysql_query($Query);

if(mysql_num_rows($dbresult) >0)
{
echo "<table width='90%' border='0' align='center' cellpadding='2' cellspacing='2' class='text_black'>";
echo "              <tr align=\"center\" valign=\"top\" bgcolor=\"#0E1C29\" class='yellow'>";
echo "                 <td bgcolor='#0E1C29' class=\"yellow\">Enrollment no</td>";
echo "                 <td>Name</td>";
echo "                 <td>Discipline</td>";
echo "                 <td>Father's Name</td>";
echo "                 <td>Semester</td>";
echo "                 <td>Description</td>";
echo "                 <td>Image</td>";
echo "               </tr>";

while($row=mysql_fetch_row($dbresult))
{
echo "<tr class=\"gray\">";
                echo " <td width='20%'>".$row[0]."</td>                ";
                echo " <td width='27%'>".$row[1]."</td>                ";
                echo " <td width='18%'>".$row[2]."</td>                ";
                echo " <td width='35%'>".$row[3]."</td>                ";
				 echo " <td width='35%'>".$row[5]."</td>                ";
				echo " <td width='35%'>".$row[4]."</td>                ";
				 $val6=$row[6]; 
        echo "<td><img src = '$val6' height = 100 width = 100></td>    ";
                echo "</tr>";
}
echo"</table>";
}		//if case ends here
?>
  <tr class="black">
    <td align="center" valign="top" class="text_white">&nbsp;</td>
  </tr>
  
</table>
</body>
</html>
