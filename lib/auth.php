<?php
session_start();
if(!isset($auth)){
    if(!isset($_SESSION['Auth']['id'])){
        header('location:login.php');
        die();
    }
}

//jeton csrf pour plus de protection

if (!isset($_SESSION['csrf'])) {
	$_SESSION['csrf'] = md5(time() + rand());
}

function csrf(){
	return 'csrf=' . $_SESSION['csrf'];
}

function csrfInput(){
	return '<input type="hidden" value="' .$_SESSION['csrf']. '" name="csrf">';
}

function checkCsrf(){
	if(
		(isset($_POST['csrf']) && $_POST['csrf'] == $_SESSION['csrf']) || 
		(isset($_GET['csrf']) && $_GET['csrf'] == $_SESSION['csrf']) 
		){
		return true;
	}
	header('Location:csrf.php');
	die();
}

?>    
    