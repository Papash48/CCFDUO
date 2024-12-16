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
                    // Champ pour le nom
                    echo "<label for='nom'>Nom:</label>";
                    $input = array(
                        'name'  => 'nom',
                        'value' => $agent->nom,
                        'class' => 'form-control',
                        'id'    => 'nom',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour le prénom
                    echo "<label for='prenom'>Prénom:</label>";
                    $input = array(
                        'name'  => 'prenom',
                        'value' => $agent->prenom,
                        'class' => 'form-control',
                        'id'    => 'prenom',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour le numéro de téléphone
                    echo "<label for='num'>Numéro de téléphone:</label>";
                    $input = array(
                        'name'  => 'num',
                        'value' => $agent->num,
                        'class' => 'form-control',
                        'id'    => 'num',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour l'email
                    echo "<label for='mail'>Email:</label>";
                    $input = array(
                        'name'  => 'mail',
                        'value' => $agent->mail,
                        'class' => 'form-control',
                        'id'    => 'mail',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Champ pour le mot de passe
                    echo "<label for='mdp'>Mot de passe:</label>";
                    $input = array(
                        'name'  => 'mdp',
                        'value' => $agent->mdp,
                        'class' => 'form-control',
                        'id'    => 'mdp',
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Bouton d'enregistrement
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
