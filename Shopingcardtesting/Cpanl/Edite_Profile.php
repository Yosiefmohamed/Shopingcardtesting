<?php

session_start();

include 'includes/templats/header.php';

include'Register_Admin.php';

if (isset($_SESSION['username'])) {
	
	// include 'includes/templats/footer.php';



}else{


	header('Location:dashbord.php');



}

?>

</br>

</br>

<h1 class="text-center">Edite Members</h1>

<form class="form-horizontal">

<div class="form-group">
	
	

<input type="text" name="username" placeholder="username" class="form-control">
</div>

</br>

</br>

<div class="form-group">
	
	

<input type="text" name="Password" placeholder="Password" class="form-control">
</div>

</br>

</br>

<div class="form-group">
	
	

<input type="text" name="Email" placeholder="Email" class="form-control">
</div>

</br>

</br>
<div class="form-group">
	
	

<input type="text" name="fullname" placeholder="fullname" class="form-control">
</div>

</br>

</br>	
<center>
	

<input type="submit" name="save" value="save" class=" btn btn-primary btn-log btn-block">

</center>
</div>
	
</br>

</br>

</form>


</center>