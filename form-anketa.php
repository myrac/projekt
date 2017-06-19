<?php
	session_start();
	$errors = array();
	if(isset($_POST['change'])){
		$old_password = md5($_POST['pass']);
		$new_password = md5($_POST['npass']);
		$check_password = md5($_POST['cpass']);
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$email = $_POST['mail'];
		
		if($old_password == '' || $new_password == '' || $check_password == ''){
			$errors[] = "Please enter a correct password.";
		}
		if($new_password != $check_password){
			$errors[] = "Passwords do not match!";
		}
		if($firstname == ''){
			$errors[] = "Please enter your new first name.";
		}
		if($lastname == ''){
			$errors[] = "Please enter your new last name.";
		}
		if($email == ''){
			$errors[] = "Please enter your new e-mail.";
		}
		if(count($errors) == 0)
		{
			$xml = new SimpleXMLElement('users/' . $_SESSION['user'] . '.xml', 0, true);
			$xml->Password = $new_password;
			$xml->First_Name = $firstname;
			$xml->Last_Name = $lastname;
			$xml->E_Mail = $email;
			$xml->asXML('users/' . $_SESSION['user'] . '.xml');
			header('Location: profile.php');
			die;
		}
	}
?>