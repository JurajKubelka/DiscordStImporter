<html>
 <head>
  <title>Prueba de PHP</title>
 </head>
 <body>
 <?php echo '<p>Hi World</p>'; ?>
 
 <pre><code>
 Metacello new
    baseline: #DiscordSt;
    repository: 'github://JurajKubelka/DiscordSt:command-extensions/src';
    load.
 #DSLoadCommand asClassIfPresent: [ :theClass | theClass loadId: '<?php 
 	echo filter_input( INPUT_GET, 'id', FILTER_SANITIZE_URL ); ?>' ]. 
 </code></pre>
 </body>
</html>