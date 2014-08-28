<html>
<head>
	<title>Modificar <?=$title ?></title>
</head>
<body>
	<h3>Titulo: </h3><p><?=$title ?></p>
	<h3>Contenido: </h3><p><?=$content ?></p>
	
	</br>
	</br>
	<h3>Modificar Tema:</h3>
	<form  method="post" action="/~16606958/swisstool/index.php/Blog/update">
	<input type="hidden" name="id" value="<?php echo $id;?>"/></br>
	<input type="text" name="title" value="<?php echo $title;?>"/></br>
	<input type="text" name="content" value="<?php echo $content;?>"/></br>
	<input type="submit"/>
	</form>
	</br>
	</br>
	<a href="/~16606958/swisstool/index.php">Volver</a>
</body> 
</html>