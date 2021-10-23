<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tevily_db";
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
} else {
    // echo "Connected successfully";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // collect value of input field
    $camp_no = $_REQUEST['camp_no'];
    $camp_date = $_REQUEST['camp_date'];
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $phone1 = $_REQUEST['phone1'];
    $phone2 = $_REQUEST['phone2'];
    $birthdate = $_REQUEST['birthdate'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $blood_group = $_REQUEST['blood_group'];
    $weight = $_REQUEST['weight'];
    $organization = $_REQUEST['organization'];
    $parent_first_name = $_REQUEST['parent_first_name'];
    $parent_last_name = $_REQUEST['parent_last_name'];
    $parent_phone = $_REQUEST['parent_phone'];
    $parent_email = $_REQUEST['parent_email'];
    $other_camp_detail = $_REQUEST['other_camp_detail'];
    $disease_phobia = $_REQUEST['disease_phobia'];
    $profile_img = $_REQUEST['profile_img'];
    $identity_img = $_REQUEST['identity_img'];
    

    $sql = "INSERT INTO registration 
(`camp_no`, `camp_date`, `first_name`, `last_name`, `address`, `email`, `phone1`, `phone2`, `birthdate`, `age`, `gender`, `blood_group`, `weight`, `organization`, `parent_first_name`, `parent_last_name`, `parent_phone`, `parent_email`, `other_camp_detail`, `disease_phobia`, `profile_img`, `identity_img`) 
     VALUES 
('$camp_no', '$camp_date', '$first_name', '$last_name',' $address','$email', $phone1, $phone2, $birthdate, $age, '$gender', '$blood_group', $weight, '$organization', '$parent_first_name', '$parent_last_name', $parent_phone, '$parent_email', '$other_camp_detail', '$disease_phobia', '$profile_img', '$identity_img')";
  
    if ($mysqli->query($sql) === TRUE) {
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Registration successfully');
    window.location.href='registration.php';
    </script>");
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }


    // if (empty($data)) {
    //     echo "data is empty";
    // } else {
    //     echo $data."<br/>";
    // }
}


// Closing the connection.
$mysqli->close();

?>