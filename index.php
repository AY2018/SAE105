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
  print " votre couleur favorite est le ";
  print $_POST["couleur"];
	print " Nous avons bien noté vos commentaires, merci de votre visite";
  ?>
  </body>
</html> 