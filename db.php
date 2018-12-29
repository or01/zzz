<? php
$conn=mysqli_connect("localhost","admin","","mydbt");
if(empty($conn)){
	echo "cannot connect database check code<br>";}
else{
	echo "Connected to database<br>";
}
$a=mysqli_escape_string($conn,$_POST['id']);
$b=mysqli_escape_string($conn,$_POST['name']);
$c=mysqli_escape_string($conn,$_POST['age']);

$sql="INSERT INTO e (num,age,name,mail,passkey) VALUES ($a,$c,'$b')";
$ins=mysqli_query($conn,$sql);
if(empty($ins)){
	echo "values are not inserted <br>";
}
else{
	echo "values are inserted<br>";
}
?>