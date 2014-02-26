<!doctype html>
<html>
<head>
	<title>DVD Add</title>
</head>

<body>
<?php if (Session::has('success')): ?>
        <div style="background-color:green;color:white;"><p style="text-align:center"><?php echo Session::get('success');?></p></div>
<?php endif; ?>
<h1>DVDs</h1>
<form method="post" action="/dvds">
	<div>
        DVD Title:
        <input type="text" name="dvd_title" />
	</div>
    <div>
        Genre:
        <select name="genre">
            <?php foreach($genres as $genre):?>
                <option value="<?php echo $genre->id;?>"><?php echo $genre->genre_name ;?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        Rating:
        <select name="rating">
            <?php foreach($ratings as $rating):?>
                <option value="<?php echo $rating->id;?>"><?php echo $rating->rating_name ;?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        Sounds:
        <select name="sound">
            <?php foreach($sounds as $sound):?>
                <option value="<?php echo $sound->id;?>"><?php echo $sound->sound_name ;?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        Format:
        <select name="format">
            <?php foreach($formats as $format):?>
                <option value="<?php echo $format->id;?>"><?php echo $format->format_name ;?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        Label:
        <select name="label">
            <?php foreach($labels as $label):?>
                <option value="<?php echo $label->id;?>"><?php echo $label->label_name ;?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div>
        <input type = "submit" value="Save" />
    </div>
</form>
</body>
</html>