<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Задание 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="POST">
  <input name="fio" />
  <input enail="email" />
  <select name="year">
    <?php 
    for ($i = 1922; $i <= 2022; $i++) {
      printf('<option value="%d">%d год</option>', $i, $i);
    }
    ?>
  </select>
  Пол:<br/>
  <label>
  <input type="radio" checked="checked" name="pol"/>
    M
  </label>
  <label>
  <input type="radio" checked="checked" name="pol"/>
    W
  </label>
  Кол-во конечностей:<br/>
        <label>
            <input type="radio" checked="checked" name="radio-group-2"/>
            1
        </label>
        <label>
            <input type="radio" name="radio-group-2"/>
            2
        </label>
        <label>
            <input type="radio" name="radio-group-2"/>
            3
        </label>
        <label>
            <input type="radio" name="radio-group-2"/>
            4
        </label>
        <label>
            <input type="radio" name="radio-group-2"/>
            5
        </label><br/>
    <label>
            Сверхспособности:<br/>
            <select name="field-name-4[]" multiple="multiple">
                <option value='бессмертие'>бессмертие</option>
                <option value='прохождение сквозь стены' selected="selected">прохождение сквозь стены</option>
                <option value='левитация' selected="selected">левитация</option>
            </select>
        </label><br/>
  <label>
            Биография:<br/>
            <textarea name="field-name-2">Расскажите о себе</textarea>
        </label><br/>
          <label>
            <input type="checkbox" checked="checked" name="check-1"/>
            с контрактом ознакомлен (а)
        </label><br/>
  <input type="submit" value="ok" />
</form>
  </body>
</html>
