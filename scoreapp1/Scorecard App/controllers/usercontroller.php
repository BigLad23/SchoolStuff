<?php


function postregistercontroller()
{
    if(isset($_POST["username"], $_POST["email"], $_POST["password"],$_POST["password2"]))   {
        echo "Registered successfully!";
        $username = sanit($_POST["username"]);
        $email = sanit($_POST["email"]);
        $password = sanitpassword($_POST["password"]);

        $data = array($username,$email,$password);

        $ok = addUser($data);

        if($ok) {
            $message = "User added!";
            $users = getAllUsers(); //finds every user from the database
            require "./views/index.view.php";
        }
        else {
            $message = "Something went wrong.";
            require "./views/registrationform.view.php";
        }
    } else {
        $message = "Form not filled correctly, try again.";
        require "./views/registrationform.view.php";
    }
}



    function postlogincontroller()
{
   if(isset($_POST["username"],$_POST["password"]))  {
       $username = sanit($_POST["username"]);
       $password = sanit($_POST["password"]);

       $ok = loginUser($username,$password); 

       if($ok) {
           $user = getUserByUsername($username);
           $id = $user[0]["user_id"];
           $ip = $_SERVER["REMOTE_ADDR"];

           $_SESSION["id"] = $id;
           $_SESSION["ip"] = $ip;

           $users = getAllUsers();
           //require "./views/admin.view.php";
       } else {
           $message = "Invalid username.";
           require "./views/loginform.view.php";
       }
   } else {
       $message = "Form not filled correctly.";
       require "./views/loginform.view.php";
   }
}



function logoutcontroller()
{
    if(isset($_SESSION["ip"],$_SESSION["id"]))  {
        session_unset(); 
        session_destroy();
        header("Location:./index.php");
    } else header("Location:./index.php");

}
?>