<div class="anime__info">
    <div class="anime__container">
        <header class="anime__info-header">
            <div class="anime__info-image-back">
                <div class="anime__info-image-title">
                    <h2><?= $title ?? "" ?></h2>
                </div>
                <img src="<?= $background_image_url ?? "" ?>" alt="<?= $title ?? "" ?>" loading="lazy">
            </div>
<!--
            <div class="anime__info-image-poster">
                <img src="<?= $poster_image_url ?? "" ?>" alt="<?= $title ?? "" ?>" loading="lazy">
            </div>
-->
        </header>
        <div class="anime__info-grid">
            <div class="anime__info-grid-left">
                <div class="anime__info-grid-left-image">
                    <img src="<?= $poster_image_url ?? "" ?>" alt="<?= $title ?? "" ?>" loading="lazy">
                </div>
                <div class="anime__info-grid-left-content">
                    <a class="state finalized" href="#">Finalized</a>
                    <hgroup>
                        <a class="favorite" href="#">Add favorite</a>
                        <a class="follow" href="#">Follow</a>
                        <a class="waiting_list" href="#">Add to waiting list</a>
                    </hgroup>
                    <h3>Genres</h3>
                    <div class="anime__info-grid-genre-links">
                        <?php foreach ($generos ?? [] as $genero): ?>
                            <a href="/search?s=<?= $genero ?>&search_by=genre"><?= $genero ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="anime__info-grid-right">
                <header>
                    <h1><?= $title ?? "" ?></h1>
                    <p><?= $sinopsis ?? "" ?></p>
                </header>
                <footer class="episodes">
                    <div class="info">
                        <h3>Episode list</h3>
                        <form method="get">
                            <label for="sort_episodes">Sort by:</label>
                            <select name="sort_episodes" id="sort_episodes" onchange="this.form.submit()">
                                <option value="asc">Ascending</option>
                                <option value="desc" selected>Descending</option>
                            </select>
                            <input type="search" name="search_episode" placeholder="Sarch">
                        </form>
                        <hr>
                        <ul class="episodes_list">
                            <?php foreach ($episodes_info ?? [] as $episode): ?>
                                <li>
                                    <span>
                                        <span class="episode"><?= $episode['number'] ?? "???" ?></span> - <?= $episode['title'] ?? "" ?>
                                    </span>
                                    <div class="">
                                        <form method="get">
                                            <select name="show" id="">
                                                <option value="show">Show</option>
                                                <option value="not_show">Not show</option>
                                            </select>
                                        </form>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
        <footer class="anime__info-footer">
            <!-- Capitulos -->
             Lorem, ipsum dolor sit amet consectetur adipisicing elit. In eveniet, praesentium, non neque ad deserunt quo magni consectetur quis, obcaecati dolorum laudantium quia sunt voluptatum. Consectetur iusto id quaerat quas!
        </footer>
    </div>
</div>