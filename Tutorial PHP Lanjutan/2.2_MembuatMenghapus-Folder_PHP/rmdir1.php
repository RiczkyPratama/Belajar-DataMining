<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cara Menghapus Folder dengan PHP | RICZKY PRATAMA</title>
</head>
<body>
	<h1>Cara Menghapus Folder dengan PHP | RICZKY PRATAMA</h1>
	<?php
	function pesanhapus(){
		echo "berhasil menghapus folder bernama riczky pratama";
	};

	rmdir("riczky pratama",pesanhapus());
	?>
</body>
</html>