<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/nunito-font.css">

    <link rel="stylesheet" href="css/style.css"/>
</head>
<body class="form-v6">
	<div class="page-content">

		<div class="form-v6-content">
			<form class="form-detail" action="form-submit.php" method="post">
				<div id="ten-countdown" class="counter"></div>
				<h2>Form</h2>
				<span style="color: red; margin-left: 241px;"><?php echo $_SESSION['cap_err']; unset($_SESSION['cap_err']); ?></span>
				<div class="form-row">
					<input type="text" name="name" id="name" class="input-text" placeholder="Name" required>
					<span role="alert" id="nameError" aria-hidden="true">
				</div>
				<div class="form-row">
					<input type="text" name="email" id="email" class="input-text" placeholder="Email" required>
				</div>
				<div class="form-row">
					<input type="text" name="date_of_birth" id="date_of_birth" class="input-text" placeholder="Date Of Birth" onfocus="(this.type='date')" required>
				</div>
				<div class="form-row">
					<textarea rows="3" type="text" name="message" placeholder="About yourself" class="input-text txti"></textarea>
				</div>
			         <div class="col-md-12">
					 <label style="width: 100%; display: block;"><strong style="color: black">Enter Captcha:</strong></label>
					 
					   <input type="text" name="captcha" style="display: block;width: 30%;height: 34px;padding: 6px 12px;font-size: 14px;line-height: 1.42857143; color: #555;background-color: #fff;background-image: none;border: 1px solid #ccc;border-radius: 4px;display: inline-block; "/>
					 
					   
					    <img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image' style="margin-left: 4pc; margin-bottom: -20px;">
					 
					</div>
					 
				
				
				<div class="form-row-last">
					<input type="submit" name="register" style="margin-top: 20px;" class="register" value="Register">
				</div>
				     

			</form>
		</div>
	</div>
</body>
<script>
	function countdown( elementName, minutes, seconds )
{
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits( n )
    {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer()
    {
        msLeft = endTime - (+new Date);
        if ( msLeft < 1000 ) {
            element.innerHTML = "Time is up!";
        } else {
            time = new Date( msLeft );
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits( mins ) : mins) + ':' + twoDigits( time.getUTCSeconds() );
            setTimeout( updateTimer, time.getUTCMilliseconds() + 500 );
        }
    }

    element = document.getElementById( elementName );
    endTime = (+new Date) + 1000 * (60*minutes + seconds) + 500;
    updateTimer();
}

countdown( "ten-countdown", 3, 0 );

     
    setTimeout(function () {
     window.location.href = "time-over.php";
             }, 180000); 
             
</script>

</html>