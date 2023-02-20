<?php
require "./views/partials/adminhead.php";
?>

<!--This is the view for creating a new event.
    User inputs include event name, date and type.-->

<h1 id="createeventh1">Create New Event</h1>

<div class= "container-fluid" id= "formwrapper">
    <form method= "post" action= "./index.php?action=addevent">
        <label for= "name">Event name:</label> <br>
        <input type= "text" id= "eventname" name= "name" required> <br>

        <label for= "date">Event date:</label> <br>
        <input type= "date" id= "eventdate" name= "date" required> <br>

        <label for= "type">Event type:</label> <br>
        <select id= "eventoptions" name= "type" required>
            <option disabled selected>Select</option>
            <option>Music</option>
            <option>Sports</option>
            <option>Other</option>
        </select>       
                
        <div class= "container-fluid" id= "submitwrapper">
            <input type="submit" id= "submit" value= "CREATE EVENT">
        </div>
    </form>
</div>

<?php
require "./views/partials/adminend.php";
?>