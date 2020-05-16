<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Enquiry Form</title>
<link rel="stylesheet" type="text/css" href="enquirycss.css" />
</head>

<body>

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
$to = "enquiry.granduff@gmail.com";
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
<div class="input_label">Name:</div> 
<input class="input_textbox" type=text name="name">
</div>

<div class="input_container">
<div class="input_label">E-mail ID: </div> 
<input class="input_textbox" type=text name="email_id">
</div>

<div class="input_container">
<div class="input_label">Phone Number:</div> 
<input class="input_textbox" type=text name="phone">
</div>

<div class="input_container">
<div class="input_label">Mobile:</div> 
<input class="input_textbox" type=text name="mobile">
</div>

<div class="input_container" style="height:50px;">
<div class="input_label">Address:</div> 
<textarea class="input_textarea" name="address" row=30 col=5></textarea>
</div>

<div class="input_container" style="height:50px;">
<div class="input_label">Comment:</div> 
<textarea class="input_textarea" name="comment" row=30 col=5></textarea>
</div>

<div class="input_container" style="top:20px; left:180px; width:100px;">
<input type="submit"  name="bnt_smt" value="Submit">
</div>
</form>
</div>
</div>

</body>
</html>
