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
        <h3>Завдання 3</h3>
        <p>Вводяться N натуральних чисел більше 2. Підрахувати, скільки серед
них простих чисел.</p>
    </section>
    <div class="decision">
      <form action="" method="post">
        <input type="text" name="number" placeholder="Введіть натуральні числа">
        <input type="submit" value="OK">
      </form>
      <?php
      include 'decision3.php';
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
