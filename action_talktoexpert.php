<?php
include('config.php');
if(isset($_POST['submit']))
{
// getting Post values
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$company=$_POST['company'];
$phone=$_POST['phone'];
$country=$_POST['country'];
$comments=$_POST['comments'];
// $email=$_POST['email'];
// $company=$_POST['company'];
// $phone=$_POST['phone'];
// Insert quaery
$sql="INSERT INTO  expert(firstName,lastName,email,company,phone,country,comments) VALUES(:firstName,:lastName,:email,:company,:phone,:country,:comments)";
$query = $dbh->prepare($sql);
// Bind parameters
$query->bindParam(':firstName',$firstName,PDO::PARAM_STR);
$query->bindParam(':lastName',$lastName,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':company',$company,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':country',$country,PDO::PARAM_STR);
$query->bindParam(':comments',$lastName,PDO::PARAM_STR);
// $query->bindParam(':email',$email,PDO::PARAM_STR);
// $query->bindParam(':company',$company,PDO::PARAM_STR)
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
//mail function for sending mail
$to=$email;
$headers .= "MIME-Version: 1.0"."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
$headers .= 'From:Talk to expert<lydia.dev77@gmail.com>'."\r\n";
$ms.="<html></body><div>
<div><b>First Name:</b> $firstName,</div>
<div><b>Last Name:</b> $lastName,</div>
<div><b>Email Id:</b> $email,</div>
<div><b>Company:</b> $company,</div>
<div><b>Phone:</b> $phone,</div>
<div><b>Country:</b> $country,</div>";
$ms.="<div style='padding-top:8px;'><b>Comments : </b>$comments</div><div></div></body></html>";
mail($to,$subject,$ms,$headers);
// echo "<script>alert('Your info submitted successfully.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}