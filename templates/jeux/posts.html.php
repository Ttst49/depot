<?php foreach ($jeux as $jeu): ?>

<div class="jeu mt-3">
    <h2 style="border-bottom: #252525 1px solid"><?=$jeu["Nom"] ?></h2>
    <span>Description:  <?= $jeu["Description"] ?></span>
    <p style="font-size: medium">Date de sortie: <?= $jeu["Release_Date"] ?></p>
</div>

<?php endforeach; ?>

<?php foreach ($comments as $comment): ?>



<?php endforeach; ?>
