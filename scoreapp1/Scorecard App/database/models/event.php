<?php
/*  This function fetches all the events from the database */
function getAllEvents ()
{
    global $pdo;

    $sql = "SELECT * FROM event";

    $stm = $pdo->query ($sql);

    $events = $stm->fetchAll (PDO::FETCH_ASSOC);
    return $events;
}

function addRankingBet ($contestant_id, $guess, $user_id)//kesken
{
    global $pdo;

    $sql = "SELECT * FROM rankingbets WHERE contestant_id = ? AND user_id = ?";
    
    $stm = $pdo->prepare ($sql);
    $stm->execute (array($contestant_id, $user_id));
        
    $result = $stm->fetchAll (PDO::FETCH_ASSOC);

    if ($result){
        $sql = "UPDATE rankingbets SET guessedranking = ? WHERE user_id = ? AND contestant_id = ?";
        
        $stm = $pdo->prepare ($sql);
        $ok = $stm->execute (array($guess, $user_id, $contestant_id));
        return $ok;
    }else {
        $sql = "INSERT INTO rankingbets (contestant_id, guessedranking, user_id) VALUES (?, ?, ?)";
        
        $stm = $pdo->prepare ($sql);
        $ok = $stm->execute (array($contestant_id, $guess, $user_id));
        return $ok;
    }
}

function addLeagueBet ($data)//kesken
{
    global $pdo;

    $sql = "INSERT INTO leaguebets (guessedlranking, lmatch_id, user_id) VALUES (?, ?, ?)";

    $stm = $pdo->prepare ($sql);
    $ok = $stm->execute ($data);
    return $ok;
}

function getAllContestants ($event_id)//kesken
{
    global $pdo;

    $sql = "SELECT * FROM rankingcontestant WHERE event_id = ?";
    
    $stm = $pdo->prepare ($sql);
    $stm->bindValue (1, $event_id);
    $stm->execute ();
        
    $contestants = $stm->fetchAll (PDO::FETCH_ASSOC);
    return $contestants;
}

/*  This function instructs the database to fetch the requested event based on event ID.
    It contains the required SQL command and handles the execution of said command.
*/

function getEventByID ($event_id)
{
    global $pdo;

    $sql = "SELECT * FROM event WHERE event_id = ?";

    $stm = $pdo->prepare ($sql);
    $stm->bindValue (1, $event_id);
    $stm->execute ();
    $event = $stm->fetch (PDO::FETCH_ASSOC);
    return $event;
}

/*  This function instructs the database in adding a new event.
    It contains the required SQL command and handles the execution of said command.
*/

function addEvent ($data) 
{
    global $pdo;

    $sql = "INSERT INTO event (name, date, type) VALUES (?, ?, ?)";

    $stm = $pdo->prepare ($sql);
    $ok = $stm->execute ($data);
    return $ok;
}

/*  This function instructs the database in editing an event.
    It contains the required SQL command and handles the execution of said command.
*/

function editEvent ($data)
{
    global $pdo;

    $sql = "UPDATE event SET name = ?, date = ?, type = ? WHERE event_id = ?";

    $stm = $pdo->prepare ($sql);
    $ok = $stm->execute ($data);
    return $ok;
}

/*  This function instructs the database in deleting an event.
    It contains the required SQL command and handles the execution of said command.
*/

function deleteEvent ($event_id)
{
    global $pdo;

    $sql = "DELETE FROM event WHERE event_id = ?";

    $stm = $pdo->prepare ($sql);
    $stm->bindValue (1, $event_id);
    $ok = $stm->execute ();
    return $ok;
}

function getEventType ($event_id)
{
    global $pdo;

    $sql = "SELECT * FROM event WHERE event_id = ?";

    $stm = $pdo->prepare ($sql);
    $stm->bindValue (1, $event_id);
    $stm->execute ();
    $event = $stm->fetchAll (PDO::FETCH_ASSOC);
    $type = $event[0]["type"];
    return $type;
}
?>