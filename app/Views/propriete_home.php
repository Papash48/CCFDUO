
<section>

    <h1><?php echo $titre ?></h1>
	
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <h2><?php echo $soustitre ?></h2>
                <table class="table">
                <?php
                    $cpt=0;
                    echo "<tr>";
                    foreach ($proprietes as $propriete) {
                        echo "<td width='30%' class='text-center pl-3 pr-3'";
                        echo"<br>";
                        echo img('/public/img/'.$propriete->type_propriete."_".$propriete->id.'.jpg',true,'class="img-fluid rounded"');echo"<br>";
                        echo $propriete->type_propriete ."<br>";
                        echo $propriete->nb_pieces ."<br>";
                        echo $propriete->localisation ."<br>";
                        echo $propriete->prix ."<br>";
                        echo $propriete->description ."<br>";
                        echo $propriete->charges ."<br>";
                        echo $propriete->EtatPropriete ."<br>";
                        echo "</a></td>";
                        $cpt++;
                        if ($cpt%3==0) {
                            echo "</tr><tr>";
                        }
                    }
                    echo "</tr>";
                ?>
                </table>
                
            </div>
        </div>
    </div>
    
</section>