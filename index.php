<!DOCTYPE html>
<html>
	<head>
		<title> REPORTING BRB</title>
	</head>
	<body>
		<h1>ETAT  DE RISQUES</h1>
		
		 <?php
		 /* https://github.com/NIRAGIRA/php/upload/master
			$timestampDernierMois=time()-2592000;
			echo date('d/m/Y',$timestampDernierMois),"\t\n\n";
			echo date('d/m/Y',strtotime("+2 day")), "\n";
			*/
			$localtime = localtime();
			$seconde =  $localtime[0];
			$minute =  $localtime[1];
			$heure =  $localtime[2];
			echo $heure .'h'.$minute.'min'.$seconde;
			
		?> 
		<p> Aujourd'hui nous sommes <?php echo date('d/m/Y H:i:s')?></p>
	</body>
</html>