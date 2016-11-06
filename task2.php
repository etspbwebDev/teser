<?php

function strView($arr,$flag=false){

if($flag){
    $rezal=explode(" ",$arr);
    foreach ($rezal as $item){
        echo <<<FORMATER
<p>$item</p><br>
FORMATER;


    }
} else{
$rezal="";

}
    return $arr;

}


function fixArk ($action="", $intArr=[]){
    $msg="Вы ввели некорректный арифметический оператор";
    $rezalt=NULL;
    switch ($action){
        case("-"):foreach ($intArr as $item=>$value){

            $rezalt=$value-$value;
        }; break;
        case("+"):foreach ($intArr as $item=>$value){

            $rezalt=$value+$value;
        }; break;
        case("*"):foreach ($intArr as $item=>$value){

            $rezalt=$value*$value;
        }; break;
        case(":"):foreach ($intArr as $item=>$value){

            $rezalt=$value/$value;
        }; break;
        default:$rezalt="0<br>.$msg";
    }
    return $rezalt;
}



function withoutArg (){
$rezalt=NULL;
if(func_num_args()==1){
    $arg=func_get_args();
    if(is_string($arg[0])){
        switch ($arg[0]){
            case("-"):foreach ($arg as $item=>$value){
                if ($item>0){
                    continue;
                }
                $rezalt=$value-$value;
            }; break;
            case("+"):foreach ($arg as $item=>$value){
                if ($item>0){
                    continue;
                }
                $rezalt=$value+$value;
            }; break;
            case("*"):foreach ($arg as $item=>$value){
                if ($item>0){
                    continue;
                }
                $rezalt=$value*$value;
            }; break;
            case(":"):foreach ($arg as $item=>$value){
                if ($item>0){
                    continue;
                }
                $rezalt=$value/$value;
            }; break;
            default:$rezalt="Введите корректный арифметический оператор";
        }
    } else{
        $rezalt="Вы не передали арифметический оператор";
    }

} else{
    $rezalt= "Вы не передали не один аргумент";
}
return $rezalt;
}




  function createTable($a,$b){
      //@QU Не отримовывается таблица почему-то а ркзультат считается
      $reza11="";
      $reza12="";
      $reza13="";
      $reza14="";
if (is_int($a)&& is_int($b)) {
    $reza11= "<table><tr>";
    for ($a = 1; $a <= $a; $a++) {
        for ($b = 1; $b <= $b; $b++){
            $reza12="<td>".($a*$b)."</td>";

        }
        if ($a != $a &&$b != $b){
            $reza13= "<tr></tr>";
        }
    }
    $reza14="</tr></table>";
    $all=$reza11.$reza12.$reza13.$reza14;
    return $all;
} else{
    $all="Передайте число";
    return $all;
}

  }







function isPalindrome($w){
    trim(mb_strtolower($w));
    for($i = 0, $l = mb_strlen($w)-1, $il = ceil($l/2); $i < $il; ++$i){
        if($w[$i] != $w[$l-$i]){
            return false;
        } else{
            return true;
        }
    }



}

function showPalindrom($str){
    if (isPalindrome($str)){
        $rw="Это полиндром";
    } else{
        $rw="Это не полиндром";
    }
   return $rw;
}
function searchRx($strBad){
    // для быстроты смайл на Svg рисовал
    $pattern="[\d+]";
    $strBad=preg_match($pattern,$strBad,$out);
    if ((int)$out>="1000"){
      $msg="Сеть есть";
    }else{
       header("Content-Type:image/svg");
        $msg=file_get_contents("smile.svg");
    }
    return $msg;

}
$inputStr= "Карл у Клары украл Кораллы";
$pattern="/К/";
$replace=" ";
$inputStr=preg_replace($pattern,$replace,$inputStr);
echo $inputStr;

$inputStr= "Две бутылки лимонада";
$pattern="/Две/";
$replace="ТРИ";
$inputStr=preg_replace($pattern,$replace,$inputStr);
echo $inputStr;



echo  date("Y:m:d:H:i:s");
echo date("H:i:s","24.02.2016");
function readFile(){
    return $file=file_get_contents("text.txt");
}

function createFile(){
//@QU Функция отрабатывает но не создается файл почему-то
    $str="Hello Again";
    return file_put_contents("anothertest.txt",$str);
}
?>


<div class="View"> <?php echo  readFile();  ?></div>
<div class="View"> <?php echo  createFile();  ?></div>
<div class="View"> <?php echo  searchRx("RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.");  ?></div>