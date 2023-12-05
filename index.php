<!-- HEADER -->
<?php
include __DIR__ . '/Views/header.php';
?>

<section class="container">
    <div class="row">
        <!-- ultimo ciclo per prendere tutti i dati contenuti nell'array $movies in modo da dar come valore le proprietà prese nel metodo  -->
        <?php foreach ($movies as $movie) {
            $movie->printCard();
        } ?>
    </div>
</section>

<!-- FOOTER -->
<?php
include __DIR__ . '/Views/footer.php';
?>