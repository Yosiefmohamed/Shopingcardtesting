<?php

session_start();

include "../Config/dbconnect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
   @$UserID = $_POST['UserID'];

   $username= $_POST['username'];

   $Password= $_POST['Password'];

   $Email = $_POST['Email'];

   $fullname = $_POST['fullname'];

   $_SESSION['username']=$_POST['username'];

  $_SESSION['Password']=$_POST['Password'];

  $_SESSION['Email']=$_POST['Email'];

  $_SESSION['fullname']=$_POST['fullname'];
 
$st=$connect->prepare("UPDATE users SET userid=?,username=?,Password=?,Email = ?,fullname =?");


  $stmt1=$connect->prepare("INSERT INTO users(username,Password,Email,fullname)
  	VALUES
  	(:username,:Password,:Email,:fullname)");

 
  $stmt1->execute(array('username' => $username,'Password' => $Password,'Email' => $Email,

 'fullname' => $fullname,));


   // $row =$stmt1->fetch();

   $count=$stmt1-> rowCount(); 

  if ($stmt1-> rowCount() > 0) {
  	
 echo 'have id ';

  }else{

  	 echo 'no id ';

  }

   //$stmt2->execute(array($username,$Password,$Email,$fullname));

   //echo $stmt2->rowCount() . '<h1> update sucssess </h1>';

}else{

	//echo "sorry You cant to searched in this page";
}


?>

<!DOCTYPE html>
<html>
<head>
<script>

alert("After type new infomations click to button blue to see new Infomations");  

</script>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<title>Register form</title>
</head>
<body>

	</br>

</br>
<a href="dashbord.php" class="btn btn-danger">back to Login page </a>

</br>


</br>

</br>
<a href="update.php" class="btn btn-primary btn-log btn-block">cklick to this button to see new Infomations</a>

</br>

</br>
<center>
<img src="download.png">	
</center>
 </br>
 </br>
<h1 class="text-center">Register form </h1>
</br>
 </br>
<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<div class="form-group">
	 
<input type="text" name="username" value='Name' style="height:50px;" class="form-control">
</div>
 </br>
 </br>
 <div class="form-group">
 <input type="Password" name="Password" value="Password" style="height:50px;" class="form-control">
</div>
 </br>
 </br>
 <div class="form-group">
 <input type="text" name="Email" style="height:50px;" value="Email" class="form-control">
 </div>
</br>
 </br>
 <div class="form-group">
<input type="text" name="fullname" style="height:50px;" value="fullname" class="form-control">
</div>
 </br>
 </br>	
 <center>
<input type="submit" name="save" value="Register Now" class=" btn btn-primary  btn-lg btn-block"> 
</center>
</div>
	
</br>

</br>

</form>


</center>
</body>
</html>