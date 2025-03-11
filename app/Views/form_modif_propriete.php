<link rel="stylesheet" href="<?= base_url('public/css/main.css'); ?>">
<link rel="stylesheet" href="<?= base_url('public/css/affich_maison.css'); ?>">

<section>
    <h1><?php echo $titre; ?></h1>
    <h2><?php echo $soustitre; ?></h2>

    <?php echo form_open_multipart('propriet/ModifPropriete/' . $propriete->id); ?>
    <div class="form-group">
        <label for="type_propriete">Type de propriété</label>
        <input type="text" class="form-control" id="type_propriete" name="type_propriete" value="<?= $propriete->type_propriete; ?>" required>
    </div>
    <div class="form-group">
        <label for="nb_pieces">Nombre de pièces</label>
        <input type="number" class="form-control" id="nb_pieces" name="nb_pieces" value="<?= $propriete->nb_pieces; ?>" required>
    </div>
    <div class="form-group">
        <label for="localisation">Localisation</label>
        <input type="text" class="form-control" id="localisation" name="localisation" value="<?= $propriete->localisation; ?>" required>
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="text" class="form-control" id="prix" name="prix" value="<?= $propriete->prix; ?>" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" required><?= $propriete->description; ?></textarea>
    </div>
    <div class="form-group">
        <label for="charges">Charges</label>
        <input type="text" class="form-control" id="charges" name="charges" value="<?= $propriete->charges; ?>" required>
    </div>
    <div class="form-group">
        <label for="EtatPropriete">État de la propriété</label>
        <input type="text" class="form-control" id="EtatPropriete" name="EtatPropriete" value="<?= $propriete->EtatPropriete; ?>" required>
    </div>
    <div class="form-group">
        <label for="agent">Agent</label>
        <select class="form-control" id="agent" name="agent" required>
            <option value="">Sélectionnez un agent</option>
            <?php foreach ($agents as $agent) : ?>
                <option value="<?= $agent->id; ?>" <?= ($agent->id == $propriete->id_agent) ? 'selected' : ''; ?>><?= $agent->nom; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" class="form-control" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
    <?php echo form_close(); ?>
</section>
