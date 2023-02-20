<?php
require "./views/partials/adminhead.php";
?>

    <h1 id= "events">My Events</h1>

    <div class= "container-fluid" id= "createevent">
        <a href= "./index.php?action=addevent" class= "button">CREATE NEW EVENT</a>
    </div>

    <div class="container-fluid" id="message">
        <?php 
            if (isset ($_SESSION["message"])) {
                echo $_SESSION["message"];
                unset ($_SESSION["message"]);
            }
        ?>
    </div>

    <table>
        <thead>
            <tr>
                <th>Name:</th>
                <th>Date:</th>
                <th>Type:</th>
                <th>Event tools:</th>                   
            </tr>
        </thead>

        <tbody>
            <?php foreach ($events as $event) {?>
            <tr>
                <td><?=$event ["name"];?></td>
                <td><?=$event ["date"];?></td>
                <td><?=$event ["type"];?></td>
            <td>
                <a href= "./index.php?action=editevent&event_id=<?=$event ["event_id"];?>"><i class="fa-solid fa-pen-to-square" title= "Edit"></i></a>
                <a href= "./index.php?action=deleteevent&event_id=<?=$event ["event_id"];?>"><i class="fas fa-trash-alt" title= "Delete"></i></a>
            </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

<?php
require "./views/partials/adminend.php";
?>