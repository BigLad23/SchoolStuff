<?= \Config\Services::validation()->listErrors(); ?>

<h2>Lisää uusi uutinen</h2>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Otsikko</label>
    <input type="input" name="title" /><br />

    <label for="content">Teksti</label>
    <textarea name="content"></textarea><br />

    <input type="submit" name="submit" value="Luo uutinen" />

</form>