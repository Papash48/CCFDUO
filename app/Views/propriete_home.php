<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
<link rel="stylesheet" href="<?= base_url('public/css/affich_maison.css'); ?>">
<section>
    <h1><?php echo $titre ?></h1>

    <form action="<?= base_url('propriet/search') ?>" method="GET">
        <div class="form-group">
            <label for="prix_min">Prix minimum</label>
            <input type="number" class="form-control" id="prix_min" name="prix_min" step="0.01">
        </div>
        <div class="form-group">
            <label for="prix_max">Prix maximum</label>
            <input type="number" class="form-control" id="prix_max" name="prix_max" step="0.01">
        </div>
        <div class="form-group">
            <label for="nb_pieces">Nombre de pièces</label>
            <input type="number" class="form-control" id="nb_pieces" name="nb_pieces">
        </div>
        <div class="form-group">
            <label for="localisation">Localisation</label>
            <input type="text" class="form-control" id="localisation" name="localisation">
        </div>
        <button type="submit" class="btn btn-primary">Rechercher</button>
    </form>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h2><?php echo $soustitre ?></h2>
                <table class="table">
                    <?php
                    $cpt=0;
                    echo "<tr>";
                    foreach ($proprietes as $propriete) {
                        echo "<td width=35%' class='text-center'> <a href='info/$propriete->id' >";
                        echo "<br>";
                        echo img('public/img/'.$propriete->type_propriete."_".$propriete->id.'.jpg',true,'class="img-fluid rounded"');echo"<br>";
                        echo $propriete->type_propriete ."<br>";
                        echo "Nombres de pièces : ".$propriete->nb_pieces ."<br>";
                        echo "Localisation : ".$propriete->localisation ."<br>";
                        echo "Prix : ".$propriete->prix ."<br>";
                        echo $propriete->description ."<br>";
                        echo "Montant des charges : ".$propriete->charges ."<br>";
                        echo "Etat de la propriété : ".$propriete->EtatPropriete ."<br>";
                        echo "</a></td>";
                        $cpt++;
                        if ($cpt%3==0) {
                            echo "</tr><tr>";
                        }
                    }
                    echo "</tr>";
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>
