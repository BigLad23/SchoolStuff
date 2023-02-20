<?php
require "./views/partials/userhead.php";
if(isset($message)) echo "<hr>". $message."<hr>";

//var_dump($events);
if(isset($message)) echo "<hr>". $message."<hr>";

foreach($allevents as $oneevent) { ?>

    <h2><?= $oneevent["name"];?></h2>
    <p><?= $oneevent["date"];?></p>
    <p><?= $oneevent["type"];?></p>
    <a href="./index.php?action=betonevent&event_id=<?=$oneevent["event_id"];?>">Bet on event</a>

<?php
}
include "./views/partials/end.php";
?>