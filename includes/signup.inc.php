<?php

if(isset($_POST['submit']))
{
	include_once 'dbh.inc.php';
	$first = mysqli_real_escape_string($conn,$_POST['first']);
	$last = mysqli_real_escape_string($conn,$_POST['last']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);

	//Error handlers
	//Check for empty fields
	if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd))
	{
		header("location: ../public/signup.php?signup=empty");
		exit();
	}
	else
		//Check if input char are valid
	{
		if(!preg_match("/^[a-z A-Z]*$/", $first) || !preg_match("/^[a-z A-Z]*$/", $last)) 
		{
			header("location: ../public/signup.php?signup=invalid");
			exit();		
		}
		else
		{
			//check for valid email
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("location: ../public/signup.php?signup=invalidEmail");
				exit();		
			}
			else
			{
				$sql = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn,$sql);
				$resultCheck = mysqli_num_rows($result);
				if($resultCheck>0)
				{
					header("location: ../public/signup.php?signup=userTaken");
					exit();
				}
				else
				{
					$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
					//Insert user in Database
					$sql = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd) VALUES ('$first','$last','$email','$uid','$hashedPwd');";
					mysqli_query($conn,$sql);
					header("location: ../public/signup.php?signup=Success!");
					exit();

				}
			}
		}
	}
}
else
{
	header("location: ../public/signup.php");
	exit();
}





