<?php
require('dbconnect.php');
$result=$mysqli->query("SELECT * from faculty where code=1");
$n=1;
while($row=mysqli_fetch_array($result))
{
$clgname=$row['clgname'];
$code=$row['code'];
$name=$row['name'];
$branch=$row['branch'];
$branchcode=$row['branchcode'];
$mobile=$row['mobile'];
$offemail=$name.$n."@gmail.com";
$peremail=$row['peremail'];
$doj=$row['doj'];
$experience=$row['experience'];
$active=1;
$password="qwer";
$designation=$row['designation'];
$frwd=1;
$assign=0;
$mysqli->query("INSERT INTO faculty values('$clgname','$code','$name','$branch','$branchcode','$mobile','$offemail','$peremail','$doj','$experience','$active','$password','$designation','$frwd','$assign') ");
}
?>