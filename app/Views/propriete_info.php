<link rel="stylesheet" href="<?= base_url('public/css/affich_maison.css'); ?>">
<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">

<section>

    <h1><?php echo $titre; ?></h1>
    <?php $session = session(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 image-container text-center">
                <?php

                    $maison_id = isset($propriete->id) ? $propriete->id : 1; // ID de la maison actuelle
                    $mainImage = base_url("public/img/maison_{$maison_id}.jpg");
                ?>
                <img id="mainImage" src="<?= $mainImage; ?>" class="custom-img img-fluid">

                <div class="thumbnail-container mt-3">
                    <img src="<?= $mainImage; ?>" class="thumbnail-img img-fluid" onclick="resetImage()" title="Revenir à l'image principale">

                    <?php
                    for ($i = 1; $i <= 2; $i++) {
                        $imgPath = base_url("public/img/{$maison_id}_piece_{$i}.jpg");
                        echo '<img src="'.$imgPath.'" class="thumbnail-img img-fluid" onclick="changeImage(\''.$imgPath.'\')">';
                    }
                    ?>
                </div>
            </div>

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
                    <div id="favoris-button-container">
                        <!-- Les boutons seront injectés ici par JavaScript -->
                    </div>
                </div>
            </div>

            <!-- JavaScript pour vérifier l'état des favoris et mettre à jour le bouton -->
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const proprieteId = <?php echo $propriete->id; ?>;
                    const buttonContainer = document.getElementById('favoris-button-container');

                    // Fonction pour vérifier l'état des favoris
                    function checkFavoriStatus() {
                        fetch(`<?= base_url('propriet/checkFavori/') ?>` + proprieteId)
                            .then(response => response.json())
                            .then(data => {
                                if (data.estEnFavoris) {
                                    buttonContainer.innerHTML = `
                            <form method="post" action="<?= base_url('propriet/SupprimerFavori/') ?>${proprieteId}">
                                <button type="submit" name="supprimer">Retirer des favoris</button>
                            </form>
                        `;
                                } else {
                                    buttonContainer.innerHTML = `
                            <form method="post" action="<?= base_url('propriet/AjouterFavori/') ?>${proprieteId}">
                                <button type="submit" name="ajout">Ajouter aux favoris</button>
                            </form>
                        `;
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    }

                    // Vérifiez l'état des favoris au chargement de la page
                    checkFavoriStatus();
                });
            </script>

</section>


<!-- JavaScript pour changer l'image -->
<script>
    var defaultImage = "<?= $mainImage; ?>";

    function changeImage(src) {
        document.getElementById("mainImage").src = src;
    }

    function resetImage() {
        document.getElementById("mainImage").src = defaultImage;
    }
</script>

