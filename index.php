<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/style.css" />
    <title>Поляков Евгений Алексеевич ЛР9 В5</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="logo" width="60px" />
        </div>

        <div class="buttons">
            <a href="">Главная</a>
            <a href="">О нас</a>
            <a href="">Обратная связь</a>
        </div>
    </header>

    <main>
    <?php

$x = 0; // начальное значение аргумента
$encounting = 10; // количество вычисляемых элементов
$step = 1; // шаг изменений аргументов
$type = "D"; //тип верстки
$result; // результат функции
$average;
$sum = 0;
$max = PHP_INT_MIN;
$min = PHP_INT_MAX;


function f($x) {
    if ($x<=10) {
        return 3*$x + 9;
    }
    else if ($x>10 && $x<20) {
        return ($x+3)/($x**2 - 121);
    }
    else if ($x>=20) {
        return $x**2 * 4;
    }
}

if ($type == 'B') echo '<ul>';
else if ($type == 'C') echo '<ol>';
else if ($type == 'D') echo '<table class="type_D">';
else if ($type == 'E') echo '<div class="type_E">';
    
for ($i = 0; $i < $encounting; $i++, $x += $step) {
    $result = f($x);
    if ($type == 'A') {
        echo 'f(' . $x . ') = ' . $result. '<br>';
        // if( $i < $encounting-1 ) echo '<br>';
    } else if ($type == 'B') {
            echo '<li>f(' . $x . ') = ' . $result . '</li>';
        } else if ($type == 'C') {
            echo '<li>f(' . $x . ') = ' . $result . '</li>';
        } else if ($type == 'D') {
            echo '<tr><td>' . $i . '</td><td>f(' . $x . ')</td><td>' . $result . '</td></tr>';
        } else if ($type == 'E') {
            echo '<div>f(' . $x . ') = ' . $result . '</div>';
        }

    
    if ($result > $max) $max = $result;
    if ($result < $min) $min = $result;
    $sum += $result;
}

if ($type == 'B') echo '</ul>';
else if ($type == 'C') echo '</ol>';
else if ($type == 'D') echo '</table>';
else if ($type == 'E') echo '</div>';

$average = $sum / $encounting;

echo '<p>Среднее арифметическое: '.$average.'<p>';
echo '<p>Сумма: '.$sum.'<p>';
echo '<p>Минимальное значение: '.$min.'<p>';
echo '<p>Максимальное значение: '.$max.'<p>';
?>



    </main>

    <footer>
        <div class="information">
            <div class="contacts">
                <p>Contacts: <br> +79212360692
                    <br> polevg2015@yandex.ru
                </p>
            </div>
        </div>
        <div class="copyright">
            <p>(С) 2022 Поляков Е.А.</p>
        </div>
    </footer>
</body>

</html>