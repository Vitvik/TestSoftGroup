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
      <section>
        <h3>Завдання 2</h3>
        <p>У форму вводиться текст, слова в якому розділені пробілами і
розділовими знаками. Вилучити з цього тексту всі слова найбільшої
довжини. (Слів найбільшої довжини може бути декілька).</p>
    </section>
    <div class="decision">
      <form action="" method="post">
        <textarea name="textDec2" rows="4" cols="80" placeholder="Введіть текст"></textarea><br />
        <input type="submit" value="OK">
      </form>
      <?php
        include 'decision2.php';
       ?>
    </div>
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
