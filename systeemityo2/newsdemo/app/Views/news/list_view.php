<h2>Uutiset alkavat:</h2>

<?php if (! empty($news) && is_array($news)) : ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']); ?></h3>

        <div class="main">
            <p><?= esc($news_item['content']); ?></p>
            <p>Julkaistu: <?= esc($news_item['created']); ?></p>
            <p><a  href="<?php echo base_url(); ?>/news/edit/<?php echo $news_item['id']; ?>">Muokkaa uutista</a></p>
            <p><a  href="<?php echo base_url(); ?>/news/delete/<?php echo $news_item['id']; ?>">Poista uutinen</a></p>
        </div>

    <?php endforeach; ?>

<?php else : ?>

    <h3>Ei uutisia</h3>

    <p>Käynnistä tietokanta?</p>

<?php endif ?>