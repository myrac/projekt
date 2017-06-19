<?php
$error = false;
if(isset($_POST['login']))
{
    $username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
    $password = md5($_POST['password']);
    if(file_exists('users/' . $username . '.xml'))
	{
        $xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
        if($password == $xml->Password)
		{
			session_start();
			$_SESSION['user'] = $username;
			header('Location: anketa.php');
			die;
        }
    }
    $error = true;
}
?>