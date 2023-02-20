<!DOCTYPE html>
<html>
<head>
    <meta charset= "UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Scorecard App</title>

    <!---Scorecard App CSS--->
    <link rel= "stylesheet" href= "/public/css/jumbotron.css">
    <link rel= "stylesheet" href= "/public/css/adminhead.css">
    <link rel= "stylesheet" href= "/public/css/admin.view.css">
    <link rel= "stylesheet" href= "/public/css/createeventform.view.css">
    <link rel= "stylesheet" href= "/public/css/editeventform.view.css">
    <link rel= "stylesheet" href= "/public/css/events.view.css">
    <!--<link rel= "stylesheet" href= "../public/css/user.view.css">-->

    <!---Fonts--->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
    </style>

    <!---Font Awesome icons--->
    <script src="https://kit.fontawesome.com/313d95636d.js" crossorigin="anonymous"></script>
</head>

<body>
    <!---Grid--->
    <div class="grid-container">
        <!---Banner--->
        <div class= "banner"></div>
        <!---Sidebar--->
        <div class="sidebar">
            <!---Profile info--->
            <div class="profile-pic">
                <img alt="User Pic" class= "rounded-circle" src="https://dummyimage.com/100x100/ffffff/a6a6a6&text=Profile+Photo" id="profile-image">
                <!--<input id="profile-image-upload" class="hidden" type="file" onchange="previewFile()">-->
                <br>
                <!--<p id= "username_adminview"><?=$username?></p>-->
                <p id= "joineddate_adminview">Joined date</p>
            </div>

            <a href="./index.php?action=index">HOME</a> <br>
            <a href="./index.php?action=adminevents">EVENTS</a> <br>
            <a href="./index.php?action=logout">LOGOUT</a>
        </div>
        <!---Content--->
        <div class= "content">