<?php

$conn = mysqli_connect("localhost", "root", "", "resep");

//to make a query
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

//login function
function login($data){
    global $conn;
    $email = $data["email"];
    $password = $data["password"];
    $query =  "SELECT * FROM user WHERE email = '$email' AND user.password = '$password' ";
    $result = query($query);
    return COUNT($result);
}

//regist function
function regist($data){
    global $conn;
    $email = $data["email"];
    $password = $data["password"];

    //cek apakah email sudah terdaftar
    $query = "SELECT * FROM user WHERE email = '$email'";
    $result = query($query);

    if(COUNT($result) > 0){
        return false;
    }

    //input data user
    $query2 = "INSERT Into user VALUES ('', '$email', '$password')";
    mysqli_query($conn, $query2);

    return true;
}