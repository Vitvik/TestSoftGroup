<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>SoftGroup test</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div class="wrapper">
    <header>
      <?php
        include 'header_inc.php'
       ?>
    </header>
    <div class="content wrap">
        <div class="sidebar">
          <?php
            include 'sidebar_inc.php';
           ?>
        </div>
        <article>
            <h2>Ткачук Віталій Вікторович</h2>
        <section>
            <p>Дата народження: 18 липня 1982 (34 роки)</p>
            <p>Телефон (050)6662485</p>
            <p>E-mail:tkachukvitaliy@gmail.com </p>
        </section>
        <section>
            <h3>Досвід роботи</h3>
            <h4>Інженер</h4>
            <p>з 04.2016 по нині (8 місяців)<br>
                ПрАТ "Датагруп" (IT) </p>
            <p>Організація каналів зв'язку.</p>
            <h4>Інженер СКМ</h4>
            <p>з 03.2008 по нині (8 років 9 місяців)<br>
            ТОВ ІТ-Інтегратор (ІТ системний інтеграттор)</p>
            <p>Супровід та впровадження проектів(компютерні мережі, системи відеоспостереження)</p>
        </section>
        <section>
            <h3>Освіта</h3>
            <p>з 09.2000 по 05.2005<br>
                Чернівецький Національний Університет, Факультет Комп'ютерних наук, Чернівці.</p>
            <p>Спеціальність: Інженер з комп'ютерних систем та мереж</p>
        </section>
        <section>
            <h3>Професійні навички</h3>
            <ul>
                <li>Володіння мовами розмітки HTML CSS - середній рівень.</li>
                <li>Володіння програмами GIMP, Photoshop - середній рівень.</li>
                <li>Володіння мовою структурованих запитів SQL - початковий рівень.</li>
                <li>JavaScript – початковий рівень.</li>
                <li>Розуміння процесів QA – середній рівень.</li>
                <li>PHP - початковий рівень.</li>
            </ul>
        </section>
        <section>
            <h3>Знання мов</h3>
            <p>Англійська — середній</p>
        </section>
        <section>
            <h3>Додаткова інформація</h3>
            <p>Хобі:</p>
            <ul>
                <li>читання книг</li>
                <li>подорожі</li>
                <li>створення предметів своїми руками</li>
            </ul>
        </section>
        </article>
    </div>
    <footer>
      <?php
        include 'footer_inc.php';
       ?>
    </footer>
</div>
</body>
</html>
