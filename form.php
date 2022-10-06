<html>
  <head>
  <title>réponse du serveur</title>
  </head>
  <body>
  <?php print "bonjour monsieur ";
  print $_POST["name"] ;
  print " ";
  print $_POST["email"];
  print "<BR><BR><HR>";
  print $_POST["message"];
	print " Your message has been sent";
  ?>
  </body>
</html> 