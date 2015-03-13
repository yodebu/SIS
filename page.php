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
.style7 {font-size: 14px; font-weight: bold; }
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
    <td height="15" align="left" valign="top" class="text_black_huge"> <p align="center"><a href="information2003Search.php" class="text_black_bold">Go Back</a>
      <p align="center">      
      <p align="center">      
      <p align="center">
  <tr><td class="text_black_bold"><div align="center"></div></td>
  </tr>
	<tr><td>
      <?php 
    @ $rpp;        //Records Per Page 
    @ $cps;        //Current Page Starting row number 
    @ $lps;        //Last Page Starting row number 
    @ $a;        //will be used to print the starting row number that is shown in the page 
    @ $b;         //will be used to print the ending row number that is shown in the page 
    ///////////////////////////////////////////////////////////////////////////////// 
    //Database connection 
    ///////////////////////////////////////////////////////////////////////////////// 
   include ('demo.php');
    ///////////////////////////////////////////////////////////////////////////////// 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following IF Statement is used to make sure when the page is loaded for the 
    //first time, Current Page's Starting row number is 0, i.e. 1st row from the 
    //table is being printed. It will change as the user will click on next. 
    /////////////////////////////////////////////////////////////////////////////////    
    if(empty($_GET["cps"])) 
    { 
        $cps = "0"; 
    } 
    else 
    { 
        $cps = $_GET["cps"]; 
    } 
    ///////////////////////////////////////////////////////////////////////////////// 

    $a = $cps+1; 

    $rpp = "10"; 

    $lps = $cps - $rpp; //Calculating the starting row number for previous page 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following IF Statement is used to make sure whether a link to Previous page is 
    //needed or not. If the user is viewing the first set of data then the link will 
    //be disabled, if on the next set then it will carry the $lps in its link and 
    //enable the link 
    if ($cps <> 0) 
    { 
        $prv =  "<a href='page.php?cps=$lps'>Previous</a>"; 
    } 
    else    
    { 
        $prv =  "<font color='cccccc' size =2>Previous</font>"; 
    } 
    ///////////////////////////////////////////////////////////////////////////////// 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following SQL Statement uses SQL_CALC_FOUND_ROWS function to calculate total 
    //number of rows found by the query excluding the limit function added at the 
    //end of the SQL statement. This is followed by second query with FOUND_ROWS() 
    //function which actually gives out the number of rows found. 
    ///////////////////////////////////////////////////////////////////////////////// 
    $q="Select SQL_CALC_FOUND_ROWS * from batch2003 limit $cps, $rpp"; 
    $rs=mysql_query($q) or die(mysql_error()); 
    $nr = mysql_num_rows($rs); //Number of rows found with LIMIT in action 

    $q0="Select FOUND_ROWS()"; 
    $rs0=mysql_query($q0) or die(mysql_error()); 
    $row0=mysql_fetch_array($rs0); 
    $nr0 = $row0["FOUND_ROWS()"]; //Number of rows found without LIMIT in action 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following IF Statement is used to determine whether the user has reached the 
    //last page of the records. For example, if we have 27 rows to print and we show 
    //10 rows per page, then on the third and the last page it will show seven rows 
    //and will say at the top that SHOWING RECORDS FROM 21 to 27. If the following 
    //validator is not used then it shows SHOWING RECORDS FROM 21 to 30. 
    /////////////////////////////////////////////////////////////////////////////////    
    if (($nr0 < 10) || ($nr < 10)) 
    { 
           $b = $nr0; 
    } 
    else 
    { 
        $b = ($cps) + $rpp; 
    } 
    ///////////////////////////////////////////////////////////////////////////////// 

    ?>
      <br />

      <table border="1" cellpadding="4" cellspacing="1" width="20%" align="center">
        <tr>
          <td align="left" colspan="2"><b><font face="verdana" size="1" color="#9999CC"><? echo "$nr0 Records Found"; ?></font></b></td>
        </tr>
        <tr>
          <td align='left' colspan="2"><b><font face="verdana" size="1" color="#9999CC"><? echo "Showing Records from $a to $b"; ?></font></b></td>
        </tr>
        <tr>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">S.No.</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">En_no</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Name</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Discipline</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Father's Name</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Description</font></span></td>
          <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Semester</font></span></td>
		   <td align='center' bgcolor="#000080" class="dark_yellow"><span class="style7"><font face="verdana" color="#FFFFFF">Image</font></span></td>
        </tr>
        <? 
    while ($row=mysql_fetch_array($rs)) 
    { 
        ///////////////////////////////////////////////////////////////////////////////// 
        //This is used to show the serial number on the page as well as to count it up 
        //so that we can get the next page's starting row number when it exits the while 
        //loop after fullfilling the above SQL criteria. 
        ///////////////////////////////////////////////////////////////////////////////// 
        $cps = $cps +1; 

        $val=$row["En_no"]; 
        echo "<tr><td align='center'><font face=verdana size = 2>$cps</font></td><td align='center'><font face=verdana size = 2>$val</font></td>";  
		$val1=$row["Name"]; 
        echo "<td align='center'><font face=verdana size = 2>$val1</font></td>";
		$val2=$row["Discipline"]; 
        echo "<td align='center'><font face=verdana size = 2>$val2</font></td>";
		$val3=$row["Fathers_Name"]; 
        echo "<td align='center'><font face=verdana size = 2>$val3</font></td>";
		$val4=$row["Description"]; 
        echo "<td align='center'><font face=verdana size = 2>$val4</font></td>";
		 $val5=$row["Semester"];
        echo "<td align='center'><font face=verdana size = 2>$val5</font></td>";
		 $val6=$row["Image"]; 
        echo "<td align='center'><font face=verdana><img src = '$val6' height = 100 width = 100></font></td></tr>";
		echo "<tr  bgcolor = '#C0C0C0'><td colspan = 8> <hr color = '#FFCC00' /></td></tr>";
		
    } 
    
    echo "<tr><td align='right' colspan=3>$prv"; 

    ///////////////////////////////////////////////////////////////////////////////// 
    //Following IF Statement is used to determine whether the Next link will be 
    //enabled or disabled. If the user has reached the last page of the record, then 
    //the Next link will be disabled. 
    ///////////////////////////////////////////////////////////////////////////////// 
    if ($cps == $nr0) 
    {      
        echo "  |  <font color='CCCCCC' size = 2>Next</font>"; 
    } 
    else 
    { 
        if ($nr0 > 5) 
        { 
            echo "  |  <a href='page.php?cps=$cps&lps=$lps'>Next</a>"; 
        } 
    } 
    ///////////////////////////////////////////////////////////////////////////////// 
   ?>
   <td></tr>
        <tr>
          <td></td></td>
        </tr>
        <tr>
          <td></tr></td>
        </tr>
      </table>
    <tr class="black">
    <td align="center" valign="top" class="text_white">&nbsp;</td>
  </tr>

</table>
</body>
</html>
