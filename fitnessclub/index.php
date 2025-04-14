<!DOCTYPE html>
<html>
<head>
    <title>Marts Fitness</title>
    <link rel="stylesheet" href="assets/css/homepage.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-content">
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
        </div>
    </header>
    <main>
    <section class="frontphoto">
    <div class="overlay"></div>
    <div class="content">
        <h1>Marts fitness</h1>
        
        <p>Мы приносим в Молдову совершенно новый опыт с беспрецедентной тренировочной средой и динамичной и постоянно меняющейся коллекцией оборудования вчерашнего и сегодняшнего дня. Мы построили лучший тренажерный зал для лифтеров прямо здесь, в Кишиневе.</p>
    </div>
</section>

    <section class="enrol_section">
        <div class="container">

            <h2>Записаться сегодня</h2>
            <p> Вступай к нам и ощути самые современные и<br> продвинутые тренажерны в стране.</p>
            <p><strong>$49.99 Регистрационный взнос</strong> (ежегодная плата за обслуживание)</p>
                <p><strong>$59.99 ежемесячно </strong>(без контракта)</p>

                <form action="form.php" method="post" class="enrol_form">
                    <input type="text" class="form_input" name="name" placeholder="Ваше имя">
                    <input data-tel-input="text" class="form_input" name="phone" placeholder="Ваш телефон">

                    <p class="form_tel">Мы вам обязательно перезвоним</p>
                    
                    <button type="submit" class="join-btn">Вступить<br>Сейчас</button>
                </form>
                
            
                
            </section>
        </div>
    <section>
        <div  class="logo_2">
            <div class="dude">
                <div class="content">
                    <h1>"Нет ничего невозможного для того, кто пытается." </h1>
                    <p>- Александр Великий.</p>
                </div>
            </div>
        </div>
</section>
    <section>
        <h1 style="text-align: center;
            font-size: 2rem;
            color: white;">
            Наши услуги
        </h1>
        <div class="circle-buttons">
            <div class="circle", style="color:white;">Персональные тренировки</div>
            <div class="circle", style="color:white;">Групповые занятия</div>
            <div class="circle", style="color:white;">Йога и пилатес</div>
        </div>
</section>
</main>


   <footer class="footer">
        <div class="container">
            <section class="contact">
                <h2>Контакты</h2>
                <br>
                <p>Email: martsfits@gmail.com</p>
                <br>
                <p>Телефон: +373 123 456 789</p>
                <br>
                <p class="contact__prava">&copy; 2025 Marts Fitness. Все права защищены. Тяжело сдерживаться.</p>
            </section>
        </div>
  
</body>
</html>
