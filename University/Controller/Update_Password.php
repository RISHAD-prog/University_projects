<?php
require_once '../Model/Query.php';
require_once 'Pull_data.php';
if (isset($_POST['submit'])) {
    session_start();
    $data['username']=$_POST['username'];
    
    $user=pass_to_show($data);
    
    
    if(!empty($_POST["password"]) and !empty($_POST["confirm_password"]) )
    {
        if($_POST['password']!=$_POST['confirm_password'])
       {
           $data['new_password']=$_POST['confirm_password'];
   
           if (update_password($_POST['username'], $data) ) {
       
            if($user)
            {
                $_SESSION['username'] = $user['Username'];
                header('Location:../View/User_Dashboard.php');
            }
   
        }

    } 
    
}

}


