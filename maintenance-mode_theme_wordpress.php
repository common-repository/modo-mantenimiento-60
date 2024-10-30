<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title><?php bloginfo('name'); ?></title>
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="" />

<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript">
	var flashvars = {};
	var params = {
		menu: "true",
		quality: "high",
		scale: "noscale",
		salign: "tl",
		wmode: "window",
		bgcolor: "#ffffff",
		allowscriptaccess: "always"
	};
	var attributes = {id:"flashcontent"};
	swfobject.embedSWF("sapling.swf", "flashcontent", "100%", "100%", "9", false, flashvars, params, attributes);
</script>

<style type="text/css">

html {
	height: 100%;
	overflow: hidden;
}

body {
	height: 100%;
	margin: 0;
	padding: 0;
	background-color: #f5f9ed;
	font-family: Arial, sans-serif;
	color: #333333;
}

a, a:visited, a:link {
	color: #07c2a8;
	text-decoration: underline;
}

a:active, a:hover {
	text-decoration: none;
}

#flashcontent {
	width: 100%;
	height: 100%;
}

#noflash {
	width: 320px;
	margin: 0;
	padding: 0;
}

h1 {
	font-size: 30px;
	letter-spacing: -2px;
	margin-bottom: -10px;
}

h2 {
	font-size: 12px;
}

p {
	font-size: 12px;
}

#footer p {
	font-size: 11px;
}

#content, #footer {
	padding: 20px;
}

#upgrade {
	background-color: #ffffff;
	padding: 20px;
	margin-top: 20px;
	margin-bottom: 20px;
	border: 1px dotted #cccccc;
}

</style>
<!-- Begin iPhone/iPad detection code -->
<script type="text/javascript">
	if ((navigator.userAgent.indexOf('iPhone') != -1) || (navigator.userAgent.indexOf('iPod') != -1) || (navigator.userAgent.indexOf('iPad') != -1)) {
		document.location = "mobile/";
	}
</script>
<!-- End iPhone/iPad detection code -->
</head>
<body>

<div id="flashcontent">
	
	<div id="noflash">
		
		<div id="content">
		
			<h1><?php bloginfo('name'); ?></h1>
			<h2>Modo Mantenimiento [ACTIVADO]</h2>
			
			<div id="upgrade">
			
				<p><strong>Adobe Flash Player 9 is required to view my site</strong></p>
				<p><a href="http://www.adobe.com/go/getflashplayer/">&raquo; Download the latest version here</a></p>
			
			</div><!-- / #upgrade -->
			
			<?php echo $this->mamo_template_tag_message(); ?>
		
		</div><!-- / #content -->
		
		<div id="footer">
			
			<p>&copy; 2011 Modo Mantenimiento plugin by <a title="Posicionamiento web" href="http://www.laliamos.com">Posicionamiento web</a> y <a title="diseño web" href="http://www.laliamos.com">Diseño web</a> LaLiamos Estudio Design.</p>
		
		</div><!-- / #footer -->
		
	</div><!-- / #noflash -->
	
</div><!-- / #flashcontent -->

</body>
</html>
