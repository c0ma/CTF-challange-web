<html>
<head>
<title>Mina djur</title>
<?php include_once('disallowed.php'); ?>
</head>
<body>

<center><h1> Välkommen! </h1><br><br> 

	Detta är min första hemsida, här kommer jag lägga upp bilder på mina djur.<br>
	Sidan är under uppbyggnad, när den är klar så kommer du som besökare kunna läsa den på Svenska eller Finska.<br><br><br>

	<a href="?language=Svenska&animal=Dog">Hund</a> / <a href="?language=Suomi&animal=Dog">Koira</a><br><br>
	<a href="?language=Svenska&animal=Cat">Katt</a> / <a href="?language=Suomi&animal=Cat">Kissa</a><br><br>


<?php

	$r = strtolower(preg_replace('/[^a-zA-Z0-9\']/', '_',$_GET['language']));
	#$r = strtolower(preg_replace('/\/\\\\/', '',$_GET['language']));
	
	$l = strtolower(preg_replace('/\/\\\\/', '',$_GET['animal']));

	if(in_array($r, $forbidden) || in_array($l, $forbidden) ) {
	    die('<center><img src="https://i.imgur.com/N8uY8Jb.jpg?1"><p>Hacking attempt, we have informed the cybercat, beware!');
	}


	if($_GET['animal'] == "Dog")
	{	
		if($_GET['language'] == "Suomi"){
			echo '<img src="https://i.imgur.com/7Kao7pV.jpg"><br><br>Oma koira nimeltä Per';
		}
	}
	if($_GET['animal'] == "Dog")
	{
		if($_GET['language'] == "Svenska"){
			echo '<img src="https://i.imgur.com/7Kao7pV.jpg"><br><br>Min hund som heter Per';
		}
	}
	if($_GET['animal'] == "Cat")
	{	
		if($_GET['language'] == "Suomi"){
			echo '<img src="https://i.imgur.com/yUb0X0h.jpg"><br><br>Oma kissa nimeltä Parransänki';
		}
	}

	if($_GET['animal'] == "Cat")
	{
		if($_GET['language'] == "Svenska"){
			echo '<img src="https://i.imgur.com/yUb0X0h.jpg"><br><br>Min katt som heter Fimpen';
		}
	}


	if(isset($_GET['debug']) == 1)
	{
		highlight_file(__FILE__);
		var_dump($r($l));
	}

?>

</center>
<!-- Debugging: set debug=1 -->
</body>
</html>
