<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ROHIT FROM BAIJNATH</title>
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
<style type="text/css">
<!--
.style1 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
</style>
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
    <td height="206" align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top"><table width="98%" border="0" cellspacing="2" class="text_black">
          <tr valign="top">
            <td width="273" class="text_black_huge">Search </td>
            <td width="50%" align="right" class="gray"><div align="right"><form action = search.php method="post" name="form1" class="menu" id="form1">
                        <label></label>
                      <label>
                      <input name="searchall" type="text" class="searchall" size="25" maxlength="200" />
                      <input name="Search" type="submit" class="menu" id="Search" value="Search" />
                      </label>
            </form></div>            </td>
          </tr>
          <tr>
            <td colspan="3" class="text_black"><p align="center" class="style1"><a href="information2003Search.php" class="style2">Go Back</a></p>              </td>
            </tr>
          <tr class="text_black">
            <td colspan="3">
			<br /><br />
			<?php
			$searchall=$_POST['searchall'];
			
			include("demo.php");
			
			$Query="SELECT * from batch2003 where En_no = '$searchall' ";
			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{
					while($row=mysql_fetch_row($dbresult))
					{
				echo "Enrollment no  :  " . "$row[0] .<br><br><br>";
				echo "Name  :  "."$row[1].<br><br><br>";
				echo "Father's Name  :  ". "$row[3].<br><br><br>";
				echo "Discipline  :  ". "$row[2].<br><br><br>";
				echo "Semester  :  ". "$row[5].<br><br><br>";
				echo "Description  :  "."$row[4].<br><br><br>";
                
				}	
			}	
			
			else
			{
				
			}	
			
			
		
			
			
				
					?>
			
			
			
			&nbsp;</td>
            </tr>
          <tr class="text_black">
            <td colspan="2">&nbsp;</td>
            </tr>
          
        </table>
        <p align="justify" class="text_black_huge">&nbsp;</p>
          <p align="justify" class="text_black_huge">&nbsp;</p>          </td>
      </tr>
    </table>      </td>
  </tr>
  <tr class="black">
    <td align="center" valign="top" class="text_white">&nbsp;</td>
  </tr>
</table>
</body>
</html>
