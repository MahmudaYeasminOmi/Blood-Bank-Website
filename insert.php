<?php

$connect = mysqli_connect("localhost", "root", "", "blood_group");

if (!empty($_POST)) {
    $name = mysqli_real_escape_string($connect, $_POST["name"]);
    $address = mysqli_real_escape_string($connect, $_POST["address"]);
    $gender = mysqli_real_escape_string($connect, $_POST["gender"]);
    $blood = mysqli_real_escape_string($connect, $_POST["blood"]);
    $age = mysqli_real_escape_string($connect, $_POST["age"]);
    $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
    $query = "
    INSERT INTO blood(name, address, gender, blood, age,phone)  
     VALUES('$name', '$address', '$gender', '$blood', '$age','$phone')
    ";
    mysqli_query($connect, $query);


}
