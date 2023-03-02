<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "ammarz.g@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $phone = $_POST['tel']; //getting customer Phome number
$message = $_POST['message']; //getting customer Phome number
 $subject = $_POST['subject']; //getting subject line from client
 
 //Email body I will receive
 $message = "Name: " . $name . "\n"
 . "Phone Number: " . $phone . "\n\n"
  . "Email: " . $email . "\n\n"
 . "Message: " . "\n" . $_POST['message'];
 
 
 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>