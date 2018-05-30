<!doctype html>
<html lang="pt-br,en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="The Activity Control Panel is an MVP to organize your activities">
		<meta name="keywords" content="Activity,Control,Panel,MVP,Organize,Activities">
  		<meta name="author" content="Edmilson Silva">
		<title>Activity Control Panel (ACP) - <?=$title?></title>
		<link rel="shortcut icon" type="image/png" href="/favicon.ico" />
		<!-- Latest compiled and minified CSS -->
		<link
			rel="stylesheet" 
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
			integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
			crossorigin="anonymous" />
		<!-- Optional theme -->
		<link 
			rel="stylesheet" 
			href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
			integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" 
			crossorigin="anonymous" />
		<link rel="stylesheet" href="assets/css/styles.css?v=1.0" />
		<?=$style?>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
    <header>
        <!-- Fixed navbar -->
		<?=$menu?>
    </header>
	<div id="container">
	<div id="message"></div>
	<!-- Main component for a primary marketing message or call to action -->
	<div>
		<h1><?=$title?></h1>