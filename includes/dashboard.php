<?php

// connect to database:
include_once('asset/_cnx/_cnx.php');


$req = $conn->query("SELECT COUNT(*) FROM `articles` WHERE category = 'Developpement'");
$req->execute();
$category = $req->fetchAll(PDO::FETCH_ASSOC);

?>

<main>
    <?php foreach ($category as $article):?>
        <article class="row">
            <h2><?= $article['Developpement']; ?></h2>
        </article>
    <?php endforeach ?>
</main>





