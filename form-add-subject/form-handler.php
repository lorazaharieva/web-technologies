
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") {
    $courseName = htmlspecialchars(($_POST['course-name']));
    $lecturer = htmlspecialchars(($_POST['lecturer']));
    $credits = htmlspecialchars(($_POST['credits']));
    $group = htmlspecialchars(($_POST['group']));
    $description = htmlspecialchars(($_POST['description']));

    echo "Курсът <b>" . $courseName . "</b> е добавен успешно!<br><br>";

    echo "Информация за курса:" . "<br>";
    echo "<ul>";
    echo "<li>Име на курса: " . $courseName . "</li>";
    echo "<li>Преподавател: " . $lecturer . "</li>";
    echo "<li>Брой кредити: " . $credits . "</li>";
    echo "<li>Група: " . $group . "</li>";
    echo "<li>Описание: " . $description . "</li>";
    echo "</ul>";
} 
else {
    echo "Invalid request method.";
}
  
?>
