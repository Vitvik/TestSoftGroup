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
        <h3>Завдання 6</h3>
        <p>Змагання з гри «Тетріс-онлайн» проводяться за такими правилами:
Кожен учасник реєструється на сайті гри під певним ігровим ім'ям. Імена
учасників не повторюються.
Чемпіонат проводиться протягом певного часу. У будь-який момент цього
часу будь-який зареєстрований учасник може зайти на сайт чемпіонату і
почати залікову гру. Після закінчення гри її результат (кількість балів)
фіксується і заноситься до протоколу.
Учасники мають право грати кілька разів. Кількість спроб одного учасника
не обмежується. Остаточний результат учасника визначається по одній грі,
кращою для даного учасника. Більш високе місце в змаганнях займає
учасник, що показав кращий результат. При рівності результатів більш
високе місце займає учасник, раніше показав кращий результат.
В ході змагань заповнюється протокол, кожен рядок якого описує одну гру
і містить результат учасника і його ігрове ім'я. Протокол формується в
реальному часі по ходу проведення чемпіонату, тому рядки в ньому
розташовані в порядку проведення ігор: чим раніше зустрічається рядок у
протоколі, тим раніше закінчилася відповідна цьому рядку гра.
Напишіть програму, яка за даними протоколу визначає переможця і
призерів. Гарантується, що в чемпіонаті бере участь не менше трьох гравців.</p>
      <h4>Приклад:</h4>
      <table>
        <tr>
          <th class="col">Ввід</th>
          <th>Вивід</th>
        </tr>
        <tr>
          <td>9</td>
          <td>1 місце. Qwerty (197128)</td>
        </tr>
        <tr>
          <td class="col">69485 Jack</td>
          <td>2 місце. Alex (95715)</td>
        </tr>
        <tr>
          <td class="col">95715 qwerty</td>
          <td>3 місце. Jack (95715)</td>
        </tr>
        <tr>
          <td class="col">95715 Alex</td>
          <td></td>
        </tr>
        <tr>
          <td class="col">83647 M</td>
          <td></td>
        </tr>
        <tr>
          <td class="col">197128 qwerty</td>
          <td></td>
        </tr>
        <tr>
          <td class="col">95715 Jack</td>
          <td></td>
        </tr>
        <tr>
          <td class="col">93289 Alex</td>
          <td></td>
        </tr>
        <tr>
          <td class="col">95715 Alex</td>
          <td></td>
        </tr>
        <tr>
          <td class="col">95715 M</td>
          <td></td>
        </tr>
      </table>
    </section>
    <div class="decision">
    <!--
      <form action=upload.php method="post" enctype = 'multipart/form-data'>
      <input type=file name=uploadfile>
      <input type=submit value=Завантажити>
      </form>
    -->  
      <?php
      include 'decision6.php';
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
