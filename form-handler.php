<?php
    
    echo "Курсът " . "<b>" . $_POST["subject-name" ] . "</b>" . " е добавен успешно!" . "<br><br>";
    echo "Информация за курса" . "<br>";
    echo "Име на курса: " . $_POST["subject-name"] . "<br>";
    echo "Преподавател: " . $_POST["lecturer"] . "<br>";
    echo "Брой кредити: " . $_POST["credits"] . "<br>";
    echo "Група ИД: " . $_POST["subject-type"] . "<br>";
    echo "Описание: " . $_POST["description"] . "<br>";
  
?>