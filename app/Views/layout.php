<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>CERBEROS <?= $title ?></title>
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
				<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anaheim">
        <link href="public/css/bulma.css" rel="stylesheet" />
				<link href="public/css/style.css" rel="stylesheet" />
				<script type= "text/javascript" src="public/js/global.js"></script>
				<script src="https://kit.fontawesome.com/bc0d7d605b.js" crossorigin="anonymous"></script>
    </head>

		<body>
			<section class="hero is-fullheight">
				 <div class="hero-head"><?php include('includes/header.php')?></div>
					<div class="hero-body">
							<?= $content ?>
					</div>
				<div class="hero-foot"><?php include('includes/fooer.php')?></div>
			</section>
		</body>
</html>
