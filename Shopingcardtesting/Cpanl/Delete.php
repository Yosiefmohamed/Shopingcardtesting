<?php


  include "../Config/dbconnect.php";



$stmt3=$connect->prepare("SELECT * FROM users WHERE Groupid != 1");

$stmt3->execute();

$count=$stmt3->rowCount();

if ($stmt3->rowCount() > 0) {


$stmt=$connect->prepare("DELETE FROM users WHERE UserID  = ?");

$stmt->bindParam("?" , $UserID);


$stmt->execute(array($UserID));


echo "<div class='alert alert-success'>".$stmt->rowCount().'Record Deleted </div>';


}else{


	echo "Sorry The id is not in Database";
}


?>


<!DOCTYPE html>
<html>
<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title></title>
</head>
<body>
<center>
<a href="Add_members.php" class="btn btn-primary">back to Page Add_Members</a>	
<h1>Hello in page Delete</h1>

</center>
</body>
</html>