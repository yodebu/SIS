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
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top"><table width="98%" border="0" cellspacing="2" class="text_black">
          <tr valign="top">
            <td width="273" class="text_black_huge">Search </td>
            <td width="50%" align="right" class="gray"><div align="right"><form action = editsearch.php method="post" name="form1" class="menu" id="form1">
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
			
			$En_no=$_POST['editEn_no'];
			$name=$_POST['editname'];
			$discipline=$_POST['editdiscipline'];
			$F_name=$_POST['f_name'];
			//$semester=$_POST['semester'];
			$description=$_POST['desc'];
			$semester=$_POST['editsemester'];
			
			echo "<p class=\"text_black\"><b>The  Details of Enrollment No. &nbsp; &nbsp;".$En_no. "&nbsp; &nbsp; are Updated as following<br><br></b>";
			
			echo "Name : ";
			echo $name."<br>";
			echo "discipline : ";
			echo $discipline."<br>";
			echo "Father's Nname :";
			echo $F_name."<br>";
			echo "Description :";
			echo $description."<br>";
			echo "Semester :";
			echo $semester;
						
			include("demo.php");
			
			$Query = "UPDATE batch2003 Set Name = '$name',Discipline = '$discipline',Fathers_Name = '$F_name',Description = '$description',Semester = '$semester' where En_no = '$En_no'";

			
			
			
			$dbresult=mysql_query($Query);

			if($dbresult)
			{
				echo "<p class=\"text_black\">Thankyou for Updating the Detail.<br><br>";			
			}
			else
			{
				echo "<p class=\"text_black\">Some problem occured. Please try again <br><br>";
				
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
