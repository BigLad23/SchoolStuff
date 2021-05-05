<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>CodeIgniter Tutoriaali</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="/">NewsDemo</a>
</div>
<ul class="nav navbar-nav">
    <li><a href="/">Takaisin</a></li>
    <?php if (session()->get('isLoggedIn')): ?>
    <li><a href="/news">Lue uutisia</a></li>
    <li><a href="/news/create">Luo uusi uutinen</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <li><a href="/user/logout"><span class="glyphicon glyphicon-log-out"></span> Kirjaudu ulos</a></li>
    </ul>
    <?php else: ?>
    <div class
    <li><a href="/user/register"><span class="glyphicon glyphicon-user"></span> Rekisteröidy</a></li>
    <li><a href="/user/login"><span class="glyphicon glyphicon-log-in"></span> Kirjaudu</a></li>
    <?php endif ?>    
</div>
</nav>