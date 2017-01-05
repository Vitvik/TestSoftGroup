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
        <h3>Завдання 5</h3>
        <p>Задано текст. Словом вважається послідовність непробільних символів,
які йдуть підряд. Слова розділені одним або більшим числом пробілів або
символами кінця рядка.
Для кожного слова з цього тексту підрахуйте, скільки разів воно
зустрічалося в цьому тексті раніше. Використайте словники.</p>
        <h4>Приклад:</h4>
        <table class="border">
          <tr>
            <th class="col border">Ввід</th>
            <th class="border">Вивід</th>
          </tr>
          <tr>
            <td class="col border">one two one two three</td>
            <td class="border">0 0 1 1 0</td>
          </tr>
          <tr>
            <td class="col border">She sells sea shells on the sea
shore;
The shells that she sells are sea
shells I'm sure.
So if she sells sea shells on the
sea shore,
I'm sure that the shells are sea
shore shells.</td>
            <td class="border">0 0 0 0 0 0 1 0 0 1 0 0 1 0 2 2 0 0 0 0 1 2 3 3
1 1 4 0 1 0 1 2 4 1 5 0 0</td>
          </tr>
        </table>
    </section>
    <div class="decision">
      <form action="" method="post">
        <textarea name="textDec2" rows="4" cols="80" placeholder="Введіть текст"></textarea><br />
        <input type="submit" value="OK">
      </form>
      <?php
        include 'decision5.php';
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
