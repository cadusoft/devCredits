<?php

// /api/userprofile.php/?username=

//colors:
//1 - purple
//2 - green
//3 - blue
//4 - red
//5 - yellow
//6 - orange

$colors = array(1 => '#a872a3',
				2 => '#7cc8a2',
				3 => '#2a8b9d',
				4 => '#d55161',
				5 => '#ecd175',
				6 => '#f99a66');

if (isset($_GET["title"])) {
	$title = htmlspecialchars($_GET["title"]);
} else {
	$title = "devCredits";
}

if (isset($_GET["color"])) {
	$cin = filter_input(INPUT_GET, 'color', FILTER_SANITIZE_NUMBER_INT);
} else {
	$cin = 1;
}

if (array_key_exists($cin, $colors)) {
	$color = $colors[$cin];
} else {
	$color = $colors[1];
}

if (isset($_GET["users"])) {
	$uservar =  htmlspecialchars($_GET["users"]);
	$uservar = str_replace(" ", "", $uservar);
} else {
	$uservar = "ewpratten,linuxxx,404response,thatdude";
}
$users = explode(",", $uservar);

?>
<!DOCTYPE html>
<head>
<title>devCredits - <?=$title ?></title>
<meta name="description" content="An easy way to make a credits page for devRant community projects">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet" type="text/css">
<link href="https://unpkg.com/picnic" rel="stylesheet">
<link rel="apple-touch-icon" sizes="60x60" href="/resources/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/resources/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/resources/favicon-16x16.png">
<link rel="mask-icon" href="/resources/safari-pinned-tab.svg" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<link rel="stylesheet" href="style.css">
<style>body {background-color:<?=$color?>; }</style>
</head>

<body>

<div class="flex one three-600 demo">
	<div><span></span></div>
	<div class="maincard">
			<h1><?php echo $title ?></h1>
			<div class="credits">Made with &#9825; by</div>
			<hr />
			<div class="flex two demo">
<?php foreach ($users as $user):?>
				<a href='https://devrant.com/users/<?=$user?>'>
					<div class='user'>
						<span><h2><?=$user?></h2></span>
					</div>
				</a>
<?php endforeach; ?>
			</div>
		</div>
</div>
</body>
