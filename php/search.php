<?php
    session_start();
    if(!isset($_SESSION['UNIQUE_ID'])){
        header("location: ../login.php");
    }
    include_once "config.php";
    $outgoing_id = $_SESSION['UNIQUE_ID'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND (fname LIKE '%{$searchTerm}%' OR lname LIKE '%{$searchTerm}%')");
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= "Không tìm thấy người dùng nào liên quan đến cụm từ tìm kiếm của bạn";
    }
    echo $output;
?>