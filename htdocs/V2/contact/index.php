<?php
include "../includes/header.php";
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }
if($_POST["blank"]!=""){
	header("Location: {$_SERVER[HTTP_REFERER]}");exit;
}
elseif((isset($_POST["name"])) && ($_POST["name"]=="")){
	echo "\n<p class=\"red\">Name required.</p>";
}
elseif((isset($_POST["message"])) && ($_POST["message"]=="")){
	echo "\n<p class=\"red\">Message required.</p>";
}
elseif (isset($_POST['email']))
	{//if "email" is filled out, proceed

  //check if the email address is invalid
  $mailcheck = spamcheck($_POST['email']);
  if ($mailcheck==FALSE)
    {
	echo "\n<p class=\"red\">Invalid email.</p>";
    }
  else
    {//send email
    $name = $_POST['name'] ;
    $email = $_POST['email'] ;
    $reason = $_POST['reason'] ;
    $reasonother = $_POST['reasonother'] ;
    $message = $_POST['message'] ;

	if ($reason=="Other"){
		$reason=$reasonother;
	}

	$headers = 'From: '."noreply@danhughes.me"."\r\n".
	'Reply-To: '.$email."\r\n".
	'X-Mailer: PHP/'.phpversion();

$messagecontent="\nName: $name
Email address: $email
Reason for contact: $reason

-----

$message";

	//mail("dh@danhughes.me", "Contact form on danhughes.me: $reason", $messagecontent, $headers);

$messagecontent="\nHere is a copy of the message you sent from danhughes.me.

Name: $name
Email address: $email
Reason for contact: $reason

-----

$message";

	//mail($email, "Contact form on danhughes.me: $reason", $messagecontent, $headers);

    echo "
<h2>Thank you for your message!</h2>
<p>A copy has been sent to you for your records.</p>";
}
}
else
{?>
<h2>Get in touch</h2>
<p>Actual message sending disabled for security reasons.</p>
<form action="index.php" name="contactform" method="post"><br/>
	<fieldset>
		<label for="name"><i class="icon-male"></i> Name<span class="red">*</span></label>
		<input type="text" id="name" name="name" class="form-text" />
	</fieldset>
	
	<fieldset>
		<label for="email"><i class="icon-envelope-alt"></i> Email<span class="red">*</span></label>
		<input type="email" id="email" name="email" class="form-text" />
	</fieldset>
	
	<fieldset>
		<label for="reason"><i class="icon-list"></i> What can I help you with?</label>
		<select id="reason" name="reason">
			<option value="Hire">I want to hire you</option>
			<option value="Question">I want to ask you a question</option>
			<option value="Hello/Thanks">I want to say hello/thanks</option>
			<option value="Other">Other</option>
		</select>
	</fieldset>
	
	<fieldset id="other" style="display:none;">
	<label for="reasonother">Reason<span class="red">*</span>:</label>
		<input type="text" id="reasonother" name="reasonother" class="form-text"/>
	</fieldset>
	
	<fieldset>
		<label for="message"><i class="icon-comment-alt"></i> Your message<span class="red">*</span></label>
		<textarea id="message" name="message"></textarea>
	</fieldset>
	
	<div style="display:none;">Please leave blank: <input type="text" name="blank"/><br/></div>

	<fieldset>
		<label for="submit"><span class="red">*Required</span></label>
		<input type="submit" value="Send message" class="form-submit"/>
	</fieldset>
</form>
<script>
$('#reason').change(function() {
    var selected = $(this).val();
    if(selected == 'Other'){
      $('#other').show();
    }
    else{
      $('#other').hide();
    }
});
</script><?php } include "../includes/footer.php"; ?>
