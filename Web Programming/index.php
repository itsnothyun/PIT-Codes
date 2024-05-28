<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection code
$con = mysqli_connect('localhost', 'root', '', 'db_crew');

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    var_dump($_POST);
    
    // Get the personal_info records
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : ''; 
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $contact_number = isset($_POST['contact_number']) ? $_POST['contact_number'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    // Database insert SQL code for personal_info
    $sql_personal_info = "INSERT INTO `personal_info` (`first_name`, `last_name`, `birthdate`, `gender`, `address`, `city`, `contact_number`, `email`) 
                          VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement for personal_info
    $stmt_personal_info = mysqli_prepare($con, $sql_personal_info);

    // Check if statement preparation succeeded
    if ($stmt_personal_info) {
        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($stmt_personal_info, "ssssssss", $first_name, $last_name, $birthdate, $gender, $address, $city, $contact_number, $email);

        if (mysqli_stmt_execute($stmt_personal_info)) {
            echo "New personal info record created successfully.<br>";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt_personal_info);
        }

        // Close statement
        mysqli_stmt_close($stmt_personal_info);
    } else {
        echo "Error: Failed to prepare personal_info statement. " . mysqli_error($con);
    }

    // Get the personal_education records
    $high_school = isset($_POST['high_school']) ? $_POST['high_school'] : ''; 
    $high_school_location = isset($_POST['high_school_location']) ? $_POST['high_school_location'] : '';
    $college = isset($_POST['college']) ? $_POST['college'] : '';
    $college_location = isset($_POST['college_location']) ? $_POST['college_location'] : '';
    $graduate_school = isset($_POST['graduate_school']) ? $_POST['graduate_school'] : '';
    $graduate_school_location = isset($_POST['graduate_school_location']) ? $_POST['graduate_school_location'] : '';

    // Debug: print the variables
    echo "High School: $high_school<br>";
    echo "High School Location: $high_school_location<br>";
    echo "College: $college<br>";
    echo "College Location: $college_location<br>";
    echo "Graduate School: $graduate_school<br>";
    echo "Graduate School Location: $graduate_school_location<br>";

    // Database insert SQL code for personal_education
    $sql_personal_education = "INSERT INTO `personal_education` (`high_school`, `high_school_location`, `college`, `college_location`, `graduate_school`, `graduate_school_location`) 
                               VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the SQL statement for personal_education
    $stmt_personal_education = mysqli_prepare($con, $sql_personal_education);

    // Check if statement preparation succeeded
    if ($stmt_personal_education) {
        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($stmt_personal_education, "ssssss", $high_school, $high_school_location, $college, $college_location, $graduate_school, $graduate_school_location);

        if (mysqli_stmt_execute($stmt_personal_education)) {
            echo "New personal education record created successfully.<br>";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt_personal_education);
        }

        // Close statement
        mysqli_stmt_close($stmt_personal_education);
    } else {
        echo "Error: Failed to prepare personal_education statement. " . mysqli_error($con);
    }

    // Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);

    // Get the form records
    $position_applying = isset($_POST['position_applying']) ? $_POST['position_applying'] : ''; 
    $expected_salary = isset($_POST['expected_salary']) ? $_POST['expected_salary'] : '';

    // Insert SQL code for personal_position
    $sql = "INSERT INTO `personal_position` (position_applying, expected_salary) VALUES (?, ?)";

    // Prepare the SQL statement
    $stmt = mysqli_prepare($con, $sql);

    // Check if statement preparation succeeded
    if ($stmt) {
        // Bind parameters and execute the statement
        mysqli_stmt_bind_param($stmt, "ss", $position_applying, $expected_salary);

        if (mysqli_stmt_execute($stmt)) {
            echo "New personal position record created successfully.<br>";
        } else {
            echo "Error: " . mysqli_stmt_error($stmt);
        }

        // Close statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error: Failed to prepare statement. " . mysqli_error($con);
    }
}

}

// Close connection
mysqli_close($con);
?>
