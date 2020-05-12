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
            $nomf = $_GET['nomF'];
            $annee = $_GET['annee']; 
            $real = $_GET['real'];   
            if($nomf != "" && $annee != "" && $real != ""){
                $leFilm = array($nomf,$annee,$real);
                $film = implode(":",$leFilm);
                $file = fopen("data/vod.csv", "a");
                fwrite($file, $film);
                fclose($file);
                echo "film ajouté avec succés";
                $test = false;
            }
            if($test){
                echo "Une information est manquante, merci de remplire le formulaire correctement !";
            }

        ?>
    	
		
		
	</body>
</html>