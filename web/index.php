<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8" />
  <title>Discord for Pharo</title>
  <meta name="author" content="Juraj Kubelka" />
  <meta name="description" content="Download a serialized data from a Discord message to Pharo.">
  
 </head>
 <body>

<p>Hi!</p>
<p>You have openned this page by clicking on a link in your Discord client. 
It means that the message includes a serialized data, e.g., objects, stack trace, 
that can be downloaded and displayed in your Pharo image.</p>
<p>To do so, copy the following code, paste it to your Pharo Playground (Workspace) and execute it.</p> 
 
 <pre><code>
 Metacello new
    baseline: #DiscordSt;
    repository: 'github://JurajKubelka/DiscordSt:command-extensions/src';
    load.
 #DSLoadCommand asClassIfPresent: [ :theClass | theClass loadId: '<?php 
 	echo filter_input( INPUT_GET, 'id', FILTER_SANITIZE_URL ); ?>' ]. 
 </code></pre>
 
 <p>It will download the Discord client available for Pharo, and after authentication, it will download the data.</p>
 
 </body>
</html>