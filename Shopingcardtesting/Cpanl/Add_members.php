
<?php

session_start();


  include "../Config/dbconnect.php";

   @$username=$_POST['username'];

   @$Password=$_POST['Password'];

   @$Email=$_POST['Email'];

   $hashcode=sha1($Password);
  
   @$fullname=$_POST['fullname'];


   $stmt1=$connect->prepare('SELECT UserID , username , Email , Password FROM users 

   	WHERE username = ? AND Email = ? AND Password = ? ');

   $stmt1->execute(array($username,$Email,$hashcode));

   $row =$stmt1->fetch();

   $count=$stmt1-> rowCount();



 //   echo @$_POST['username'] ."</br>". @$_POST['Email'] ."</br>".@sha1($Password) ."</br>".


 // @$_POST['fullname'] ;




$stmt3=$connect->prepare("SELECT * FROM users WHERE Groupid != 1");

$stmt3->execute();

$rows=$stmt3->fetchAll();

?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<title></title>
</head>
<body>
<center>
</br>
</br>
	<a href="dashbord.php" class="btn btn-dark">back to dashbord</a>
	</br>
</br>
</br>
</br>

	<h1> Edite Members</h1>
	</br>
</br>
</br>
</br>
<form action="insert_into.php" method="POST">
	
<table class="main-table table table-bordered">
	
<tr>
	
	<td>#id</td>
</br>
</br>
	<tr><td>#username</td></tr>
	<tr><td>#Email</td></tr>
	<tr><td>#full name</td></tr>
	<tr><td>#Register Date</td></tr>
	<tr><td>#Control</td></tr>

</tr>
<?php

foreach ($rows as $rowss) {

echo "<td>".$rowss['UserID'] ."</td>";
echo "<td>".$rowss['username'] . "</td";
echo "<td>".$rowss['Email']."</td>";
echo "<td>".$rowss['fullname']."</td>";


}

?>
<td>
<a href="Edite_profilee.php" class="btn btn-success">Edite</a>	
<a href="Delete.php" class="btn btn-danger">Delete</a>

</td>	

</td>

</tr>
<tr>
</table>





</br>
</br>
</br>
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

 <input type="submit" name="save" value="Add Members" class=" btn btn-primary  btn-lg btn-block"> 
 </form>
 <center>

</center>
</body>
</html>