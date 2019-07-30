<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Contacts</title>
</head>

<body  background="../KADCOUg/imgs/mukwano courts.jpg" >
<table align="center" bgcolor="#8DC7C7" height="100%" width="90%">
<tr>
<td  align="center"><font color="#00005E">
        <h1><font color="#333333">Kadco </font><font color="#CC9900"> Uganda </font></h1>

<?php
echo "this message has been sent on: ";
print date("j F Y, \a\\t g.i a", time());
echo "<br> <br>";

$fname=$_POST['name1'];
$sname=$_POST['name2'];
$phone=$_POST['phone'];

$address=$_POST['Paddress'];
$email=$_POST['email'];
$subject=$_POST['sub'];
$message=$_POST['comment'];

$file='orders.txt';
$fp=fopen($file,"w");

$filewrite=fwrite($fp,'$b');
  


$con=mysql_connect("localhost","root",""); 
 if(!$con){
 die('could not connect:'.mysql_error());
 }
 mysql_select_db("kadco",$con);
 
 $sql="INSERT INTO contact(date,first_name,Last_name,phone_number,address,email,subject,body)
 VALUES (now(),'$fname','$sname','$phone','$address','$email','$subject','$message')";
 if(!mysql_query($sql,$con)){
 die('Error:'.mysql_error());
 }
 else{
 echo "<br>";
 $successful="Your message has been sent successfuly"; 
 echo '<script>alert("'.$successful.'")</script>';
 echo "We will reply to your message soon.  ";
 mysql_close($con);
 }

echo "<br> <br>";
echo "<br> <br>";







?>

<a href="index.html"><input type="button" value=" RETURN TO HOMEPAGE" /></a></font></td>
</tr>
</table>
</body>
</html>