<html>
<head>
<title>Blog de Ignacio Navarrete</title>
</head>
<body>
	<h1>Bienvenido al Blog de Ignacio Navarrete</h1>
<ul>
<?php foreach ($datoshome as $tema):?>

<li><h2><a href="/~16606958/swisstool/index.php/Blog/get_topic/<?=$tema->id ?>" ><?php echo $tema->title;?></a><h2></li>
<p><?php echo $tema->content;?></p>
<p>Fecha de creacion: <?php echo $tema->date;?></p>


<?php endforeach;?>
</ul>
<a href="/~16606958/swisstool/index.php/Blog/ing_tem/">Ingresar Tema</a>
</body>
</html>