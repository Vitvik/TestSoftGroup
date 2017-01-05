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
            <h3>Завдання 1</h3>
            <p>У форму вводиться число N. Знайти всі досконалі числа до N.
    Досконале число - це таке число, що дорівнює сумі всіх своїх дільників,
    крім себе самого. Наприклад, число 6 є досконалим, тому що крім себе
    самого ділиться на числа 1, 2 і 3, які в сумі дають 6.</p>
          </section>
        <div class="decision">
          <form action=" " method="post">
            <input type="text" name="num" placeholder="Введіть число N">
            <input type="submit" value="OK">
          </form>
          <?php
          include 'decision1.php';
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
