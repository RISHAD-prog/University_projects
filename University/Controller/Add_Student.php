<?php
require_once '../Model/Query.php';
if (isset($_POST['submit']))
{
    function action($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}


   $userdata['name'] = action($_POST['name']);
    $userdata['id'] = action($_POST['student_id']);
    $userdata['course'] =action($_POST['course']) ;
    $userdata['faculty']=action ($_POST['faculty']);
   
    if (assign_course($userdata) ) {
        session_start();
        header('Location:../View/Add_student.php');
    } 
}
?>