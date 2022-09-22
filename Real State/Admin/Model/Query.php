<?php
require_once 'db_connection.php';
function insert_data($data)
{
    $conn = Connection_db();
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
function pulldata($data)
{
    $conn = Connection_db();
    $selectQuery = "SELECT * FROM registration where Username =:username and Password=:password";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':username' => $data['username'],
            ':password' => $data['password']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function pullemaildata($data)
{
    $conn = Connection_db();
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
function showAlldata()
{
    $conn = Connection_db();
    $selectQuery = 'SELECT * FROM registration ';
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
    $conn = Connection_db();
    $selectQuery = "SELECT * FROM registration where ID = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function updateData($id, $data)
{
    $conn = Connection_db();
    $selectQuery = "UPDATE registration SET Full_Name = ?, Username = ?, Email = ?,Date_of_Birth = ? where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['fullname'], $data['username'], $data['email'], $data['dob'], $id
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function deleteData($id)
{
    $conn = Connection_db();
    $selectQuery = "DELETE FROM registration WHERE ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
