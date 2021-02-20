<?php

session_start();

include 'includes/templats/header.php';


include "../Config/dbconnect.php";


// if (isset($_SESSION['username'])) {
	
// 	include 'includes/templats/footer.php';
// }else{
 
// 	header('Location:dashbord.php');
// }

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
</br>
<div class="container">

<h1>Dashbord page</h1>
</br>
</br>
</br>


<div class="row">
	
 <h1>
 <h1>


<div >Total members

<span style="background-color:#E0D9D8;width:500px;">2000</span>

</div>
</h1>	
 </h1>
	</div>	
    </br>
	</br>
	</br>
	 <h1>
	 	<div>Pending members

	 		<span style="background-color:#E0D9D8;width:500px;">2777</span>


	 	</div>


	 </h1>
</div>
   </br>
	</br>
	</br>
 <h1><div>Total members

 <span style="background-color:#E0D9D8;width:500px;">300</span>

</h1>

</div>
</br>
	</br>
	</br>
 <h1>

 <div style="background-color: #C70039;color:white;">Total comment

<span style="background-color:#E0D9D8;width:500px;">500</span>


</div>

</h1>

</br>
	</br>
	</br>
	<div class="panel-heading">
		 <h1><i style="background-color: #C70039;color:white;">Last Registers</i></h1>
	</div>

</center>
</body>
</html>




