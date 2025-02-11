<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
<link rel="stylesheet" href="<?= base_url('public/css/modif.css'); ?>">
<section>
<?php use App\Models\Agent; ?>
<div class="card">
    <?php $agent = Agent::find($session->id); ?>
    <div class="card-body">
        <h1><?php echo $titre; ?></h1>
        <h2 class="text-muted"><?php echo $soustitre; ?></h2>
        <?php echo form_open('agen/modifinfo/' . $agent->id) ?>
            <div class="row">
                <div class="col-md-1 text-end">
                </div>
                <div class="col-md-7">
                    <?php
                    echo "<label for='nom'>Votre nom:</label>";
                    $input = array(
                        'name'  => 'nom',
                        'value' => $agent->nom,
                        'class' => 'form-control',
                        'id'    => 'nom',
                    );
                    echo form_input($input);
                    echo "<br>";

                    echo "<label for='prenom'>Votre prénom:</label>";
                    $input = array(
                        'name'  => 'prenom',
                        'value' => $agent->prenom,
                        'class' => 'form-control',
                        'id'    => 'prenom',
                    );
                    echo form_input($input);
                    echo "<br>";

                    echo "<label for='num'>Votre numéro de téléphone:</label>";
                    $input = array(
                        'name'  => 'num',
                        'value' => $agent->num,
                        'class' => 'form-control',
                        'id'    => 'num',
                    );
                    echo form_input($input);
                    echo "<br>";

                    echo "<label for='mail'>Votre email:</label>";
                    $input = array(
                        'name'  => 'mail',
                        'value' => $agent->mail,
                        'class' => 'form-control',
                        'id'    => 'mail',
                    );
                    echo form_input($input);
                    echo "<br>";

                    echo "<label for='mdp'>Votre mot de passe:</label>";
                    $input = array(
                        'name'  => 'mdp',
                        'value' => $agent->mdp,
                        'class' => 'form-control',
                        'id'    => 'mdp',
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
