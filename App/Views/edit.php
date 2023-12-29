<div class="header__form">
    <h2 class="form__title">Редактирование новости</h2>
    <?php
    foreach ($news as $item) {
    ?>
    <form class="form" method="post" action="/public/news/update/<?= $item['id'] ?>">
        <input type="text" placeholder="Название" name="title" value="<?= $item['title'] ?>">
        <textarea placeholder="Краткое содержание" name="announce"><?= $item['announce'] ?></textarea>
        <textarea class="form__content" placeholder="Описание" name="content"><?= $item['content'] ?></textarea>

        <button type="submit" class="form__button">Изменить</button>
    </form>
        <?php
    }
    ?>
</div>