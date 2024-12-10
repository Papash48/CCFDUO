<section>
    <?php use App\Models\Client; ?>
    <?php use App\Models\Agent; ?>
    <div class="card">
        <div class="card-body">
            <h1><?php echo $titre; ?></h1>
            <h2 class="text-muted"><?php echo $soustitre; ?></h2>
            <?php echo form_open_multipart('prod/modifproduit/' . $produit->reference); ?>
                <div class="row">
                    <div class="col-md-1 text-end">
                        <i class="fa-solid fa-user align-bottom"></i>
                    </div>
                    <div class="col-md-7">
                        <?php
                        
                        $input = array(
                            'name'          => 'reference',
                            'value'         => $produit->reference,
                            'class'         => 'form-control',
                            'disabled'      => 'true'
                        );
                        echo form_input($input);
                        echo "<br>";

                      
                        $input = array(
                            'name'          => 'nom',
                            'value'         => $produit->nom,
                            'class'         => 'form-control'
                        );
                        echo form_input($input);
                        echo "<br>";

                       
                        $input = array(
                            'name'          => 'description',
                            'value'         => $produit->description,
                            'class'         => 'form-control'
                        );
                        echo form_input($input);
                        echo "<br>";

                        
                        
                        $input = array(
                            'name'          => 'puht',
                            'value'         => $produit->PUHT,
                            'class'         => 'form-control'
                        );
                        echo form_input($input);
                        echo "<br>";

                        echo "<label for='image'>Changer l'image :</label>";
                        $file = array(
                            'name'  => 'image',
                            'class' => 'form-control'
                        );
                        echo form_upload($file);
                        echo "<br>";

                        $categories = Categorie::all(); 
                        $options = ['' => 'Choisir une catégorie'];

                        foreach ($categories as $categorie) {
                            $options[$categorie->id] = $categorie->libelle;
                        }

                        echo form_dropdown('categorie', $options, $produit->categorie_id, ['class' => 'form-control']); 
                        echo "<br>";

                        // Bouton d'enregistrement
                        $subm = array(
                            'type'      => 'submit',
                            'content'   => 'Enregistrer le produit',
                            'class'     => 'btn btn-success'
                        );
                        echo form_button($subm);
                        echo "<a href='../supp/$produit->reference' class='btn btn-danger'>Supprimer le produit</a>";
                        ?>
                    </div>
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</section>
