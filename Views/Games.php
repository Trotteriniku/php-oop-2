<!-- HEADER -->
<?php
include __DIR__ . '/header.php';
include __DIR__ . '/../Control/GamesProduct.php';
?>

<section class="container">
    <div class="row">
        <?php foreach ($Games as $game) {
            $game->Gamesprint();
        } ?>
    </div>
</section>

<!-- FOOTER -->
<?php
include __DIR__ . '/footer.php';
?>