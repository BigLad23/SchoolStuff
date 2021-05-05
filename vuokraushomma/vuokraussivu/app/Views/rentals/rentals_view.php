<h2>Vuokrattavat:</h2>

<?php if (! empty($apartments) && is_array($apartments)) : ?>

    <?php foreach ($apartments as $apartments_item): ?>

        <h3><?= esc($apartments_item['type']); ?></h3>
        <h3><?= esc($apartments_item['price']); ?></h3>
        <div class="main">
            <p><?= esc($apartments_item['address']); ?></p>
        </div>

    <?php endforeach; ?>

<?php else : ?>

    <h3>Ei taloja löytynyt</h3>

    <p>Käynnistä tietokanta ja kokeile uudelleen</p>

<?php endif ?>
