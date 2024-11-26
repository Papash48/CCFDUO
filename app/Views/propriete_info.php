
<section>

    <h1><?php echo $titre ?></h1>
	
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h2><?php echo $soustitre ?></h2>
                <?php
                        echo"<br>";
                        echo img('/public/img/'.$propriete->type_propriete."_".$propriete->id.'.jpg',true,'class="img-fluid rounded"');echo"<br>";
                        echo $propriete->type_propriete ."<br>";
                        echo $propriete->nb_pieces ."<br>";
                        echo $propriete->localisation ."<br>";
                        echo $propriete->prix ."<br>";
                        echo $propriete->description ."<br>";
                        echo $propriete->charges ."<br>";
                        echo $propriete->EtatPropriete ."<br>";
                ?>
                </table>
                
            </div>
        </div>
    </div>
    
</section>