<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
<section>
    <div class="card">
        <div class="card-body">
            <h1><?php echo $titre;?></h1>
            <h2 class="text-muted"><?php echo $soustitre;?></h2>
            <?php echo form_open('connexion/loginAgent'); ?>
                <div class="row">
                    <div class="col-md-1 text-end">
                    </div>
                    <div class="col-md-7">
                        <?php
                        // input login
                        $input = array(
                            'name'          => 'login',
                            'placeholder'   => 'Nom d\'utilisateur de l\'agent',
                            'class'         => 'form-control'
                        );
                        echo form_input($input); ?>
                    </div>
                </div>
                <?php
                if (isset($erreurs) && array_key_exists('login',$erreurs)) { ?>
                    <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <?php echo "<span class='text-danger'><i class='fa-solid fa-triangle-exclamation'></i> ".$erreurs['login'].'</span><br>'; ?>
                            </div>
                    </div>
                <?php } ?>
                <br><div class="row">
                    <div class="col-md-1 text-end">
                    </div>
                    <div class="col-md-7">
                        <?php    
                        // input password
                        $inputpwd = array(
                            'name'          => 'pwd',
                            'placeholder'   => 'Mot de passe',
                            'class'         => 'form-control'
                        );
                        echo form_password($inputpwd); ?>
                    </div>
                </div>
                <?php
                if (isset($erreurs) && array_key_exists('pwd',$erreurs)) { ?>
                    <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <?php echo "<span class='text-danger'><i class='fa-solid fa-triangle-exclamation'></i> ".$erreurs['pwd'].'</span><br>'; ?>
                            </div>
                    </div>
                <?php } ?>
                <br>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <?php
                        // bouton submit
                        $subm = array(
                            'type'      => 'submit',
                            'content'   => 'Se connecter',
                            'class'     => 'btn btn-success'
                        );
                        echo form_button($subm); ?>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>