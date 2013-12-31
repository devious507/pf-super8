<?php


$h = `/bin/hostname`;

$tmp=explode(".",$h);
$hostname = $tmp[0];
?>
<html>
 <head>
  <title>
   Super 8
  </title>
 </head>
<body topmargin="0" leftmargin="0">
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
<!--Top Menu-->
  <tr>
   <td>
    <table bgcolor="#7D0C10" width="100%" border="0" cellpadding="0" cellspacing="0">

     <tr>
      <td align="center" bgcolor="#7D0C10">
       <img src="captiveportal-seeyoualong.gif"
        alt="See you along the way.">
      </td>
     </tr>
     <tr><td><br></td></tr>
     <tr>
      <td align="center" bgcolor="#7D0C10">
       <img src="captiveportal-logo1-new.jpg" alt="Super 8">
      </td>
     </tr>
     <tr>
      <td align="center" bgcolor="#ffffff">
       <img src="captiveportal-logo2-new.jpg" alt="Super 8">
      </td>
     </tr>
    </table>
   </td>

  </tr>
 </table>
<!--End of Top-->
<!--Middle Section-->
 <table bgcolor="#ffffff" width="700" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr><td><br></td></tr>
  <tr>
   <td>
    <img src="captiveportal-welcome.jpg" alt="Welcome">
   </td>

   <td>
        <img src="captiveportal-maingraphic.jpg" alt="Main">
       </td>
  </tr>
  <tr><td><br></td></tr>  
  <tr>
   <td>
    <img src="captiveportal-family.jpg" alt="Family" align="left" valign="top">
     <br>&nbsp;<br>

     <form method="get" action="captiveportal-checkCode.php" name="myForm">
	  <input type="hidden" name="redirurl" value="<?php echo $_GET['redirurl']; ?>">
	  <input type="hidden" name="portalaction" value="<?php echo $_GET['portalaction']; ?>">
	  <input type="hidden" name="site" value="<?php echo $hostname; ?>">
      <font face="helvetica" size="-1">

       Enter your access code and click<br>
       continue to access the Internet.
      </font>
      <br>
      <input type="text" name="password"><br>
      <br>
      <input type="image" value="Continue" src="captiveportal-continue.gif" border="0">
     </form>
   </td>

   <td valign="top">
    <img src="captiveportal-enjoy.jpg" alt="Enjoy">
   </td>
  </tr>
 </table>
<!--End of Middle Section-->
<!--Bottom Menu-->
 <table width="100%" border="0" cellpadding="0" cellspacing="0" valign="bottom">
  <tr>
   <td height="2" bgcolor="#000000" valign="bottom">

    <img src="captiveportal-blackspace.gif" alt="Bottom">
   </td>
  </tr>
  <tr>
   <td height="17" bgcolor="#7D0C10" valign="bottom">
    <img src="captiveportal-marspace.gif" alt="Bottom">
   </td>
  </tr>
 </table>

<!--End of Bottom Menu-->
</body>
</html>