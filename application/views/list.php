<html>
<head>
<title>Blog de ejemplo</title>
</head>
<body>
	<h1>Bienvenido al blog de ejemplo</h1>
<ul>
<?php foreach ($data as $obj):?>

<li><h2><a href="/~16606958/swisstool/index.php/Welcome/get/<?=$obj->id ?>" ><?php echo $obj->title;?></a><h2></li>
<li><?php echo $obj->content;?></li>
<li><?php echo $obj->date;?></li>
<li><?php echo $obj->id;?></li>

<?php endforeach;?>
</ul>
</body>
</html>