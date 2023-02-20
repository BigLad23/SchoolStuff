<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Vuokraus Sivusto</title>
    <link rel="stylesheet" href="css/news.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</head>
<body>
<nav>
<ul>
    <li><a href="/">Takaisin</a></li>
    <?php if (session()->get('isLoggedIn')): ?>
    <li><a href="/news">Lue uutisia</a></li>
    <li><a href="/news/create">Luo uusi uutinen</a></li>
    <li><a href="/user/logout">Kirjaudu ulos</a></li>
    <?php else: ?>
    <li><a href="/user/register">Rekisteröidy</a></li>
    <li><a href="/user/login">Kirjaudu</a></li>
    <?php endif ?>    
</ul>
</nav>

</head>
<body>
    <h1> vuokra asunnot </h1>