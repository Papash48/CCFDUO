<section>
<?php use App\Models\Agent; ?>
<div class="card">
    <?php $agent = Agent::find($session->id); ?>
    <div class="card-body">
        <h1><?php echo $titre; ?></h1>
        <h2 class="text-muted"><?php echo $soustitre; ?></h2>
        <?php echo form_open('agen/modifinfo/' . $agent->id)?>
            <div class="row">
                <div class="col-md-1 text-end">
                </div>
                <div class="col-md-7">
                    <?php
                    $input = array(
                        'name'          => 'nom',
                        'value'         => $agent->nom,
                        'class'         => 'form-control',
                    );
                    echo form_input($input);
                    echo "<br>";

                  
                    $input = array(
                        'name'          => 'prenom',
                        'value'         => $agent->prenom,
                        'class'         => 'form-control'
                    );
                    echo form_input($input);
                    echo "<br>";

                   
                    $input = array(
                        'name'          => 'num',
                        'value'         => $agent->num,
                        'class'         => 'form-control'
                    );
                    echo form_input($input);
                    echo "<br>";

                    $input = array(
                        'name'          => 'mail',
                        'value'         => $agent->mail,
                        'class'         => 'form-control'
                    );
                    echo form_input($input);
                    echo "<br>";
                    $input = array(
                        'name'          => 'mdp',
                        'value'         => $agent->mdp,
                        'class'         => 'form-control'
                    );
                    echo form_input($input);
                    echo "<br>";

                    // Bouton d'enregistrement
                    $subm = array(
                        'type'      => 'submit',
                        'content'   => 'Enregistrer les informations',
                        'class'     => 'btn btn-success'
                    );
                    echo form_button($subm);
                    ?>
                </div>
            </div>
        <?php echo form_close(); ?>
    </div>
</div>
</section>
