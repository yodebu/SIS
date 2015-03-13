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
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top">
		
		
		
		<?php
		
		include("demo.php");
			
				$username=$_POST['username'];
				$password=$_POST['password'];
				
			
				
				
				$Query="SELECT * from administrator where name='$username' and password='$password'";
				$dbresult=mysql_query($Query);
				if(mysql_num_rows($dbresult) >0)
				{		
				echo "hello:";			
				}
				
				else
				{
					echo "<p class=\"text_black\">Incorrect Username or password.</p>";
					exit();
				}
				
				?>
				
				   <form id="form" name="form" method="post" action= "imageinsertdata.php" > 
			  		    
			  
			
				
          <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
            <tr class="yellow">
              <td><p class="text_black_huge">Welcome Administrator  </p>
                </td>
            </tr>
            <tr>
              <td height="894"><p>&nbsp;</p>
           
                <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
                        <tr class="gray">
                          <td>Enter Details </td>
                        </tr>
                        <tr>
                          <td height="355"><table width="95%" border="0" cellspacing="2" cellpadding="2">
                            <tr>
                              <td>Enrollment No </td>
                              <td><input name="En_no" type="text" class="menu" id="En_no" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td width="50%">Name</td>
                              <td><input name="name" type="text" class="menu" id="name" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td>Discipline</td>
                              <td><label>
                                <select name="discipline" class="menu">
                                  <option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                  <option value="Computer Science Engineering" selected="selected">Computer Science Engineering</option>
                                  <option value="Information Technology">Information Technology</option>
                                  <option value="Bio Informatics">Bio Informatics</option>
                                  <option value="Civil Engineering">Civil Engineering</option>
                                  <option value="Bio Technology">Bio Technology</option>
                                  <option value="Physics">Physics</option>
                                  <option value="Professional Development">Professional Development</option>
                                  <option value="Maths">Maths</option>
                                </select>
                                </label></td>
                            </tr>
                            <tr>
                              <td>Father's Name </td>
                              <td><input name="F_name" type="text" class="menu" id="F_name" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top">Semester</td>
                              <td><select name="semester" class="menu" id="semester">
                                <option>First</option>
                                <option>Second</option>
                                <option>Third</option>
                                <option>Fourth</option>
                                <option>Fifth</option>
                                <option>Sixth</option>
                                <option>Seventh</option>
                                <option>Eighth</option>
                                                            </select></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top">Description</td>
							  <td><textarea name="description" cols="30" rows="7" class="menu" id="description"></textarea></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top"></td>
                              <td><input name = "img" id = "img" class = "menu" type = "text" readonly="yes" maxlength="255" value = <?php echo 'Images/'.$_POST['En_no'].'.jpg'; ?> > </td>
                            </tr>
                            </table>
                            <br />
<?php
						echo "
						<input name=\"username\" type=\"hidden\" id=\"username\" value=\"$username\" />
                          <input name=\"password\" type=\"hidden\" id=\"password\" value=\"$password\" />";
						  
						  ?><br />
                            <p>
                              <label>
                                <input name="Submit4" type="submit" class="menu" value="Add This Data" />
                              </label>
                              <label>
                                <input name="Submit23" type="reset" class="menu" value="Reset" />
                              </label>
                            </p></td>
                        </tr>
                  </table>
                </form>
				    
			
                    <p>&nbsp;</p></td>
        </tr>
            
            </table>          
    </td></tr>
</table>      </td>
  </tr>
  <tr class="black">
    <td align="center" valign="top" class="text_white"></td>
  </tr>
</table>
</body>
</html>
