<div class="container">
    <?php
    foreach ($news as $item) {
        ?>
        <div class="news">
            <p class="news__path">Главная / <span class="news__path-color"><?= $item['title'] ?></span></p>
            <h1 class="news__head"><?= $item['title'] ?></h1>
            <div class="news__content">
                <div class="news__texture">
                    <h3 class="news__title"><?= $item['announce'] ?></h3>
                    <p class="news__text"><?= $item['content'] ?></p>
                    <button class="news__button" onclick="location.href='/public/news/edit/<?= $item['id'] ?>'">
                        Редактировать новость
                    </button>
                    <button class="news__button" onclick="location.href='/public/news/delete/<?= $item['id'] ?>'">
                        Удалить новость
                    </button>
                    <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : ''; ?>">
                        <button class="news__button">
                            <svg class="arrow news__arrow" width="26" height="16" viewBox="0 0 26 16" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path id="Arrow 1"
                                      d="M25.707 8.70711C26.0975 8.31658 26.0975 7.68342 25.707 7.2929L19.343 0.928934C18.9525 0.538409 18.3193 0.538409 17.9288 0.928934C17.5383 1.31946 17.5383 1.95262 17.9288 2.34315L23.5857 8L17.9288 13.6569C17.5383 14.0474 17.5383 14.6805 17.9288 15.0711C18.3193 15.4616 18.9525 15.4616 19.343 15.0711L25.707 8.70711ZM-8.74228e-08 9L24.9999 9L24.9999 7L8.74228e-08 7L-8.74228e-08 9Z"/>
                            </svg>
                            Назад к новостям
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>