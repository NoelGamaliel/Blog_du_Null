<?php

    include 'asset/_cnx/_cnx.php';

?>
<main>

    <section class="container">
        <div class="search">
            <form action="search.php" method="post">
                <input type="text" name="search" placeholder="Rechercher un article">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <article class="row">
            <div class="card">
                <a href="http://">
                    <div class="title">
                        <h2></h2>
                    </div>
                </a>
                <div class="content">
                    <p></p>
                </div>  
            </div>

        </article>
    </section>

</main>





