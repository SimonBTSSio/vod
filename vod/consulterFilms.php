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
        <br />
        <br />
        <table>
            <tr>
                <td>
                    Titre Film
                </td>
                <td>
                    Année de sotie
                </td>
                <td>
                    Nom réalisateur
                </td>
    	<?php
            
    		$lignes = file("data/vod.csv");
            foreach($lignes as $n => $ligne){
                $film = explode(":", $ligne);
                echo "<tr>";
                foreach ($film as $uneInfo) {
                    echo "<td>" . $uneInfo . "</td>";
                }
                echo "</tr>";
        }
    	?>
        </table>
    	
		
		
	</body>
</html>