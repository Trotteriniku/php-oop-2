<!-- HEADER -->
<?php
include __DIR__.'/header.php';
// include __DIR__.'/../Control/GamesP.php';

$Games = GamesP::fetchall();

?>

<section class="container">
    <div class="row">
        <?php foreach($Games as $game) {
            $game->printCard($game->formatCard());
        } ?>
    </div>
</section>

<!-- FOOTER -->
<?php
include __DIR__.'/footer.php';
?>