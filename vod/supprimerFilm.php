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
            <a href="saisieTitreRecherche.html">
                Rechercher un Film
            </a>
            <a href="SaisieFilm.html">
                Ajouter un film
            </a>
            <a href="saisieTitreSuppression.html">
                Supprimer un film
            </a>
            <a href="vod.html">
                Accueil
            </a>
        <div>
        <br />
        <br />
        <?php
            $test = true;
            $nom = $_GET['nomF'];
            $lignes = file("data/vod.csv");
            foreach($lignes as $n => $ligne){
                $film = explode(":", $ligne);
                if($film[0] == $nom){
                    $numligne = array_search($ligne,$lignes);
                    unset($lignes[$numligne]) ;
                    
                    $file    = fopen( "data/vod.csv", "w" );
                    foreach ($lignes as $ligne) {
                        fwrite($file,$ligne);
                    }
                    fclose($lignes);
                    fclose($file);
                    echo "Suppression faite!";
                    $test = false;
                }
                
            }
            if($test){
                echo "Le film saisie n'est pas dans la base de donnée";
            }
        ?>
    	
		
		
	</body>
</html>