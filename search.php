<?php
    
    include_once ('asset/_cnx/_cnx.php');

    $req = $conn->query('SELECT * FROM `articles` ORDER BY `category` DESC');
    $req->execute();
    $articles = $req->fetchAll(PDO::FETCH_ASSOC);
?>

<body>
    <main>
        <?php foreach ($articles as $article):?>
            <h2><?= $article['category']; ?></h2>

        <?php endforeach ?>
    </main>
</body>


