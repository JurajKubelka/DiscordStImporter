<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Discord to Pharo Importer</title>
<meta name="author" content="Juraj Kubelka" />
<meta name="description"
	content="Download a serialized data from a Discord message to Pharo.">

<!-- Bootstrap -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body style="">
	<div class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<img src="assets/img/logo.png" class="navbar-brand" />
				<div class="navbar-brand">Discord to Pharo Importer</div>
			</div>
		</div>
	</div>


	<div class="container">

		<div class="page-header" id="banner">
			<div class="row">
				<div class="col-lg-12">
					<h1>Hello!</h1>
					<p class="lead">
						You have openned this page by clicking on a link in your <a
							href="http://discordapp.com" title="Discord homepage">Discord
							client</a>. It means that the message includes a serialized data,
						e.g., objects, stack trace, that can be downloaded to and
						displayed in your Pharo image
					</p>
					<p class="lead">To do so, copy the following code, paste it to your
						Pharo Playground (Workspace) and execute it.</p>
				</div>
			</div>
		</div>

		<div class="bs-docs-section clearfix">
			<div class="row">
				<div class="col-lg-12">
					<pre>
		<code>
 Metacello new
    baseline: #DiscordSt;
    repository: 'github://JurajKubelka/DiscordSt:legacy/src';
    load: #default;
    load: #legacy.
 #DSLoadCommand asClassIfPresent: [ :theClass | theClass type: '<?php
	echo filter_input ( INPUT_GET, 'fuel', FILTER_SANITIZE_URL );
	?>' messages: '<?php
	echo filter_input ( INPUT_GET, 'id', FILTER_SANITIZE_URL );
	?>' data: '<?php
	echo filter_input ( INPUT_GET, 'data', FILTER_SANITIZE_URL );
	?>' ]. 
 </code>
	</pre>

					<p class="lead">
						It will download the <a
							href="https://github.com/JurajKubelka/DiscordSt"
							title="DiscordSt on GitHub">Discord client</a> available for <a
							href="http://pharo.org" title="Pharo homepage">Pharo</a>, and
						after authentication, it will download the data.
					</p>

					<footer>
						<div class="row">
							<div class="col-lg-12">
								<p>
									Made by <a
										href="mailto:juraj.kubelka@icloud.com?subject=Discord%20to%20Pharo%20Importer"
										rel="nofollow">Juraj Kubelka</a>. Code released under the <a
										href="https://github.com/JurajKubelka/DiscordStImporter/blob/master/LICENSE">MIT
										License</a>.
								</p>
								<p>
									Based on <a href="https://bootswatch.com/slate/" rel="nofollow">Bootswatch</a>.
									Icons from <a href="http://fortawesome.github.io/Font-Awesome/"
										rel="nofollow">Font Awesome</a>. Web fonts from <a
										href="http://www.google.com/webfonts" rel="nofollow">Google</a>.
								</p>

							</div>
						</div>

					</footer>


				</div>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
