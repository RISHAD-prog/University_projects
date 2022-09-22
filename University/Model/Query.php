<?php
require_once 'db_connection.php';
function insert_data($data)
{
    $conn = Connection_db_forschedule();
    $query = 'INSERT INTO registration (Full_Name, Username, Email, Password, Gender, Date_of_Birth)
    VALUES (:fullname, :username, :email, :password, :gender, :dateofbirth)';
    try {
        $pstm = $conn->prepare($query);
        $pstm->execute([
            ':fullname' => $data['fullname'],
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dateofbirth' => $data['dateofbirth']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}
function assign_course($data)
{
    $conn = Connection_db_forschedule();
    $query = 'INSERT INTO student (Name, Student_Id, Course, Faculty)
    VALUES (:name, :id, :course, :faculty)';
    try {
        $pstm = $conn->prepare($query);
        $pstm->execute([
            ':name' => $data['name'],
            ':id' => $data['id'],
            ':course' => $data['course'],
            ':faculty' => $data['faculty']

        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}
function create_schedule($data)
{
    $conn = Connection_db_forschedule();
    $query = 'INSERT INTO routine (Faculty,Day, Course, Time)
    VALUES (:faculty,:day, :course, :time)';
    try {
        $pstm = $conn->prepare($query);
        $pstm->execute([
            ':faculty' => $data['username'],
            ':day' => $data['Day'],
            ':course' => $data['Course'],
            ':time' => $data['Time']

        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}
function pulldata($data)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "SELECT * FROM registration where Username =:username and Password=:password";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':username' => $data['username'],
            ':password' => $data['password'],
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function showAlldata($data)
{
    $conn = Connection_db_forschedule();

    $selectQuery = "SELECT * FROM registration where Username =:username ";



    try {

        $stmt = $conn->prepare($selectQuery);

        $stmt->execute([

            ':username' => $data['username']

        ]);
    } catch (PDOException $e) {

        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);



    return $row;
}
function showStudentdata()
{
    $conn = Connection_db_forschedule();
    $selectQuery = 'SELECT * FROM student ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function show_faculty($data)
{
    $conn = Connection_db_forschedule();

    $selectQuery = "SELECT * FROM routine where Faculty =:faculty ";



    try {

        $stmt = $conn->prepare($selectQuery);

        $stmt->execute([

            ':faculty' => $data['username'],


        ]);
    } catch (PDOException $e) {

        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);



    return $row;
}

function showCoursedata()
{
    $conn = Connection_db_forschedule();
    $selectQuery = 'SELECT * FROM routine ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function pass_id($id)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "SELECT * FROM routine where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function pass_studentid($id)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "SELECT * FROM student where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function updateData($username, $data)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "UPDATE registration SET Full_Name = ?, Email = ?,Password=?,Date_of_Birth = ? where  Username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['fullname'],  $data['email'], $data['password'], $data['dob'], $username
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function update_studentgrade($id, $data)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "UPDATE student SET Grade = ? where  ID= ?  ";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['grade'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function update_studentData($Course, $faculty, $data)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "UPDATE student SET Name = ?,Student_Id=? where  Course = ? and Faculty=? ";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['student_id'], $Course, $faculty
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function update_routine($id, $data)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "UPDATE routine SET Day = ?,Course=?, Time = ? where  ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['day'], $data['course'], $data['time'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function deleteData($id)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "DELETE FROM routine WHERE ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function pullemaildata($data)

{

    $conn = Connection_db_forschedule();

    $selectQuery = "SELECT * FROM registration where Email =:email ";



    try {

        $stmt = $conn->prepare($selectQuery);

        $stmt->execute([

            ':email' => $data['email']

        ]);
    } catch (PDOException $e) {

        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);



    return $row;
}
function update_password($username, $data)
{
    $conn = Connection_db_forschedule();
    $selectQuery = "UPDATE registration SET Password=? where  Username = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['new_password'], $username
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
