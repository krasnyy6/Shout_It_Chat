<?php 
	include 'database.php';

	//Check if from submitted
	if(isset($_POST['submit']))
	{
		$user = mysqli_real_escape_string($con,$_POST['user']);
		$message = mysqli_real_escape_string($con,$_POST['message']);


		//Set timezone
		date_default_timezone_set('Europe/Istanbul');
		$time=date('h:i:s a',time());


		//
		

		if(!isset($user) || $user=='' || !isset($message) || $message=='' ){
				//echo 'bad';
			$error = "Please fill in your name and a message";
			header("Location: index.php?error=".$error);
			exit();
		}else{
			//echo 'good';
			$query="INSERT INTO shouts (user,message,time) 
					VALUES ('$user','$message','$time')";
			if(!mysqli_query($con,$query))
			{
				die("Error".mysqli_error($con));
			}else{
				header("Location: index.php");
				exit();
			}
		}


	}


?>