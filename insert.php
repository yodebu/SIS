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
        <td width="4%" valign="top">
		
		
		<?php
		
		include("links.html");
		?>		</td>
        <td width="96%" align="left" valign="top"><?php
			
				$username=$_POST['username'];
				$password=$_POST['password'];
				
			
				include("demo.php");
				
				$Query="SELECT * from admin where name='$username' and password='$password'";
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
          <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
            <tr class="yellow">
              <td><p class="text_black_huge">Welcome Administrator  </p>
                </td>
            </tr>
            <tr>
              <td height="894"><p>
			  <form id="form1" name="form1" method="post" action="Delete.php">
                <input name="del" id = 'del'type="submit" class="menu" value="Delete Sugest.." />
				</form>
              </p>
              <form id="form1" name="form1" method="post" action="insert_arrival.php">
                <table width="100%" border="0" cellpadding="2" cellspacing="2" class="text_black">
                  <tr class="gray">
                    <td>New Arrivals</td>
                    </tr>
                  <tr>
                    <td><table width="105%" border="0" cellspacing="2" cellpadding="2">
                      <tr>
                        <td width="35%">Accession Number </td>
                          <td width="65%"><label>
                            <input name="accnum" type="text" class="menu" id="accnum" maxlength="8" />
                            </label></td>
                        </tr>
                      <tr>
                        <td>Title</td>
                          <td><input name="title" type="text" class="menu" id="title" maxlength="255" /></td>
                        </tr>
                      <tr>
                        <td>Author</td>
                        <td><input name="author" type="text" class="menu" id="author" maxlength="255" /></td>
                      </tr>
                      <tr>
                        <td>Arrival Date </td>
                          <td><input name="arrdate" type="text" class="menu" id="title" maxlength="255" />
                            <br /><span class="menu">(format yyyy-mm-dd like 2007-02-27 for 27th feb'07)</span> </td>				
                         </tr>
                      <tr>
                        <td>Number of Copies </td>
                          <td><input name="copies" type="text" class="menu" id="copies" maxlength="2" /></td>
                        </tr>
                      </table>
                        <p>
                        <label>
                        <?php
						echo "
						<input name=\"username\" type=\"hidden\" id=\"username\" value=\"$username\" />
                          <input name=\"password\" type=\"hidden\" id=\"password\" value=\"$password\" />";
						  
						  ?>
						  
                        <input name="Submit" type="submit" class="menu" value="Add this Book" />
                        </label>
                        <label>
                        <input name="Submit2" type="reset" class="menu" value="Reset" />
                        </label>
                      </p></td>
                    </tr>
                  </table>
                  </form>              <p>&nbsp;</p>
                    <form id="form2" name="form2" method="post" action="insert_journal.php">
                      <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
                        <tr class="gray">
                          <td>Collections</td>
                        </tr>
                        <tr>
                          <td><table width="95%" border="0" cellspacing="2" cellpadding="2">
                            <tr>
                              <td width="50%">Name</td>
                                <td><input name="name" type="text" class="menu" id="name" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td>Category</td>
                                <td><label>
                                  <select name="category" class="menu">
                                    <option value="ACM Journals">ACM Journals</option>
                                    <option value="ACM Magazines">ACM Magazines</option>
                                    <option value="ACM Transactions">ACM Transactions</option>
                                    <option value="ACM Proceedings">ACM Proceedings</option>
                                    <option value="ACM Newsletters">ACM Newsletters</option>
                                    <option value="ACM Special Interest Groups">ACM Special Interest Groups</option>
                                    <option value="NULL" selected="selected">None</option>
                                </select>
                                  <br />
                                  <span class="menu">(only for ACM)</span>                              </label></td>
                            </tr>
                            <tr>
                              <td>Link</td>
                                <td><input name="link" type="text" class="menu" id="link" maxlength="255" /></td>
                            </tr>
                            <tr>
                              <td>Table</td>
                                <td><select name="table" class="menu">
                                  <option value="journal">Journals</option>
                                  <option value="acm">ACM Digital Library Portal</option>
                                  <option value="iel">IEL Digital Library</option>
                                  <option value="springer">Springer Link</option>
                                  <option value="asce">ASCE Digital Library</option>
                                  <option value="open_access">Open Access Arrangement</option>
                                </select></td>
                            </tr>
                            </table>
                              <?php
						echo "
						<input name=\"username\" type=\"hidden\" id=\"username\" value=\"$username\" />
                          <input name=\"password\" type=\"hidden\" id=\"password\" value=\"$password\" />";
						  
						  ?>
                              <p>
                              <label>
                                <input name="Submit3" type="submit" class="menu" value="Add To Collections" />
                              </label>
                              <label>
                                <input name="Submit22" type="reset" class="menu" value="Reset" />
                              </label>
                            </p></td>
                        </tr>
                      </table>
                    </form>
                    <p>&nbsp;</p>
                    <form id="form3" name="form3" method="post" action="insert_course_desc.php">
                      <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
                        <tr class="gray">
                          <td>Course Description </td>
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
          </td></tr>
    </table>      </td>
  </tr>
  <tr class="black">
    <td align="center" valign="top" class="text_white">&nbsp;</td>
  </tr>
</table>
</body>
</html>
