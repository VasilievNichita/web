 <?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $phone = trim($_POST["phone"]);
 }
        
    if(!empty($name) && !empty($phone)) {

        $data = "Имя: $name || Телефон: $phone\n";

        //ДОРОГА К ФАЙЛУ
        $file = "clients.json";

        //запись в файл
        file_put_contents($file, $data, FILE_APPEND);

        echo '<script>alert("Данные успешно сохранены!"); window.location.href="index.php";</script>';

    } else {

        echo '<script>alert("ERORRRRR!!!!!"); window.location.href="index.php";</script>';

    }

 ?>