<?php
$keyText = file_get_contents("http://62.28.241.149/~pmoreira/KEYSERVER/KeyServerJSON.php");

$keyPHP = json_decode($keyText);

//var_dump($keyPHP);	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Euromilhões (50% são pró prof)</title>
	<link rel="stylesheet" type="text/css" href="euro.css">
</head>
<body>
	<h1> Chave (Ganhadora) do Euromilhões </h1>

<div>
	<ul class="numbers">
<?php
	for ($i=0; $i<count($keyPHP->numbers); $i++) {
		echo "<li>".$keyPHP->numbers[$i]."</li>";
	}
?>
	</ul>
	<ul class="stars">
	<?php 
	foreach ($keyPHP->stars as $star) {
		echo "<li>".$star."</li>";
			}
	 ?>
	</ul>
</div>

<div>
	<ul class="numbers">
		<li>2</li>
		<li>5</li>
		<li>13</li>
		<li>17</li>
		<li>44</li>
	</ul>
	<ul class="stars">
		<li>8</li>
		<li>9</li>
	</ul>
</div>

</body>
</html>