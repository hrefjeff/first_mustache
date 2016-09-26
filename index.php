<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Mustache PHP example</title>
  </head>

  <body>
      This is a Mustache PHP example<br>
      <?php

        // These lines will autoload Mustache.
        require_once('Mustache/Autoloader.php');
        Mustache_Autoloader::register();

        // Create instance of mustache engine
        $mustache = new Mustache_Engine;

        // Mustache engine takes 2 params:
        //  1) template
        //  2) array of data
        echo $mustache->render('Hello, {{firstname}}!',
                                array('firstname' => 'Jeff'));
      ?>
  </body>

</html>
