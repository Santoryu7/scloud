
<section class="cards">
    <div class="container">
        <div class="cards__content">
            <h2 class="cards__head">Новости</h2>
            <div class="cards__news">
                <?php
                foreach ($news['news'] as $item) {
                    ?>
                    <div class="cards__block" onclick="location.href='item/<?= $item['id'] ?>'">

                        <h3 class="cards__title"><?= $item['title'] ?></h3>
                        <p class="cards__text"><?= $item['announce'] ?></p>
                        <button class="cards__button">Подробнее
                            <svg class="arrow" width="26" height="16" viewBox="0 0 26 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path id="Arrow 1"
                                      d="M25.707 8.70711C26.0975 8.31658 26.0975 7.68342 25.707 7.2929L19.343 0.928934C18.9525 0.538409 18.3193 0.538409 17.9288 0.928934C17.5383 1.31946 17.5383 1.95262 17.9288 2.34315L23.5857 8L17.9288 13.6569C17.5383 14.0474 17.5383 14.6805 17.9288 15.0711C18.3193 15.4616 18.9525 15.4616 19.343 15.0711L25.707 8.70711ZM-8.74228e-08 9L24.9999 9L24.9999 7L8.74228e-08 7L-8.74228e-08 9Z"/>
                            </svg>
                        </button>
                    </div>
                    </a>
                    <?php
                }
                ?>
            </div>
            <div class="cards__pagina">
                <?php
                if ($news['onePage'] == 1) {
                    for ($x = $news['page']; $x < $news['page'] + 1; $x++) {
                        ?>
                        <a href="/public/news/<?= $x - $news['bias'] ?>">
                            <button class="cards__button-pagina"><?= $x - $news['bias'] ?></button>
                        </a>
                        <?php
                    }
                } elseif ($news['lastPage']) {
                    for ($x = $news['page']; $x < $news['page'] + 2; $x++) {
                        ?>
                        <a href="/public/news/<?= $x - $news['bias'] ?>">
                            <button class="cards__button-pagina"><?= $x - $news['bias'] ?></button>
                        </a>
                        <?php
                    }
                } else {
                    if ($news['onePage'] == 2) {
                        for ($x = $news['page']; $x < $news['page'] + 2; $x++) {
                            ?>
                            <a href="/public/news/<?= $x - $news['bias'] ?>">
                                <button class="cards__button-pagina"><?= $x - $news['bias'] ?></button>
                            </a>
                            <?php
                        }
                    } else {
                        for ($x = $news['page']; $x < $news['page'] + 3; $x++) {
                            ?>
                            <a href="/public/news/<?= $x - $news['bias'] ?>">
                                <button class="cards__button-pagina"><?= $x - $news['bias'] ?></button>
                            </a>
                            <?php
                        }
                    }
                }
                ?>
                <?php
                if ($news['lastPage'] == False) {
                    ?>
                    <a href="/public/news/<?= $news['page'] + $news['biasForButton'] ?>">
                        <button class="cards__button-last">
                            <svg class="arrow " width="26" height="16" viewBox="0 0 26 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path id="Arrow 1"
                                      d="M25.707 8.70711C26.0975 8.31658 26.0975 7.68342 25.707 7.2929L19.343 0.928934C18.9525 0.538409 18.3193 0.538409 17.9288 0.928934C17.5383 1.31946 17.5383 1.95262 17.9288 2.34315L23.5857 8L17.9288 13.6569C17.5383 14.0474 17.5383 14.6805 17.9288 15.0711C18.3193 15.4616 18.9525 15.4616 19.343 15.0711L25.707 8.70711ZM-8.74228e-08 9L24.9999 9L24.9999 7L8.74228e-08 7L-8.74228e-08 9Z"/>
                            </svg>
                        </button>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>
