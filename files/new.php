<?php
// Google reCAPTCHA API key configuration
$siteKey 	= '6Lf7ZLIfAAAAAOJDUjFLzZjTZwAYjDZvbEYFimGn';
$secretKey 	= '6Lf7ZLIfAAAAABGV9fpKrSzL3f89115FX9gEcqED';

// Email configuration
$toEmail = 'shayarihub801@gmail.com';
$fromName = 'Sender Name';
$formEmail = 'sender@example.com';

$postData = $statusMsg = $valErr = '';
$status = 'error';

// If the form is submitted
if(isset($_POST['submit'])){
    // Get the submitted form data
    $postData = $_POST;
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
		
		// Validate reCAPTCHA box
		if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

			// Verify the reCAPTCHA response
			$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']);
			
			// Decode json data
			$responseData = json_decode($verifyResponse);
			
			// If reCAPTCHA response is valid
			if($responseData->success){
				
				$subject = 'New contact request submitted';
				$htmlContent = "
					<h2>Contact Request Details</h2>
					<p><b>Name: </b>".$name."</p>
					<p><b>Email: </b>".$email."</p>
                    <p><b>Subject: </b>".$subject."</p>
					<p><b>Message: </b>".$message."</p>
				";
				
				// Always set content-type when sending HTML email
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				// More headers
				$headers .= 'From:'.$fromName.' <'.$formEmail.'>' . "\r\n";
				
				// Send email
				@mail($toEmail, $subject, $htmlContent, $headers);
				
				$status = 'success';
				$statusMsg = 'Thank you! Your contact request has submitted successfully, we will get back to you soon.';
				$postData = '';
			}else{
				$statusMsg = 'Robot verification failed, please try again.';
			}
		}else{
			$statusMsg = 'Please check on the reCAPTCHA box.';
		}
}

?>




<!DOCTYPE html>
<html lang="en-US">
<head>
<title>PHP Contact Form with Google reCAPTCHA V2 by CodeAT21</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Stylesheet file -->
<link rel="stylesheet" href="style.css">

<!-- Google recaptcha API library -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="contact__form">
	<div class="container">
		<div class="wrapper">
			<div class="form__inner">
				<form action="" method="post" class="form">
					<h3>Contact Us</h3>
					<!-- Status message -->
					<?php if(!empty($statusMsg)){ ?>
						<div class="status__msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
					<?php } ?>
					
					<!-- Form fields -->
					<div class="form__input">
						<label for="name">Name</label>
						<input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required>
					</div>
					<div class="form__input">
						<label for="email">Email</label>
						<input type="email" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
					</div>
					<div class="form__input">
						<label for="subject">Subject</label>
						<input type="text" name="subject" placeholder="Enter subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required>
					</div>
					<div class="form__input">
						<label for="message">Message</label>
						<textarea name="message" placeholder="Type your message here" required><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
					</div>
					<div class="form__input">
						<!-- Google reCAPTCHA box -->
						<div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
					</div>
					<input type="submit" name="submit" class="btn" value="Submit">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>