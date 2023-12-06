<!-- HEADER -->
<?php
include __DIR__.'/header.php';

$Games = GamesP::fetchall();

?>

<section class="container">
    <div class="row">
        <?php if(isset($Games)) {
            foreach($Games as $game) {
                $game->printCard($game->formatCard());
            }
        } else {
            echo 'C\'è un errore nella fetchall in GamesP.php';
        }
        ?>
    </div>
</section>

<!-- FOOTER -->
<?php
include __DIR__.'/footer.php';
?>