<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::.SRI ANNAI INDUSTRY</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<link rel="stylesheet" type="text/css" href="../sai.css"  />
<body>
<div class="stage" > </div>
<div align="center" >
  <div class="container" >
    <div class="header"> </div>
    <div class="menu_bar">
      <div class="menu" > <a href="../index.html"> HOME </a> </div>
      <div class="menu" style="left:106px;"> <a href="about_us.html"> About Us </a></div>
      <div class="menu" style="left:230px;"> <a href="services.html"> Services </a></div>
      <div class="menu" style="left:340px;"> <a href="gallery.html"> Gallery </a></div>
      <div class="menu" style="left:445px;"> <a href="customers.html"> Customers </a></div>
      <div class="menu" style="left:580px;"> <a href="contact_su.html"> Contact Us </a></div>
      <div class="menu" style="font-family:'BankGothic Md BT';font-size:16px;left:720px;"> <a href="feed_back.php" style="color:#FFFFFF;"> FEED BACK </a></div>
      <div class="menu" style="left:850px;"> <a href="site_map.html"> Site Map </a></div>
      <div class="menu_split"> </div>
      <div class="menu_split" style="left:206.1px;"> </div>
      <div class="menu_split" style="left:318.1px;"> </div>
      <div class="menu_split" style="left:430.1px;"> </div>
      <div class="menu_split" style="left:566.0px;"> </div>
      <div class="menu_split" style="left:703.0px;"> </div>
      <div class="menu_split" style="left:831.0px;"> </div>
    </div>
    
    
    
    <div class="body" >
      <div class="body_flash" >
        <script type="text/javascript">
         AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','121','height',         '125','title','logo','src','../Flash_Files/logo','quality','high','pluginspage',                  'http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','../Flash_Files/logo' ); //end AC code
</script>
        <noscript>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="121" height="125" title="logo">
          <param name="movie" value="../Flash_Files/logo.swf" />
          <param name="quality" value="high" />
          <embed src="../Flash_Files/logo.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="121" height="125"></embed>
        </object>
        </noscript>
      </div>
      
      <div class="body_feedback">
      <div class="input_area_container">
<div class="input_area_head">ENQUIRY FORM</div>
<div class="input_area">
<?php
if ( isset($_POST[bnt_smt]) && $_POST[bnt_smt]!= ''){

$from = $_POST[email_id];
//subject of the mail
$subject = 'this is subjet';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// you have to change this
$to = "saravanan406440@gmail.com";
$content = "Name         :".$_POST[name]."\n";
$content .= "Email ID     :".$_POST[email_id]."\n";
$content .= "Phone No   :".$_POST[phone]."\n";
$content .= "Mobile No  :".$_POST[mobile]."\n";
$content .= "Address      :".$_POST[address]."\n";
$content .= "Comment     :".$_POST[comment]."\n";
@mail ($to,$subject,$content,$header);
}
?>

<form method="post">
<div class="input_container">
<div class="input_label"> 
  <div align="right">Name:</div>
</div> 
<input class="input_textbox" type=text name="name">
</div>

<div class="input_container">
<div class="input_label">
  <div align="right">E-mail ID: </div>
</div> 
<input class="input_textbox" type=text name="email_id">
</div>

<div class="input_container">
<div class="input_label">
  <div align="right">Phone Number:</div>
</div> 
<input class="input_textbox" type=text name="phone">
</div>

<div class="input_container">
<div class="input_label">
  <div align="right">Mobile:</div>
</div> 
<input class="input_textbox" type=text name="mobile">
</div>

<div class="input_container" style="height:50px;">
<div class="input_label">
  <div align="right">Address:</div>
</div> 
<textarea class="input_textarea" name="address" row=30 col=5></textarea>
</div>

<div class="input_container" style="height:50px;">
<div class="input_label">
  <div align="right">Comment:</div>
</div> 
<textarea class="input_textarea" name="comment" row=30 col=5></textarea>
</div>

<div class="input_container" style="top:20px; left:100px; width:100px;">
<input type="submit"  name="bnt_smt" value="Submit">
</div>
</form>
</div>
</div>
      
      </div>
      
      
        
      </div>

    <div class="footer" >
      <div class="menu_footer"><a href="../index.html" style="color:#666666;text-decoration:none;" >HOME | </a> </div>
      <div class="menu_footer" style="left:383px;"><a href="about_us.html" style="color:#666666;text-decoration:none;">ABOUT US |</a></div>
      <div class="menu_footer" style="left:453px;"><a href="services.html" style="color:#666666;text-decoration:none;">SERVICES |</a></div>
      <div class="menu_footer" style="left:517px;"><a href="gallery.html" style="color:#666666;text-decoration:none;">GALLERY |</a></div>
      <div class="menu_footer" style="left:590px;"><a href="customers.html" style="color:#666666;text-decoration:none;">CUSTOMERS |</a></div>
      <div class="menu_footer" style="left:670px;"><a href="contact_su.html" style="color:#666666;text-decoration:none;">CONTACT US |</a></div>
      <div class="menu_footer" style="left:750px;"><a href="feed_back.php" style="color:#666666;text-decoration:none;">FEED BACK |</a></div>
      <div class="menu_footer" style="left:820px;"><a href="site_map.html" style="color:#666666;text-decoration:none;">SITE MAP</a></div>
      <div class="menu_footer" style="top:80px; left:2.4px; width:300px; height:20.3px;"> copyright © 2010 Sri Annai Industry </div>
      <div class="menu_footer" style="top:80px; left:650px; width:300px; height:20.3px;"> Designed and Developed by SAC </div>
    </div>
  </div>
</div>
</body>
</html>
