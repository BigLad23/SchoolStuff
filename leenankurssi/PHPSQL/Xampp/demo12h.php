<?php
require "connection.php";
if(!isset($_GET["id"])) {
    header("Location:demo12f.php"); //paluu edelliselle sivulle 
 } else $id = $_GET["id"];

 

 $sql = "SELECT * FROM players WHERE id = ?";

 $stm = $pdo->prepare($sql);
 $stm->bindValue(1, $id);
 $stm->execute();

 $player = $stm->fetchAll(PDO::FETCH_ASSOC);
 $id = $player[0]["id"];
 $account_name = $player[0]["account_name"];
 $password = $player[0]["password"];
 $email = $player[0]["email"];
 $last_login = $player[0]["last_login"];
 $money = $player[0]["money"];
 $character = $player[0]["current_character"];
 $banned = $player[0]["banned"];
 

?>


<!doctype html>
<html lang="fi">
<head>
<title>Demo 12 e</title>
<meta charset ="utf-8">
</head>
<body>



<form method = "post" action="demo12hpost.php">

<input type="hidden" name="id" value = "<?= $id;?>">

<label for="aname">Käyttäjätunnus</label><br>
<input type="text" name="aname" value = "<?= $account_name;?>" required><br>

<label for="password">Salasana</label><br>
<input type="password" name="password" required><br>

<label for="password2">Salasana uudelleen</label><br>
<input type="password" name="password2" required><br>

<label for="email">sähköposti</label><br>
<input type="email" name="email"  value = "<?= $email;?>" required><br>

<label for="character">Hahmo</label><br>
<select name="character">
    <option value = "Monster"><?php if($character == "Monster") echo "selected"?>>Monster</option>
    <option value = "Orc"><?php if($character == "Orc") echo "selected"?>>Orc</option>
    <option value = "Warrior"><?php if($character == "Warrior") echo "selected"?>>Warrior</option>
    <option value = "Wizard"><?php if($character == "Wizard") echo "selected"?>>Wizard</option>
    <option value = "Elf"><?php if($character == "Elf") echo "selected"?>>Elf</option>
    <option value = "Fairy"><?php if($character == "Fairy") echo "selected"?>>Fairy</option>
    <option value = "Berserker"><?php if($character == "Berserker") echo "selected"?>>Berserker</option>
</select><br>
<br>
<label for="money">rahaa</label>
<br>
<input type="number" min="0" max="10000" value="<?=$money;?>"><br>

<br>
<input type="submit" value ="Muuta pelaajaa">
</form>


</body>
</html>

