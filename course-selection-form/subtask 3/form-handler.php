<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $courseName = htmlspecialchars($_POST['courseName']);
        $lecturer = htmlspecialchars($_POST['lecturer']);
        $group = htmlspecialchars($_POST['group']);
        $credits = htmlspecialchars($_POST['credits']);
        $description = htmlspecialchars($_POST['description']);
        
        $response = array(
            "courseName" => $courseName,
            "lecturer" => $lecturer,
            "group" => $group,
            "credits" => $credits,
            "description" => $description,
            "message" => "Успешно записване!"
        );

        header('Content-Type: application/json');
        echo json_encode($response);
    }
    else {
        echo json_encode(array("message" => "Invalid request method."));
    }
?>

