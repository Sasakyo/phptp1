<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Title</title>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="_styles/styles.css" />
		<script src="//use.typekit.net/ezx1iyh.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	</head>
	<body>
		<main>
			<?php  
            


                function validate($array) { 	
					if(isset($array['choix2']) || isset($array['choix4']) || isset($array['choix6'])|| isset($array['choix8']) || isset($array['choix9'])  || isset($array['choix11'])){
						return false;
					}
					if(isset($array['choix1']) &&  isset($array['choix3']) &&  isset($array['choix5']) &&  isset($array['choix7']) &&  isset($array['choix10']) &&  isset($array['choix12'])) { 
						return true;
					}
				}
				if (isset($_GET['submit'])) {
					if (validate($_GET) === true) {
				        echo '<img src="bmw.jpg"> Bien joué petit !';
					}else {
					    header('Location: http://sarahnajjar.be');
					}
				}
				


			?>

	        <h1>-Maman, je veux la voiture !</h1>
	        <h2>-Ok, je te défie de trouver les bons arguments !</h2>
			<form method="GET">
				
	            <fieldset>
	            	<legend><p>J'en ai besoin pour...</p></legend>
				    <label>aller chercher ma copine à la gare<input type="radio" name="choix1"/></label>
				    <label>draguer les nanas qui font de l'auto-stop<input type="radio" name="choix2"/></label>
		    	</fieldset>
		    	<fieldset>
		    	    <legend><p>de...</p></legend>
		    	    <label>ce soir à demain matin.<input type="radio" name="choix3"/></label>
		    	    <label>maintenant jusqu'à l'année prochaine.<input type="radio" name="choix4"/></label>
		    	</fieldset>
		    	<fieldset>
		    		<legend><p>En plus, ...</p></legend>
		            <label>je peux en profiter pour te ramener un petit jeune comme tu les aimes.<input type="radio" name="choix5"/></label>
		            <label>je peux en profiter pour faire tes courses !<input type="radio" name="choix6"/></label>
		    	</fieldset>
		    	<fieldset>
                    <legend><p>Puis tu sais...</p></legend>
		            <label>la dernière fois j'ai juste crevé un pneu !<input type="radio" name="choix7"/></label>
		            <label>je conduis toujours prudemment.<input type="radio" name="choix8"/></label>
		    	</fieldset>
		    	<fieldset>
		    		<legend><p>En contrepartie, je peux...</p></legend>
		            <label>laver la voiture<input type="radio" name="choix9"/></label>
		            <label>ne pas tagger ta voiture<input type="radio" name="choix10"/></label>
		    	</fieldset>
		    	<fieldset>
		    		<legend><p>et</p></legend>
			    	<label>t'offrir un bouquet de fleur.<input type="radio" name="choix11"/></label>
			    	<label>t'offrir une photo dédicacée.<input type="radio" name="choix12"/></label>
		    	</fieldset>
		    	
		    	<input type="submit" name ="submit" id='submit' value="submit">

			</form>

	    </main>
			
	</body>
</html>