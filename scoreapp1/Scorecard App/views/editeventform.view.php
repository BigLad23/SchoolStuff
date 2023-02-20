<?php
require "./views/partials/adminhead.php";
?>

<div class= "row vh-100">
    <!---Content--->
    <div class= "col-12" id= "content">
        <h1>Edit Event</h1>

        <div class= "container-fluid" id="formwrapper">
            <form method= "post">
                <input type="hidden" name="event_id" value="<?=$event ["event_id"];?>" />
                <label for= "name">Event name:</label>
                <input type= "text" class= "form-control" value= "<?=$event ["name"];?>" id= "eventname" name= "name" required />

                <label for= "date">Event date:</label>
                <input type= "date" class= "form-control" value= "<?=$event ["date"];?>" id= "eventdate" name= "date" required />

                <label for= "type">Event type:</label> <br>
                <select id= "eventoptions" name= "type" class= "form-control" required>
                    <option
                        <?php
                            if ($event["type"] == "Music")
                                echo "Selected";
                            ?>
                    >Music</option>

                    <option
                        <?php
                            if ($event["type"] == "Sports")
                                echo "Selected";
                        ?>
                    >Sports</option>

                    <option                             
                        <?php
                            if ($event["type"] == "Other")
                                echo "Selected";
                        ?>
                    >Other</option>
                </select>

                <div class= "container-fluid" id="submitwrapper">
                    <button type="submit" class="btn-basic rounded-0">EDIT EVENT</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
require "./views/partials/adminend.php";
?>