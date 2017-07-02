<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:title" content="IceLeague" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Listi yfir íslenska LoL Spilara" />
	<meta property="og:image" content="http://iceleague.is/images/logo.png" />

	<title>IceLeague - Listi yfir íslenska LoL Spilara</title>
	<meta name="description" content="Listi yfir íslenska LoL Spilara">

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/jq-2.2.4/dt-1.10.13/r-2.1.0/datatables.min.css"/>
</head>
<body>
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Meira</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">ICELEAGUE</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">NA <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index.php?sida=leagues&server=na&queue=ranked_solo_5x5">SOLO</a></li>
							<li><a href="index.php?sida=leagues&server=na&queue=ranked_flex_sr">FLEX</a></li>
							<li><a href="index.php?sida=leagues&server=na&queue=ranked_flex_tt">Twisted Treeline</a></li>
							<li class="divider"></li>
							<li><a href="index.php?sida=ranked_stats&server=na">Ranked Stats</a></li>
							<li><a href="index.php?sida=champion_mastery&server=na">Champion Mastery</a></li>
							<li><a href="index.php?sida=roles&server=na">Main roles</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">EU WEST <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index.php?sida=leagues&server=euw&queue=ranked_solo_5x5">SOLO</a></li>
							<li><a href="index.php?sida=leagues&server=euw&queue=ranked_flex_sr">FLEX</a></li>
							<li><a href="index.php?sida=leagues&server=euw&queue=ranked_flex_tt">Twisted Treeline</a></li>
							<li class="divider"></li>
							<li><a href="index.php?sida=ranked_stats&server=euw">Ranked Stats</a></li>
							<li><a href="index.php?sida=champion_mastery&server=euw">Champion Mastery</a></li>
							<li><a href="index.php?sida=roles&server=euw">Main roles</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">EU NORDIC & EAST <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index.php?sida=leagues&server=eune&queue=ranked_solo_5x5">SOLO</a></li>
							<li><a href="index.php?sida=leagues&server=eune&queue=ranked_flex_sr">FLEX</a></li>
							<li><a href="index.php?sida=leagues&server=eune&queue=ranked_flex_tt">Twisted Treeline</a></li>
							<li class="divider"></li>
							<li><a href="index.php?sida=ranked_stats&server=eune">Ranked Stats</a></li>
							<li><a href="index.php?sida=champion_mastery&server=eune">Champion Mastery</a></li>
							<li><a href="index.php?sida=roles&server=eune">Main roles</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav">
					<li>
						<a href="index.php?sida=search">SEARCH</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="index.php?sida=faq">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
