<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>CodeIgniter Tutoriaali</title>
	<link href="/style.css" rel="stylesheet">
</head>
<body>
<header>

<ul class="menu-bar">
    <li><a href="/">Takaisin</a></li>
    <?php if (session()->get('isLoggedIn')): ?>
    <li><a href="/user/register">Rekisteröidy</a></li>
    <?php endif ?>    
</ul>
</header>