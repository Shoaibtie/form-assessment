<?php
session_start();
if (isset($_POST['register'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$date_of_birth=$_POST['date_of_birth'];
	$message=$_POST['message'];
	if ( isset($_POST['captcha']) && ($_POST['captcha']!="") ){
		if(strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0){
		$_SESSION['cap_err']='Entered captcha code does not match! Kindly try again.';
		echo "<script>window.location.href='index.php'</script>";

		}
		else{
        echo "<script>window.location.href='success.php'</script>";
		}

	}

}
?>