<!DOCTYPE html>
<html>
<head>
    <title>Marts Fitness - Расположение</title>
    <link rel="stylesheet" href="assets/css/locattion.css">
</head>
<body>
     <header class="header">
        <div class="container header-content">
            <div class="logo">
                <a href="/index.php">
                    <img src="assets/img/logo.jpeg" alt="Marts fitness">
                </a>
            </div>
            <nav class="nav">
                <ul class="nav_list">
                    <li><a href="/about.php">О нас</a></li>
                        <li><a href="/abonements.php">Абонементы</a></li>
                        <li><a href="/locattion.php">Расположение</a></li>
                        <li><a href="/contact.php">Контакты</a></li>
                    </ul>
            </nav>
        </div>
    </header>

    <main>
        <div id="map-container">
            <div class="map" id="map"></div>
        </div>
    </main>


    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Marts Fitness. Все права защищены.</p>
        </div>
    </footer>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=869d45f1-21cc-4bb8-aab9-4b8b868e21c6&lang=ru_RU" type="text/javascript"></script>


    <script src="./assets/js/locattion.js"></script>

</body>
</html>

