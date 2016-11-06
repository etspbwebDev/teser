
// простой вариант 1 задачи

<?/*php
$name="Константин";
$age=24;
echo<<<LINER
<p>Меня зовут$name</p><br />
<p>Мне $age года</p><br />
LINER;
echo ' " “!|\/’”\"';


*/?>
// усложненный вариант 1 задачи
//@QU не пойму почему после ввода данных все сбрасывается и отдается 500 статус, результат не выводится? Хотя когда все было захордкожено не вынесенно в функ-и - работало
<?php

//error_reporting(3);
// вспомогательные функции  Валидации данных
function validaterData($value){
    switch ($value){
        case is_int($value):$value=abs($value);break;
        case is_string($value):$value=trim(stripslashes(strip_tags($value)));break;

    }
    return $value;

}
 function check_length($value,$min,$max){
     $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
     return !$result;

 }

     function checkStrEnd($output){

         return $output%10==1&&$output%100!=11?'год':($output%10>=2&&$output%10<=4&&($output%100<10||$output%100>=20)?'года':'лет');

     }


// вспомогательные функции  Валидации данных КОНЕЦ



//  функции  Вывода данных
function showValidData(){
    $fullstrAge=" ";
$name=validaterData($_POST["name"]);
        $age=validaterData($_POST["age"]);
        if(empty($_POST['name']) &&empty($_POST['age'])|| $_POST['age']!==0){
            if(check_length($name, 2, 50) && check_length($age, 1, 3)) {
                 $fullstrAge=checkStrEnd($age);
                //@QU не пойму почему статус  не миняется
            $status="Данные сохранены";
            } else{
                $status="Введенные данные некорректные";

            }
        } else{
            $status="Заполните пустык поля";

        }

        return <<<DATA
<table style="table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;    
}">
<thead>
<tr>
<th>Имя</th>
<th>Возраст</th>
</tr>
</thead>
<tbody>
<tr>
<td>Меня зовут: $name</td>
<td>$fullstrAge</td>
</tr>
</tbody>
<tfoot>
<tr>
    <td>$status</td>
</tr>
</tfoot>
</table>
DATA;




}
// функции  Вывода данных КОНЕЦ


//Вывод данных
if($_SERVER["REQUEST_METHOD"]=="POST") {
  $rezalt=showValidData();

} else{
    $rezalt="Нет данных";
}
?>

<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task1</title>
    <script>
       /* window.onload= function () {
            var formB=document.getElementById("sub");
            formB.addEventListener("onclick",function () {
                var name= document.getElementById("name");
                var age= document.getElementById("age");
                if (age.value==" " || age.value<=0){
                    alert("введите корректное значение");
                    return false;
                }
                if (name.value==" " || name.value<=0 ||name.value>=0){
                    alert("введите корректное значение");
                    return false;
                }
             var form=document.getElementById("showInfo").style="display:none";
            });
        }*/
    </script>
</head>
<body>
<form action="" method="POST" id="showInfo">
    <fieldset>
        <legend>Данные обо мне</legend>
        <input type="text" id="name" name="name" placeholder="Введидите Ваше Имя" >
        <input type="text" id="age" name="age" placeholder="Введидите Ваш возраст" >
        <input type="submit" id="sub" value="Отправить">
    </fieldset>
</form>
<div class="rezalt"><?php //echo $rezalt."<br>". ' " “!|\/’”\"'?></div>
</body>
</html>


-->
// End task 1.1
//====================================================================================

// Bigin task 1.2
<?php


function CreateImg($all=80,$draw=40,$pen=23){
return $all-($draw+$pen);
}

$rezalt=CreateImg();


?>
<h1><?php echo $rezalt?></h1>
// End task 1.2


//====================================================================================
// Bigin task 1.3

<?php

define("DB_NAME","host");


if(DB_NAME){
    echo DB_NAME;
} else{
    echo "Вы пытаетесь обратиться к несуществующей Константе";
    return false;
}

?>
// End task 1.3
//====================================================================================
// Bigin task 1.4
<?php
$age=mt_rand(1,110);
if($age<=65&& $age>=18){
    echo "Еще работать и работать";

} elseif($age>0&& $age<=17){
    echo "Еще рано работать";
} else{
    echo "уже можно и не работать";
}



?>
// End task 1.4
//====================================================================================
// Bigin task 1.5
<?php
$day=mt_rand(0,30);
switch ($day){
    case $day>0&&$day<=5:echo "Это рабочий день";break;
    case $day>=6&&$day<=7:echo "Это Выходной день";break;
    default:echo "Это Неизвестный  день";
}



?>

// End task 1.5
//====================================================================================
// Bigin task 1.6
@QU Пробывал выводить с 2х вложеных foreach , что кажется лоичным но не срабатывает - почему и так и так выводит первый массив только?

<?php
$bmw=[
    "model"=>"X5",
     "speed"=>120,
     "doors"=>5,
      "year"=>2015
];

$tayota=[
    "model"=>"Camry",
    "speed"=>220,
    "doors"=>5,
    "year"=>2016
];
$opel=[
    "model"=>"Santara",
    "speed"=>100,
    "doors"=>3,
    "year"=>2013
];

$auto= ["opel"=>$opel,"tayota"=>$tayota,"bmw"=>$bmw];


foreach ($auto as $item=>$value){
foreach ($value as $key){

    echo <<<FORMAT
<dl>
<dt>$item
<dd>$key</dd>
</dt>

</dl>
FORMAT;

}




}



?>

// End task 1.6
//====================================================================================
// Bigin task 1.7
@QU Не пойму  как при таком выводе заставить показываться именно результат в скобках
<?php


    echo "<table><tr>";
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++){
if(($j % 2)==0){
    echo"
<td>(($i*$j))</td>";


} elseif(($j % 2)!==0){
    echo"
<td>[($i*$j)]</td>";


} else{
    echo"
<td>($i*$j)</td>";


}

    }
    if ($i != 10){
        echo "<tr></tr>";
    }



}

    echo "</tr></table>";



?>

// End task 1.7
//====================================================================================
// Bigin task 1.8
<?php

$str="Привет МИР PHP";
$toArr= explode(":",$str);
$i=0;
while ($i<=count($toArr)){
    echo $toArr[$i]."<br>";
    $i++;

}

$inArr=implode("?",$toArr);
echo $inArr;


echo $str;
?>

// End task 1.8
