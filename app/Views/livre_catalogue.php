<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $titre;?></title>
    </head>
    <body>
        <h1><?php echo $entete;?></h1>
        <ul>
	<ul>
	<?php	
        echo '<table border=1 cellpadding=10px>';
            echo '<tr><th>Titre</th><th>Auteur</th><th>Catégorie</th><th>Prix</th><th>ISBN</th><tr>';
            foreach ($contenu as $livre) {
                echo '<tr><td>'.$livre['titre'].'</td>';
                echo '<td>'.$livre['auteur'].'</td>';
                echo '<td>'.$livre['categorie'].'</td>';
                echo '<td>'.$livre['prix'].'</td>';
                echo '<td>'.$livre['isbn'].'</td></tr>';
            }
            echo '</table>';
	?>
	</ul>
    </body>
</html>

