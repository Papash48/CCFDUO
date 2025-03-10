<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
<section>

    <h1><?php echo $titre ?></h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h2><?php echo $soustitre ?></h2>
                <?php echo anchor('propriet/ajout_maison', 'Ajouter une maison') ?>
                <?php echo "<br>" ?>
                <?php echo anchor('propriet/ajout_appart', ' Ajouter un appartement') ?>
                <?php echo "<br>" ?>
                </table>

            </div>
        </div>
    </div>

</section>