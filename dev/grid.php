<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Grid Layout | Foundation 6 BASIC</title>
    <meta name="description" content="Page description for search results &amp; social shares goes here.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://new-project.static" />
    <link rel="author" href="/humans.txt">

    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="/android-chrome-192x192.png" sizes="192x192">

    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Page Title" />
    <meta property="og:description" content="Page description for search results &amp; social shares goes here." />
    <meta property="og:url" content="http://new-project.static" />
    <meta property="og:site_name" content="New Project" />
    <meta property="og:image" content="http://new-project.static/img" />

    <link rel="stylesheet" href="<?php autoVer('/css/app.css'); ?>"/>

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>
<body class="dev-page" id="grid">
	<div class="row">
		<div class="small-12 columns">
			<p>Small 12</p>
		</div>
	</div>
	<div class="row">
		<div class="small-6 medium-4 columns">
			<p>Small 6 Medium 4</p>
		</div>
		<div class="small-6 medium-4 columns end">
			<p>Small 6 Medium 4</p>
		</div>
	</div>
	<div class="row">
		<div class="small-1 columns red">
			<p>1</p>
		</div>
		<div class="small-2 columns end blue">
			<p>2</p>
		</div>
	</div>
	<div class="row">
		<div class="medium-4 columns red">
			<p>One Third</p>
		</div>
		<div class="medium-4 columns blue">
			<p>One Third</p>
		</div>
		<div class="medium-4 columns red">
			<p>One Third</p>
		</div>
	</div>

    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/what-input/what-input.js"></script>
    <script src="/bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="<?php autoVer('/js/min/app-min.js'); ?>"></script>
</body>
</html>
