<?php
require "./database/models/event.php";

function admineventscontroller () // Hakee kaikki tapahtumat adminevents-sivulle
{
    $events = getAllEvents ();
    require "./views/adminevents.view.php";
}

function geteventscontroller ()
{
    $allevents = getAllEvents();
    require "./views/userevents.view.php";
}

//ONLY USER --- Sends a bet to the database 
function postbetoneventcontroller ()
{
    if (isset ($_POST ["event_id"]))
    {
        $event_id = $_POST ["event_id"];
        $type = getEventType ($event_id);
        $event = getEventByID ($event_id);

        $userid = $_SESSION["id"];

        if ($type == "2") {
            $keys = array_keys($_POST);

            foreach ($keys as $i => $key) {
                if ($key != "event_id"){
                $ok = addRankingBet ($key, $i + 1, $userid);
                }            
            }
            if ($ok){
                $message = "Success!";
                //$yourbets = getYourBets ();

                require "./views/profile.php";
            } else {
                $message = "Something went wrong";
            }
        }    
    }  
}

//ONLY USER --- Checks the event type and opens the right form
function betoneventcontroller ()
{
    if (isset ($_GET ["event_id"]))
    {
        $event_id = $_GET ["event_id"];
        $type = getEventType ($event_id);
        $event = getEventByID ($event_id);
        if ($type == "2") {
            $contestants = getAllContestants($event_id);
            require "./views/ranking.bet.php";
        }
        else {
            require "./views/league.bet.php";
        }
    }
}

/*  This function posts the new event into database. 
    It also sanitizes user inputs and directs user in filling the form correctly.
*/

function postaddeventcontroller () 
{   
    if (isset ($_POST ["name"], $_POST ["date"], $_POST ["type"]))
    {   
        $name = sanit ($_POST ["name"]);
        $date = $_POST ["date"];
        $type = sanit ($_POST ["type"]);

        $data = array ($name, $date, $type);
        $ok = addEvent ($data);

        if ($ok)
        {   
            $_SESSION["message"] = "Event added succesfully";
            
            $allevents = getAllEvents ();

            header("Location: /index.php?action=adminevents");
        }
        else
        {
            $_SESSION["message"] = "Create event failed";

            require "./views/createeventform.view.php";
        }
    }
    else
    {   
        $_SESSION["message"] = "Fill out all the fields";

        require "./views/createeventform.view.php";
        
    }
}

/*  This function fetches the requested event for editing based on event ID
    and handles displaying the correct page.
*/

function getediteventcontroller () 
{
    if (isset ($_GET ["event_id"]))
    {
        $event_id = $_GET ["event_id"];
        $event = getEventByID ($event_id);

        require "./views/editeventform.view.php";
    }
    else
    {
        require "./views/admin.view.php";
    }
}

/* This function posts the changes made into the event via the edit event form. */

function postediteventcontroller ()
{
    if (isset ($_POST ["name"], $_POST ["date"], $_POST ["type"], $_POST ["event_id"]))
    {
        $name = $_POST ["name"];
        $date = $_POST ["date"];
        $type = $_POST ["type"];
        $event_id = $_POST ["event_id"];

        $data = array ($name, $date, $type, $event_id);
        $ok = editEvent ($data);

        if ($ok)
        {
            $_SESSION["message"] = "Event updated";

            $allevents = getAllEvents ();

            header("Location: /index.php?action=adminevents");
        }
        else
        {
            $_SESSION["message"] = "Update failed";
        }
    }
    else
    {
        $_SESSION["message"] = "Fill out all fields";

        header("Location: /index.php?action=adminevents");
    }
}

/* This function handles the deletion of events from the database */

function deleteeventcontroller ()
{
    if (isset ($_GET ["event_id"]))
    {
        $event_id = $_GET ["event_id"];

        if (deleteEvent ($event_id))
        {
            $_SESSION["message"] = "Event deleted";
        }
        else
        {
            $_SESSION["message"] = "Delete failed";
        }
    }
    else
    {
        $_SESSION["message"] = "Select an event first";
    }

    $allevents = getAllEvents ();

    header("Location: /index.php?action=adminevents");
}
?>