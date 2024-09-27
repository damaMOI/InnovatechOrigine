
<div class="materiel-container">

    <?php foreach ($materiels as $materiel) : ?>
        <form class="materiel-item" method="POST" action="../reserver.php">
            <h3>
                <?php echo $materiel->nom; ?>
            </h3>

            <?php $disponible = $materiel->quantite > 0 ? true : false; ?>
            <span class="status-pill <?= $disponible ? "green" : "red" ?>">
                <?= $disponible ? "Disponible" : "Indisponible" ?>
            </span>

            <input type="hidden" name="materiel" value=" <?= $materiel->id ?> ">

            <?php if ($disponible === true) : ?>
                <button type="submit" class="button-reserver">Réserver ce matériel</button>
            <?php endif; ?>
        </form>
    <?php endforeach; ?>

</div>
