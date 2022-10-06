<html>
  <head>
  <title>réponse du serveur</title>
  </head>
  <body>
  <?php print "Hello, ";
  print $_POST["name"] ;
    print "<BR><BR><HR>";
  print "Your email address: ";
  print $_POST["email"];
    print "<BR><BR><HR>";
  	print " as well as your message";
  print $_POST["message"];
  print " Your message have been successfully recorded";
  

  ?>
  </body>
</html> 