<html>
  <head>
  <title>réponse du serveur</title>
  </head>
  <body>
  <?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];


  $email_from = 'resume@message.com';
  $email_subject = "New Message Submitted Personnal Website";

  $email_body = "Name: $name.\n".
                "Email adress $visitor_email.\n".
                "Message $message.\n";

  $to = "ayoub.kahfy@gmail.com";

  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers)

  header("Location: index.html");
  ?>
  </body>
</html> 