<?php include 'head.php' ?>

    <div class="jumbotron p-4 p-md-5 text-dark rounded bg-gray d-flex" style="align-items: center;">
        <img src="https://robohash.org/<?= $userResult['name']?>?set=set5" alt="Profil bild" height="10%" width="10%" style="border-radius: 50%; margin-right:1em;">
        <h1 style="margin-right:0.5em;">
            <?= $userResult['name'] ?>
        </h1>
        <h2 class="text-muted" style="margin-bottom:0.1rem;">
            <?= $userResult['email'] ?>
        </h2>
    </div>

    <?php foreach ($result as $row) : ?>
        <?php include 'card.php' ?>
    <?php endforeach ?>
<?php include 'foot.php' ?>