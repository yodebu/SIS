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
</head>

<body>
<div align="center"><span class="yellow">


<SCRIPT LANGUAGE="JavaScript">

function verify() 
{

   var cname;
   with(window.document.form1)
   {
      cname    = searchname;
	  }
	  if(cname.value == '')
	  {
   
      alert('Please enter your name');
     cname.focus();
      return false;
   }
   }


</script>
</span>
</div>
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
            <td width="50%" align="right" class="gray"><div align="right"><form action = namewisesearch.php method="post" name="form1" class="menu" id="form1">
                        <label></label>
                      <label>
                      <input name="searchname" type="text" class="searchall" id="searchname" size="25" maxlength="200" />
                      <input name="Search" type="submit" class="menu" id="Search" value="Search" onclick="verify();">
                      </label>
            </form></div>            </td>
          </tr>
          <tr>
            <td colspan="3" class="text_black"><p align="center" class="text_black_bold"><a href="information2003Search.php">Go Back </a></p>
              </td>
            </tr>
          <tr class="text_black">
            <td colspan="3">
			<br /><br />
			
			

<?php



			$searchname=$_POST['searchname'];
			
			if($searchname =='')
			{
			echo 'No Result found please try again';
			return false;
			}
			
		
			
			
			//echo $searchname;
			
			include("demo.php");
			
			$Query="SELECT * from batch2003 where Name LIKE '%$searchname%' order by Name ";
			$dbresult=mysql_query($Query);

			if(mysql_num_rows($dbresult) >0)
				{
					while($row=mysql_fetch_row($dbresult))
					{
				
				echo "Name  :  "."$row[1].<br><br><br>";
				echo "Enrollment no  :  " . "$row[0] .<br><br><br>";
				echo "Discipline  :  ". "$row[2].<br><br><br>";
				echo "Father's Name  :  ". "$row[3].<br><br><br>";
				echo "Semester  :  ". "$row[5].<br><br><br>";
				echo "Description  :  "."$row[4].<br><br><br>";
				echo "<hr height = 50% size = 5% color = gray>";
                
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
