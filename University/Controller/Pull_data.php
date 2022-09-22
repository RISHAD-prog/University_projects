<?php
require_once '../Model/Query.php';
function pass_topull($data)
{
    return pulldata($data);
}
function pass_topull_email($data)
{
    return pullemaildata($data);
}
function pass_to_show($data)
{
    return showAlldata($data);
}
function pass_to_update($id, $data)
{
    return updateData($id, $data);
}
function pass_to_getid($id)
{
    return pass_id($id);
}
function pass_to_deletedata($id)
{
    return deleteData($id);
}
function pass_to_showCourse()
{
    return showCoursedata();
}
function pass_to_showfaculty($data)
{
    return show_faculty($data);
}
function pass_to_addStudent($data)
{
    return assign_course($data);
}
function pass_to_coursedata()
{
    return course();
}
function pass_to_showCoursedata()
{
    return showStudentdata();
}
function pass_to_getstudentid($id)
{
    return pass_studentid($id);
}
