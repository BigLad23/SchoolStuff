<?= \Config\Services::validation()->listErrors(); ?>

<h3>Login</h3>

<form action="/user/login" method="post">
 
    <div><label for="name">Käyttäjänimi</label>
        <input type="text" name="name" id="name" value="">
    </div>
 
    <div><label for="password">Salasana</label>
        <input type="password" name="password" id="password" value="">
    </div>   
    <input type="submit" name="submit" value="Kirjaudu" />
    <?php if (session()->get('success')): ?>
    <?= session()->get('success') ?>
    <?php endif; ?>
</form>