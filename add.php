<?php
$servername="localhost";
$username="root";
$password="";
$database="sohampractise";
$con=mysqli_connect($servername,$username,$password,$database);
if (!$con) 
{
	die("Error deleting record".mysqli_error($con));
}
if(isset($_POST['submit']))
{
	$uname=$_POST['username'];
	$pword=$_POST['password'];
	$ages=$_POST['age'];
	$gen=$_POST['gender'];
	$nom=$_POST['nomember'];
	$room=$_POST['rtype'];
	$ndays=$_POST['days'];
	$add=$_POST['addr'];
	$nom1=$_POST['nomember1'];
	$room2=$_POST['rtype1'];
	$ndays3=$_POST['days1'];
	$add4=$_POST['addr1'];

	$sql="insert into mainmini(Project_Name,Company_Name,Project_loc,Project_status,Project_Netcost,Funding_req,Start_of_Project,Prob_end,Contact_phone,Company_Mail,Fund_tilldate,location_link)
		  values('$uname','$pword','$ages','$gen','$nom','$room','$ndays','$add','$nom1','$room2','$ndays3','$add4')";

	if(mysqli_query($con,$sql)) 
	{
		echo "<script>alert('new record inserted');
		</script>";
	} 
	else
	{
		echo "error:".mysqli_error($con);
	}
	mysqli_close($con);
}

?>