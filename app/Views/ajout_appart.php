<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
<section>
    <div class="card">
        <div class="card-body">
            <h1><?php echo $titre; ?></h1>
            <h2 class="text-muted"><?php echo $soustitre; ?></h2>
            <?php echo form_open_multipart('propriet/ajout_appartement'); ?>
            <div class="row">
                <div class="col-md-1 text-end">
                </div>
                <div class="col-md-7">
                    <?php
                    echo "<label for='nb_pieces'>Nombres de pièces :</label>";
                    $input = array(
                        'name'          => 'nb_pieces',
                        'placeholder'   => 'Nombres de pièces :',
                        'class'         => 'form-control',
                        'required'      => 'true'
                    );
                    echo form_input($input);

                    echo "<label for='localisation'> Localisation :</label>";
                    $input = array(
                        'name'          => 'localisation',
                        'placeholder'   => 'Localisation',
                        'class'         => 'form-control',
                        'required'      => 'true'
                    );
                    echo form_input($input);

                    echo "<label for='prix'> Prix:</label>";
                    $input = array(
                        'name'          => 'prix',
                        'placeholder'   => 'Prix',
                        'class'         => 'form-control',
                        'required'      => 'true'
                    );
                    echo form_input($input);

                    echo "<label for='description'> Sa description :</label>";
                    $input = array(
                        'name'          => 'description',
                        'placeholder'   => 'Description',
                        'class'         => 'form-control',
                        'required'      => 'true'
                    );
                    echo form_input($input);

                    echo "<label for='charges'> Charges :</label>";
                    $input = array(
                        'name'          => 'charges',
                        'placeholder'   => 'Charges',
                        'class'         => 'form-control',
                        'required'      => 'true'
                    );
                    echo form_input($input);
                    echo "<br>";

                    echo "<label for='image'> Image :</label>";
                    $file = array(
                        'name'  => 'image',
                        'class' => 'form-control',
                        'required' => 'true'
                    );
                    echo form_upload($file);
                    echo "<br>";

                    $subm = array(
                        'type'      => 'submit',
                        'content'   => 'Enregistrer les informations',
                        'class'     => 'btn btn-success mt-3'
                    );
                    echo form_button($subm);
                    ?>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>
