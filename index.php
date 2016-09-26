<?php
  require_once('Mustache/Autoloader.php');
  Mustache_Autoloader::register();
  $mustache = new Mustache_Engine(array(
     'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__).'/templates')
  ));

  $template = $mustache->loadTemplate('welcome');

  echo $template->render(array('firstname' => 'Babadook', 'visitorNumber' => '100000'));
?>
