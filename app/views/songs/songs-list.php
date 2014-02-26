<!doctype html>
<html>
<head>
	<title>My Songs</title>
</head>

<body>
	<h1>My Songs</h1>
	
<?php foreach ($songs as $song) : ?>
	<div class = "song">
		<h4><?php echo $song->title ?></h4> by <?php echo $song->artist_name; ?>
		<p>Genre: <?php echo $song->genre; ?></p>
		<p>Added: <?php echo $song->added; ?></p>
	</div>
<?php endforeach; ?>
</body>
</html>
