<section>
<?php use App\Models\Client; ?>
<div class="card">
    <?php $client = Client::find($session->id); ?>
    <div class="card-body">
        <h1><?php echo $titre; ?></h1>
        <h2 class="text-muted"><?php echo $soustitre; ?></h2>
        <?php echo form_open('clien/modifinfo/' . $client->id) ?>
            <div class="row">
                <div class="col-md-1 text-end"></div>
                <div class="col-md-7">
                    <?php
                    // Champ pour le nom
                    $input = array(
                        'name'  => 'nom',
                        'value' => $client->nom,
                        'class' => 'form-control',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour le prénom
                    $input = array(
                        'name'  => 'prenom',
                        'value' => $client->prenom,
                        'class' => 'form-control',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour la date de naissance (type date)
                    $input = array(
                        'name'  => 'datedenaissance',
                        'value' => $client->datedenaissance,
                        'class' => 'form-control',
                        'type'  => 'date', // Définit le type de champ
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour l'email
                    $input = array(
                        'name'  => 'mail',
                        'value' => $client->mail,
                        'class' => 'form-control',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour le numéro de téléphone
                    $input = array(
                        'name'  => 'num',
                        'value' => $client->num,
                        'class' => 'form-control',
                    );
                    echo form_input($input);
                    echo "<br>";

                    $input = array(
                        'name'  => 'mdp',
                        'value' => $client->mdp,
                        'class' => 'form-control',
                    );
                    echo form_input($input);
                    echo "<br>";

                    $subm = array(
                        'type'    => 'submit',
                        'content' => 'Enregistrer les informations',
                        'class'   => 'btn btn-success',
                    );
                    echo form_button($subm);
                    ?>
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
</section>
