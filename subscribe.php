<?php include ('includes/header.php') ?>
    
    <!-- Begin Left -->
    <div id="left">
        <div id="quote-box">
            <p>&nbsp;</p>
        </div>
  	</div>
    <!-- End Left -->
    
    <!-- Begin Right -->
    <div id="right">
    	<p>To sign up for Merriweather Leadership eNewsletters or to modify your existing email subscription, please enter your information below.</p>
		<p><small><b>Note:</b> Required fields are marked with an asterix (*)</small></p>
        <?php

			if ( isset ($_POST['submit'])) {  // Check for each form value when the form is submitted:
				
				
					$problem = FALSE; // no problems!
									
					if ( empty ($_POST['firstName'])) {	// alert the user that they forgot to fill in "First Name"
								
								$problem = TRUE;
								
								print ("<p>You forgot to fill in your <b>First Name</b>.</p>"); 		
							
								} 
								
					if ( empty ($_POST['lastName']))  {	// alert the user that they forgot to fill in "Last Name"
								
								$problem = TRUE;
								
								print ("<p>You forgot to fill in your <b>Last Name</b>.</p>"); 		
							
								} 
								
					if ( empty ($_POST['company'])) {	// alert the user that they forgot to fill in "Company"
								
								$problem = TRUE;
								
								print ("<p>You forgot to fill in your <b>Company</b>.</p>"); 	
								
								}	
								
					if ( empty ($_POST['email']))  {	// alert the user that they forgot to fill in "Email"
								
								$problem = TRUE;
								
								print ("<p>You forgot to fill in your <b>Email Address</b>.</p>"); 		
							
								} 
									
					if (!$problem) { // if there are no problems:
				
						print ("<p class=\"thanks\">Thank You, <b>{$_POST['firstName']}</b>. Your request has been sent to Merriweather.</p>\n"); // Thank the user.
						
							$mailMesage =  ("{$_POST['firstName']} {$_POST['lastName']} {$_POST['email']} from {$_POST['company']} would like to {$_POST['RadioGroup1']} to the email newsletter."); // message of the email.
							
							$mailSubject = "{$_POST['subject']}"; // subject of the email.
	
						mail ('operations@merriweather.biz', $mailSubject , $mailMesage); // Send the email.
				
						}
						
				
			}	
				
		?>
    
        <form name="contactForm" method="post" action="subscribe.php">
        <p>*<label for="firstName">First Name:</label><br /><input name="firstName" type="text" id="firstName" size="20" value="" /></p>
        <p>*<label for="lastName">Last Name:</label><br /><input name="lastName" type="text" id="lastName" size="20" value="" /></p>
        <p>*<label for="company">Company:</label><br /><input name="company" type="text" id="company" size="20" value="" /></p>
        <p>*<label for="email">Email Address:</label><br /><input name="email" type="text" id="email" size="20" value="" /></p>
        <p><label>Subscribe: <input type="radio" name="RadioGroup1" value="subscribe" id="RadioGroup1_0" checked="checked" /></label></p>
        <p><label>Unsubscribe: <input type="radio" name="RadioGroup1" value="unsubscribe" id="RadioGroup1_1" /></label></p>
        <p><input type="hidden" name="subject" value="Merriweather email newsletter request." /></p>						
        <br />
        <p><input class="none" type="submit" name="submit" value="Submit" /></p>
        </form>	
    </div>
    <!-- End Right -->

<?php include ('includes/footer.php') ?>