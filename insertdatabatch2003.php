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
        <td valign="top">&nbsp;</td>
        <td valign="top"><table width="100%" border="0">
          <tr>
            <td width="567">
			
			
			
			<?php
			
				$username=$_POST['username'];
				$password=$_POST['password'];
				
			
				include("demo.php");
				
				$Query="SELECT * from administrator where name='$username' and password='$password'";
				$dbresult=mysql_query($Query);
				if(mysql_num_rows($dbresult) >0)
				{					
				}
				
				else
				{
					echo "<p class=\"text_black\">Incorrect Username or password.</p>";
					exit();
				}
				
				?>
			<?php
			
			$En_no=$_POST['En_no'];
			$name=$_POST['name'];
			$discipline=$_POST['discipline'];
			$F_name=$_POST['F_name'];
			$description=$_POST['description'];
			
			
			include("demo.php");

			$Query="INSERT INTO batch2003 (En_no,Name,Discipline,Fathers_Name,Description) VALUES ( '$En_no','$name','$discipline','$F_name','$description');"; 

			$dbresult=mysql_query($Query);

			if($dbresult)
			{
				echo "<p class=\"text_black\">Thankyou for submitting the course description.<br><br>";			
			}
			else
			{
				echo "<p class=\"text_black\">Some problem occured. Please try again <br><br>";
				
			}
?></td>
          </tr>
          
        </table>
          <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
            <tr class="yellow">
              <td><p class="text_black_huge">Welcome Administrator </p></td>
            </tr>
            <tr>
              <td height="894"><form id="form3" name="form3" method="post" action="insertdatabatch2003.php">
                <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
                      <tr class="gray">
                        <td>Batch2003</td>
                      </tr>
                      <tr>
                        <td height="355"><table width="95%" border="0" cellspacing="2" cellpadding="2">
                            <tr>
                              <td width="50%">Subject</td>
                              <td><input name="subject" type="text" class="menu" id="subject" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td>Discipline</td>
                              <td><label>
                                <select name="discipline" class="menu">
                                  <option value="Electronics and Communications Engineering">Electronics and Communications Engineering</option>
                                  <option value="Computer Science Engineering">Computer Science Engineering</option>
                                  <option value="Information Technology">Information Technology</option>
                                  <option value="Bio Informatics">Bio Informatics</option>
                                  <option value="Civil Engineering">Civil Engineering</option>
                                  <option value="Bio Technology">Bio Technology</option>
                                </select>
                              </label></td>
                            </tr>
                            <tr>
                              <td>Credits</td>
                              <td><input name="credits" type="text" class="menu" id="credits" maxlength="2" /></td>
                            </tr>
                            <tr>
                              <td>Faculty</td>
                              <td><input name="faculty" type="text" class="menu" id="faculty" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td rowspan="5" valign="top">Books to be referred </td>
                              <td><input name="book1" type="text" class="menu" id="book1" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td><input name="book2" type="text" class="menu" id="book2" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td><input name="book3" type="text" class="menu" id="book3" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td><input name="book4" type="text" class="menu" id="book4" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td><input name="book5" type="text" class="menu" id="book5" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td align="left" valign="top">Description</td>
                              <td><textarea name="description" cols="30" rows="7" class="menu" id="book5"></textarea></td>
                            </tr>
                          </table>
                            <br />
                            <?php
						echo "
						<input name=\"username\" type=\"hidden\" id=\"username\" value=\"$username\" />
                          <input name=\"password\" type=\"hidden\" id=\"password\" value=\"$password\" />";
						  
						  ?>
                            <p>
                              <label>
                              <input name="Submit4" type="submit" class="menu" value="Add This Course" />
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
