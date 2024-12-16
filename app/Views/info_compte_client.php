<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
<link rel="stylesheet" href="<?= base_url('public/css/modif.css'); ?>">

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
                    echo "<label for='nom'>Nom:</label>";
                    $input = array(
                        'name'  => 'nom',
                        'value' => $client->nom,
                        'class' => 'form-control',
                        'id'    => 'nom',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour le prénom
                    echo "<label for='prenom'>Prénom:</label>";
                    $input = array(
                        'name'  => 'prenom',
                        'value' => $client->prenom,
                        'class' => 'form-control',
                        'id'    => 'prenom',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour la date de naissance (type date)
                    echo "<label for='datedenaissance'>Date de naissance:</label>";
                    $input = array(
                        'name'  => 'datedenaissance',
                        'value' => $client->datedenaissance,
                        'class' => 'form-control',
                        'type'  => 'date',
                        'id'    => 'datedenaissance',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour l'email
                    echo "<label for='mail'>Email:</label>";
                    $input = array(
                        'name'  => 'mail',
                        'value' => $client->mail,
                        'class' => 'form-control',
                        'id'    => 'mail',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour le numéro de téléphone
                    echo "<label for='num'>Numéro de téléphone:</label>";
                    $input = array(
                        'name'  => 'num',
                        'value' => $client->num,
                        'class' => 'form-control',
                        'id'    => 'num',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour le mot de passe
                    echo "<label for='mdp'>Mot de passe:</label>";
                    $input = array(
                        'name'  => 'mdp',
                        'value' => $client->mdp,
                        'class' => 'form-control',
                        'id'    => 'mdp',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Bouton de soumission
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
