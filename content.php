<main>
    <section class="container">
        <div class="search">
            <form action="search.php" method="post">
                <input type="text" name="search" placeholder="Rechercher un article">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <?php 
            // the code to connect to the database:
            include 'asset/_cnx/_cnx.php';

            //requet for search all articles:
            $req = $conn->query('SELECT * FROM `articles` ORDER BY `id` DESC');
            $req->execute();
            $articles = $req->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <article class="row">
            <!-- My boucle for select all acticle to databases: -->
            <?php foreach ($articles as $article):?>
                <div class="card">
                    <div class="category">
                        <p><?= $article['category'];?></p>
                    </div>
                    <a href="article.php?id=<?= $article['id'];?>">
                        <div class="title">
                            <h2><?= $article['title'];?></h2>
                        </div>
                    </a>
                    <div class="content">
                        <p><?= $article['content'];?></p>
                    </div>
                </div>
            <?php endforeach;?>
        </article>
    </section>

</main>





