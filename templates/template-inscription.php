<?php
/*
Template Name: Formulaire Inscription
*/
?>


<?php get_header(); ?>

<form action="https://api.web3forms.com/submit" method="POST">

<!-- REQUIRED: Your Access key here. Don't worry this can be public -->
<input type="hidden" name="access_key" value="YOUR_ACCESS_KEY_HERE">

<!-- Optional: Subject an be prefilled using type="hidden"
     or type="text" for normal user submitted input -->
<input type="hidden" name="subject" value="New Submission from Web3Forms">

<!-- Optional: From Name you want to see in the email
     Default is "Notifications". you can overwrite here -->
<input type="hidden" name="from_name" value="Your Website Name">

<!-- Optional: To send the form submission as CC email
     This feature available to PRO Plan users only -->
<input type="hidden" name="ccemail" value="partner@example.com">

<!-- Optional: Default replyto will be "email" (if available)
     you may overwrite replyto with different email here -->
<input type="hidden" name="replyto" value="customer@example.com">

<!-- Required: If submitting form without Javascript.
     Default web3forms output is in JSON format. -->
<!-- Not Required: If javascript, use "window.location.hash" instead -->
<input type="hidden" name="redirect" value="https://web3forms.com/success">

<!-- Optional: But Recommended: To Prevent SPAM Submission.
     Make sure its hidden by default -->
<input type="checkbox" name="botcheck" class="hidden" style="display: none;">

<!-- Webhooks: Send your form data to Notion, Google Sheets or Zapier.
     This feature available to PRO & Starter Plan users only -->
<input type="hidden" name="webhook" value="WEBHOOK_URL_HERE" />

<!-- Google reCaptcha v3: To Prevent SPAM Submission.
     This feature available to PRO & Starter Plan users only -->
<input type="hidden" name="recaptcha_response" id="recaptchaResponse">

<!-- Attachments: Make sure the <form> has enctype="multipart/form-data"
     This feature available to PRO Plan users only -->
<input type="file" name="attachment" />

<!-- Custom Form Data: Form data you wish to receive in email. -->
<input type="email" name="email" required>
<input type="text" name="First Name" required>
<input type="text" name="Phone Number" required>
<textarea name="message" required></textarea>

<button type="submit">Submit Form</button>

</form>


<?php get_footer(); ?>