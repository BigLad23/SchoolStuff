<?php

require "../database/connection.php";


function GetAllEvents()
{
    global $pdo;
    $sql = "SELECT * FROM fleemarket";
    $stm = $pdo->query($sql);

    $fleetmarkets = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $fleetmarkets;
}

function GetAllProducts()
{
    global $pdo;
    $sql = "SELECT * FROM product";
    $stm = $pdo->query($sql);

    $products = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function GetAllCategories() 
{
    global $pdo;
    $sql = "SELECT * FROM productcategory";
    $stm = $pdo->query($sql);

    $products = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}
function GetCategoryProducts($category) 
{
    global $pdo;
    $sql = "SELECT * FROM product WHERE categoryid = ?";
    $stm=$pdo->prepare($sql);
    $stm->execute([$category]);
    $products = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function GetEvent($market) 
{
    global $pdo;
    $sql = "SELECT * FROM reservations WHERE marketid = ?";
    $stm=$pdo->prepare($sql);
    $stm->execute([$market]);
    $markets = $stm->fetch(PDO::FETCH_ASSOC);
    return $markets;
}

function getEventById($marketID)
{
    global $pdo;
    $sql = "SELECT * FROM fleemarket WHERE marketid = ?";
    $stm=$pdo->prepare($sql);

    $stm->bindvalue(1,$marketID);
    $stm->execute();

    $event = $stm->fetch(PDO::FETCH_ASSOC);
    return $event;
}

function getProductByid($productID)
{
    global $pdo;
    $sql = "SELECT * FROM product WHERE productid = ?";
    $stm=$pdo->prepare($sql);
    
    $stm->bindvalue(1,$productID);
    $stm->execute();

    $product = $stm->fetch(PDO::FETCH_ASSOC);
    return $product;
}

function GetAllReservations()
{
    global $pdo;
    $sql = "SELECT * FROM reservations";
    $stm = $pdo->query($sql);

    $reservations = $stm->fetchAll(PDO::FETCH_ASSOC);
    return $reservations;
}

function addProduct($data) 
{
    global $pdo;
    $sql = "INSERT INTO product (userid,categoryid,description,price,imageurl) VALUES(?,?,?,?,?)";  

    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;  
}

function addEvent($data) 
{
    global $pdo;
    $sql = "INSERT INTO fleemarket (duration,startingtime,enddate,tables,carslots,location) VALUES(?,?,?,?,?,?)";    

    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;  
}

function addReservation($data)
{
    global $pdo;
    $sql = "INSERT INTO reservations (marketid,userid,type,slotnumber) VALUES(?,?,?,?)";

    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;
}

function updateProduct($data)
{
    global $pdo;
    $sql = "UPDATE product SET categoryid=?,description=?,price=?,imageurl=? WHERE productid=?";
    
    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;   
}

function updateEvent($data)
{
    global $pdo;
    $sql = "UPDATE fleemarket SET duration=?,startingtime=?,enddate=?,tables=?,carslots=?,location=? WHERE marketid=?";
    
    $stm=$pdo->prepare($sql);
    if($stm->execute($data)) return TRUE;
    else return FALSE;   
}

function deleteProduct($id)
{
    global $pdo;
    $sql = "DELETE FROM product WHERE productid=?";
    $stm=$pdo->prepare($sql);
    $stm->bindValue(1,$id);
    if($stm->execute()) return TRUE;
    else return FALSE;
}

function deleteEvent($id)
{
    global $pdo;
    $sql = "DELETE FROM fleemarket WHERE marketid=?";
    $stm=$pdo->prepare($sql);
    $stm->bindValue(1,$id);
    if($stm->execute()) return TRUE;
    else return FALSE;
}