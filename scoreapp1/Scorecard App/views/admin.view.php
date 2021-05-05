<?php
require "./partials/adminhead.php";
?>

<div class= "row vh-100">
    <!---Admin tools (left side column)--->
    <div class= "col-12 col-sm-3" id= "admintools">

        <!---Profile pic--->
        <div class="profile-pic">
            <img alt="User Pic" class= "rounded-circle" src="https://dummyimage.com/100x100/ffffff/a6a6a6&text=Profile+Photo" id="profile-image">
            <br>
            <p id= "username">USERNAME</p>
            <p id= "joineddate">Joined date</p>
        </div>

        <!---Vertical nav--->
        <nav class= "navbar">
            <ul class= "navbar-nav">
                <li class="nav-item">
                    <a class= "nav-link" href= "">PROFILE</a>
                </li>

                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">MY EVENTS</a>

                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Create events</a></li>
                        <li><a class="dropdown-item" href="#">Edit events</a></li>
                    </ul>
                </div>

                <li class= "nav-item">
                    <a class= "nav-link" href="">LOGOUT</a>
                </li>
            </ul>
        </nav>

    </div>
    <div class= "col-12 col-sm-6" id= "col2">Column 2</div>
    <div class= "col-12 col-sm-3" id= "col3">Column 3</div>
</div>

<?php
require "./partials/end.php";
?>