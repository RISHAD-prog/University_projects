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
function pass_to_show()
{
    return showAlldata();
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
