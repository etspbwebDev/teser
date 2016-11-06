<?php
/*
function check_length($value,$min,$max){
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;

}

function validaterData($value){
    switch ($value){
        case is_int($value):$value=trim(stripslashes(strip_tags(abs($value))));break;
        case is_string($value):$value=trim(stripslashes(strip_tags($value)));break;
        default:$value= trim(stripslashes(strip_tags(htmlspecialchars($value))));
    }

    return $value;

}



function calcer($action, $intArr){

    $action=validaterData($_POST["action"]);
    $a=validaterData($_POST["input1"]);
    $b=validaterData($_POST["input2"]);

    $msg="";
    $rezalt=[];

switch ($action){
    case("-"):$rezalt= $a-$b; break;
    case("+"):$rezalt= $a-$b;break;
    case("*")||("x"):$rezalt= $a*$b;break;
    case(":"):$rezalt= $a/$b;break;
    default:$msg="Введите корректный арифметический оператор";
}

}
*/


//error_reporting(3);
// вспомогательные функции  Валидации данных
function validaterData($value){
    switch ($value){
        case is_int($value):$value=trim(stripslashes(strip_tags(abs($value))));break;
        case is_string($value):$value=trim(stripslashes(strip_tags($value)));break;
        default:$value= trim(stripslashes(strip_tags(htmlspecialchars($value))));
    }
    return $value;

}
 function check_length($value,$min,$max){
     $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
     return !$result;

 }
 function checkStrEnd($end){
     $end=substr($end,-1);
     switch ($end){
         case $end>=2 && $end<=4:$formatStrAge="мне ".$end."года"; break;
         case $end>=5:$formatStrAge="мне ".$end."лет"; break;
         default:$formatStrAge="мне ".$end."год";
     }
     return $formatStrAge;
 }
// вспомогательные функции  Валидации данных КОНЕЦ



//  функции  Вывода данных
function showValidData(){
    $fullstrAge=" ";
    $name=validaterData($_POST["name"]);
    $age=validaterData($_POST["age"]);
    if(!empty($_POST['name']) &&!empty($_POST['age'])|| $_POST['age']!=="0"){
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
<div class="rezalt"><?php echo $rezalt."<br>". ' " “!|\/’”\"'?></div>
</body>
</html>