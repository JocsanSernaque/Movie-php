<body>
    <main>
        <div class="card-1">
            <section>
                <h1><?= $until_message ?></h1>
                <img src="<?= $poster_url ?>" alt="Poster de <?= $title ?>" srcset="">
            </section>

            <hgroup>
                <h3><?= $title ?> - <?= $until_message ?></h3>
                <p>Fechas de estreno: <?= $release_date ?></p>
            </hgroup>
        </div>
       
        <div class="card-2">
            <p>La siguiente es:</p>
            <h3><?= $following_production ?></h3>
            <figure>
                <img src="<?= $fp_poster_url ?>" alt="" class="img-after">
            </figure>
        </div>
    </main>
</body>
</html>