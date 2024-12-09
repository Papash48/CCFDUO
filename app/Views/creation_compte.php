<section>
    <div class="card">
        <div class="card-body">
            <h1><?php echo $titre; ?></h1>
            <h2 class="text-muted"><?php echo $soustitre; ?></h2>
            <?php echo form_open('connexion/creationcompte'); ?>
                <div class="row">
                    <div class="col-md-1 text-end">
                    </div>
                    <div class="col-md-7">
                        <?php
                        echo "<label for='nom'>Nom :</label>";
                        $input = array(
                            'name'          => 'nom',
                            'placeholder'   => 'Nom',
                            'class'         => 'form-control',
                            'required'      => 'true'
                        );
                        echo form_input($input);

                        echo "<label for='prenom'>Prenom :</label>";
                        $input = array(
                            'name'          => 'prenom',
                            'placeholder'   => 'Prénom',
                            'class'         => 'form-control',
                            'required'      => 'true'
                        );
                        echo form_input($input);

                        // Date de naissance avec calendrier
                        echo "<label for='daten'>Date de Naissance :</label>";
                        $input = array(
                            'name'          => 'daten',
                            'id'            => 'daten',
                            'placeholder'   => 'Date de Naissance',
                            'type'          => 'date',
                            'class'         => 'form-control',
                            'required'      => 'true'
                        );
                        echo form_input($input);

                        // Adresse email avec validation
                        echo "<label for='mail'>Adresse Mail :</label>";
                        $input = array(
                            'name'          => 'mail',
                            'id'            => 'mail',
                            'placeholder'   => 'Adresse Mail',
                            'class'         => 'form-control',
                            'type'          => 'email', // Spécifie un champ email
                            'required'      => 'true'
                        );
                        echo form_input($input);

                        // Numéro de téléphone avec validation
                        echo "<label for='num'>Numéro de Téléphone :</label>";
                        $input = array(
                            'name'          => 'num',
                            'id'            => 'num',
                            'placeholder'   => 'Numéro de Téléphone',
                            'class'         => 'form-control',
                            'pattern'       => '[0-9]{10}', // Vérifie 10 chiffres
                            'title'         => 'Le numéro de téléphone doit contenir exactement 10 chiffres.',
                            'required'      => 'true'
                        );
                        echo form_input($input);

                        // Mot de passe
                        echo "<label for='mdp'>Mot de Passe :</label>";
                        $input = array(
                            'name'          => 'mdp',
                            'id'            => 'mdp',
                            'placeholder'   => 'Mot de Passe',
                            'class'         => 'form-control',
                            'type'          => 'password',
                            'required'      => 'true'
                        );
                        echo form_input($input);
                        echo "<br>";
                        // Bouton de soumission
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
