<?php
// Не принято: 1, 2, 3, 4, 5, 6, 8, 9

// Не соответствует заданию
function strView($arr, $flag = false)
{

    if ($flag) {
        $rezal = explode(" ", $arr);
        foreach ($rezal as $item) {
            // Не используй такой вывод без объективной необходимости.
            // Во-первых, затрудняет чтение кода
            // ...
            // В-десятых, слишком сильно мешает восприятию
            echo <<<FORMATER
<p>$item</p><br>
FORMATER;


        }
    } else {
        $rezal = "";

    }
    return $arr;

}

// Не принято. Всегда некорректный результат.
function fixArk($action = "", $intArr = [])
{
    $msg = "Вы ввели некорректный арифметический оператор";
    $rezalt = null;
    switch ($action) {
        case("-"):
            foreach ($intArr as $item => $value) {

                $rezalt = $value - $value;
            };
            break;
        case("+"):
            foreach ($intArr as $item => $value) {

                $rezalt = $value + $value;
            };
            break;
        case("*"):
            foreach ($intArr as $item => $value) {

                $rezalt = $value * $value;
            };
            break;
        case(":"):
            foreach ($intArr as $item => $value) {

                $rezalt = $value / $value;
            };
            break;
        default:
            $rezalt = "0<br>.$msg";
    }
    return $rezalt;
}

// Не принято
function withoutArg()
{
    $rezalt = null;
    if (func_num_args() == 1) {
        $arg = func_get_args();
        if (is_string($arg[0])) {
            switch ($arg[0]) {
                case("-"):
                    foreach ($arg as $item => $value) {
                        if ($item > 0) {
                            continue;
                        }
                        $rezalt = $value - $value;
                    };
                    break;
                case("+"):
                    foreach ($arg as $item => $value) {
                        if ($item > 0) {
                            continue;
                        }
                        $rezalt = $value + $value;
                    };
                    break;
                case("*"):
                    foreach ($arg as $item => $value) {
                        if ($item > 0) {
                            continue;
                        }
                        $rezalt = $value * $value;
                    };
                    break;
                case(":"):
                    foreach ($arg as $item => $value) {
                        if ($item > 0) {
                            continue;
                        }
                        $rezalt = $value / $value;
                    };
                    break;
                default:
                    $rezalt = "Введите корректный арифметический оператор";
            }
        } else {
            $rezalt = "Вы не передали арифметический оператор";
        }

    } else {
        $rezalt = "Вы не передали не один аргумент";
    }
    return $rezalt;
}


// Не принято.
// Не используй для разных целей одни и те же переменные.
function createTable($a, $b)
{
    //@QU Не отримовывается таблица почему-то а ркзультат считается
    $reza11 = "";
    $reza12 = "";
    $reza13 = "";
    $reza14 = "";
    if (is_int($a) && is_int($b)) {
        $reza11 = "<table><tr>";
        for ($a = 1; $a <= $a; $a++) {
            for ($b = 1; $b <= $b; $b++) {
                $reza12 = "<td>" . ($a * $b) . "</td>";

            }
            if ($a != $a && $b != $b) {
                $reza13 = "<tr></tr>";
            }
        }
        $reza14 = "</tr></table>";
        $all = $reza11 . $reza12 . $reza13 . $reza14;
        return $all;
    } else {
        $all = "Передайте число";
        return $all;
    }

}

// Не соответствует заданию
function isPalindrome($w)
{
    trim(mb_strtolower($w));
    for ($i = 0, $l = mb_strlen($w) - 1, $il = ceil($l / 2); $i < $il; ++$i) {
        if ($w[$i] != $w[$l - $i]) {
            return false;
        } else {
            return true;
        }
    }


}

function showPalindrom($str)
{
    if (isPalindrome($str)) {
        $rw = "Это полиндром";
    } else {
        $rw = "Это не полиндром";
    }
    return $rw;
}

function createImg()
{

    $i = imageCreate(500, 300);
    $i = imageCreateTrueColor(500, 300);


    imageAntiAlias($i, true);

    $red = imageColorAllocate($i, 255, 0, 0);
    $white = imageColorAllocate($i, 0xFF, 0xFF, 0xFF);
    $black = imageColorAllocate($i, 0, 0, 0);
    $green = imageColorAllocate($i, 0, 255, 0);
    $blue = imageColorAllocate($i, 0, 0, 255);
    $grey = imageColorAllocate($i, 192, 192, 192);


    $i = imageEllipse($i, 200, 150, 300, 200, $red);
    header("Content-type: image/jpg");
    return imageJpeg($i);
}

// Не соответствует заданию.
function searchRx($strBad)
{
    //Описал функцию createImg но php почему-то совсем не видит эту библиотеку GD и фун. не отрабаиывает
    // как фидбэк для быстроты смайл на Svg рисовал

    // Есть ли у тебя библиотека php-gd? Включена ли она в php?
    $pattern = "[\d+]";
    $strBad = preg_match($pattern, $strBad, $out);
    if ((int)$out >= "1000") {
        $msg = "Сеть есть";
    } else {
        // $msg=createImg();
        header("Content-Type:image/svg");
        $msg = file_get_contents("smile.svg");
    }
    return $msg;

}

// Принято
$inputStr = "Карл у Клары украл Кораллы";
$pattern = "/К/";
$replace = " ";
$inputStr = preg_replace($pattern, $replace, $inputStr);
echo $inputStr;

$inputStr = "Две бутылки лимонада";
$pattern = "/Две/";
$replace = "ТРИ";
$inputStr = preg_replace($pattern, $replace, $inputStr);
echo $inputStr;

// Не принято
// Правильно
echo date("Y:m:d:H:i:s");
// Неправильно
echo date("H:i:s", "24.02.2016");
// Не принято. 500 ошибка.
function readFile()
{
    return $file = file_get_contents("text.txt");
}

// Принято
function createFile()
{
//@QU Функция отрабатывает но не создается файл почему-то
    // Прекрасно создается
    $str = "Hello Again";
    return file_put_contents("anothertest.txt", $str);
}

?>


<div class="View"> <?php echo readFile(); ?></div>
<div class="View"> <?php echo createFile(); ?></div>
<div class="View"> <?php echo searchRx("RX packets:950381 errors:0 dropped:0 overruns:0 frame:0."); ?></div>