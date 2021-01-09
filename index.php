
<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="style.css" type="text/css" />
	</head>
	<?php
	session_start();
	$_SESSION['czas'] = time();
	$fp = fopen("glosy.txt", "r");

	for ($i = 0; $i < 6; $i++) {
	$array[$i] = fgets($fp);
	}

	fclose ($fp);
	
		
	?>
	<body>

		<div id="all">

			<div id="baner">Ranking</div>


			<div id="zawartosc">
				
				<h2>Aby oddać głos kliknij w zdjęcie</h2>
				
				
					<a href="zaglosuj.php?z=1" ><div class="fot" alt="1" style="background: url('ranking/1.jpg'); height: 417px; width: 626px;"><?php echo $array[0]  ?></div></a>
					
					<a href="zaglosuj.php?z=2" ><div class="fot" alt="2" style="background: url('ranking/2.jpg'); height: 417px; width: 626px;"><?php echo $array[1]  ?></div></a>
					
					<a href="zaglosuj.php?z=3" ><div class="fot" alt="3" style="background: url('ranking/3.jpg'); height: 417px; width: 626px;"><?php echo $array[2]  ?></div></a>
					
					<a href="zaglosuj.php?z=4" ><div class="fot" alt="4" style="background: url('ranking/4.jpg'); height: 417px; width: 626px;"><?php echo $array[3]  ?></div></a>
					
					<a href="zaglosuj.php?z=5" ><div class="fot" alt="5" style="background: url('ranking/5.jpg'); height: 417px; width: 626px;"><?php echo $array[4]  ?></div></a>
					
					<a href="zaglosuj.php?z=6" ><div class="fot" alt="6" style="background: url('ranking/6.jpg'); height: 417px; width: 626px;"><?php echo $array[5]  ?></div></a>
			
			</div>
			
			
			
			<div id="stopka">Patryk Banaś & Damian Banasik gr 16A   </div>

		</div>

	</body>
</html>

