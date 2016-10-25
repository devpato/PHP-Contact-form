<!doctype html>
<html lang="en">
<head>
 
<title>A Slick Ajax Contact Form with jQuery and PHP</title>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
 
</head>
<body>
 
<div id="content">
 
  <p style="padding-bottom: 50px; font-weight: bold; text-align: center;"><a href="#contactForm">~ Send us an email ~</a></p>
 
  <!-- Content here -->
 
  <p style="padding-top: 50px; font-weight: bold; text-align: center;"><a href="#contactForm">~ Send us an email ~</a></p>
  
</div>
 
<form id="contactForm" action="processForm.php" method="post">
 
  <h2>Send us an email...</h2>
 
  <ul>
 
    <li>
      <label for="senderName">Your Name</label>
      <input type="text" name="senderName" id="senderName" placeholder="Please type your name" required="required" maxlength="40" />
    </li>
 
    <li>
      <label for="senderEmail">Your Email Address</label>
      <input type="email" name="senderEmail" id="senderEmail" placeholder="Please type your email address" required="required" maxlength="50" />
    </li>
 
    <li>
      <label for="message" style="padding-top: .5em;">Your Message</label>
      <textarea name="message" id="message" placeholder="Please type your message" required="required" cols="80" rows="10" maxlength="10000"></textarea>
    </li>
 
  </ul>
 
  <div id="formButtons">
    <input type="submit" id="sendMessage" name="sendMessage" value="Send Email" />
    <input type="button" id="cancel" name="cancel" value="Cancel" />
  </div>
 
</form>
 
<div id="sendingMessage" class="statusMessage"><p>Sending your message. Please wait...</p></div>
<div id="successMessage" class="statusMessage"><p>Thanks for sending your message! We'll get back to you shortly.</p></div>
<div id="failureMessage" class="statusMessage"><p>There was a problem sending your message. Please try again.</p></div>
<div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>
 
</body>
</html>