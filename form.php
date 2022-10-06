<html>
  <head>
  <title>réponse du serveur</title>
  </head>
  <body>
  <?php print "Thank you for the message ";
  print $_POST["name"] ;
  print "! <BR><BR>I will respond to you as soon as I can to the following email address: ";
  print $_POST["email"];
  print "<BR><BR>";
  print 'And I am pleased to confirm that the following message has been succesfully sent : "';
  print $_POST["message"];
  print '".';
  ?>
  </body>
</html>