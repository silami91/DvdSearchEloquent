<!doctype html>
<html>
<head>
	<title>Song Search</title>
</head>

<body>
	<h1>Songs</h1>
	<form method="get" action="/songs">
	<div>
		Song Title:
		<input type="text" name="song_title" />
	</div>
	<div>
		Artist:
		<input type="text" name="artist"/>
	</div>
	<div>
		<input type = "submit" value="Search" />
	</div>
	</form>
</body>
</html>
