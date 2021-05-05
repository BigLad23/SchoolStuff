<?= \Config\Services::validation()->listErrors(); ?>

<h2>Muokkaa uutista</h2>

<?php if (! empty($news_item)): ?>

<form action="<?php echo base_url(); ?>/news/update/<?php echo $news_item['id']; ?>" method="post">
    <?= csrf_field() ?>

    <label for="title">Otsikko</label>
    <input type="input" name="title" value=<?= $news_item['title'] ?>/><br />

    <label for="content">Teksti</label>
    <textarea name="content"><?= $news_item['content'] ?></textarea><br />

    <input type="submit" name="submit" value="Tallenna uutinen" />

</form>

<?php else: ?>

<h2>Uutista ei enää ole</h2>

<?php endif ?>