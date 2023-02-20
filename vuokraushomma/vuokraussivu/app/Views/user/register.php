<?= \Config\Services::validation()->listErrors(); ?>

<h3>Register</h3>

<form action="/user/register" method="post">
 
    <div><label for="name">name</label>
        <input type="text" name="name" id="name" value="">
    </div>

    <div><label for="surname">surname</label>
        <input type="text" name="surname" id="surname" value="">
    </div>

    <div><label for="email">email</label>
        <input type="text" name="email" id="email" value="">
    </div>
 

    <div><label for="password">Salasana</label>
        <input type="password" name="password" id="password" value="">
    </div>
        
    <div><label for="password2">Salasana uudelleen</label>
        <input type="password" name="password2" id="password2" value="">
    </div>
     
    <input type="submit" name="submit" value="Rekisteröidy" />
</form>