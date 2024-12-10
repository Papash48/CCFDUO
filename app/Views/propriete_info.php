<link rel="stylesheet" href="<?= base_url('public/css/affich_maison.css'); ?>">
<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
<section>
    <h1><?php echo $titre; ?></h1>
	
    <div class="container-fluid">
        <div class="row">
            <!-- Colonne de l'image -->
            <div class="col-md-6 image-container">
                <?php
                    echo img('/public/img/'.$propriete->type_propriete."_".$propriete->id.'.jpg', true, 'class="custom-img"');
                ?>
            </div>
            <!-- Colonne des détails -->
            <div class="col-md-6 details-container">
                <h2><?php echo $soustitre; ?></h2>
                <div class="details">
                    <?php
                        echo "<p><strong>Type :</strong> " . $propriete->type_propriete . "</p>";
                        echo "<p><strong>Nombre de pièces :</strong> " . $propriete->nb_pieces . "</p>";
                        echo "<p><strong>Localisation :</strong> " . $propriete->localisation . "</p>";
                        echo "<p><strong>Prix :</strong> " . $propriete->prix . "</p>";
                        echo "<p><strong>Description :</strong> " . $propriete->description . "</p>";
                        echo "<p><strong>Charges :</strong> " . $propriete->charges . "</p>";
                        echo "<p><strong>État :</strong> " . $propriete->EtatPropriete . "</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

