<!doctype html>
<html>

<head>
    <title>DVD Results</title>
</head>

<body>
<h1>Results</h1>
<table border="1px">
        <th>Title</th>
        <th>Rating</th>
        <th>Genre</th>
        <th>Label</th>
        <th>Sound</th>
        <th>Format</th>
        <th>Release Date</th>
    <?php foreach($dvds as $dvd):?>
    <tr>
        <td><?php echo $dvd->title;?></td>
        <td><?php echo $dvd->rating->rating_name;?></td>
        <td><?php echo $dvd->genre->genre_name;?></td>
        <td><?php echo $dvd->label->label_name;?></td>
        <td><?php echo $dvd->sound->sound_name;?></td>
        <td><?php echo $dvd->format->format_name;?></td>
        <td><?php echo $dvd->release_date;?></td>
    </tr>
    <?php endforeach ?>
</table>
</body>
</html>