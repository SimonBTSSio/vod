<!DOCTYPE html>

<html lang="fr">
    <head>
    	<link rel="stylesheet" href="style/vod.css" />	
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div>
            <a href="consulterFilms.php">
                Consulter les films
            </a>
            <a href="vod.html">
                Retour Accueil
            </a>
            <a href="vod.html">
                Ajouter un Film 
            </a>
            <a href="vod.html">
                Supprimer un film
            </a>
        <div>
	<br />
	<br />
        <?php
	    $test = true;
            $leFilm = $_GET['nomF'];
            $lignes = file("data/vod.csv");
            
            foreach($lignes as $n => $ligne){
                $film = explode(":", $ligne);
                if($leFilm == $film[0]){
                    echo "<h1>" . $film[0] . "</h1>";
                    echo "Disponible en vod <br />";
                    echo "Sortie en " . $film[1] . "<br />";
                    echo "Réalisé par  " . $film[2] . "<br />";
		    $test = false;
                }
            }
	    if($test){
                echo "Le film saisie n'est pas dans la base de donnée";
            }

        ?>
    	
		
		
	</body>
</html>
