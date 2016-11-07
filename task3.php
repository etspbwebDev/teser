<?php

/*function CreateOrder(){
    //загрузка xml- документа
    $xml= new  DOMDocument();
    $xml->load("Order.xml");
    // харузка xsl-документа
    $xsl= new DOMDocument();
    $xsl->load("Order.xsl");
    $prePross= new XSLTProcessor();
    $prePross->importStylesheet($xsl);

    return $prePross->transformToXml($xml);

}

CreateOrder();
*/

/*function array_fill_rand($limit, $min=false, $max=false)
{
    $limit = (int)$limit;
    $array = array();

    if ($min !== false && $max !== false)
    {
        $min = (int)$min;
        $max = (int)$max;
        for ($i=0; $i<$limit; $i++)
        {
            $array[$i] = mt_rand($min, $max);
        }
    }
    else
    {
        for ($i=0; $i<$limit; $i++)
        {
            $array[$i] = mt_rand();
        }
    }

    return $array;
}


*/
/*$array1=array_fill_rand(100);
$data=json_encode($array1,JSON_FORCE_OBJECT);
$array2=array_fill_rand(100);
$data2=json_encode($array2,JSON_FORCE_OBJECT);
file_put_contents("output.json",$data);
file_put_contents("output2.json",$data2);
$file1= file_get_contents("output.json");
$out1= json_decode($file1,true);
$file2= file_get_contents("output2.json");
$out2= json_decode($file2,true);
$arrComparable=array_diff($out1,$out2);
echo "<pre>";

print_r($arrComparable);

echo "</pre>";
*/

/*$arrayCsv=array_fill_rand(100,1,100);
$data=json_encode($arrayCsv,JSON_FORCE_OBJECT);
$fileCsv=file_put_contents("test.csv",$data);

$newDataCsv=file_get_contents("test.csv");
$outNew= json_decode($newDataCsv,true);
$rez=array_sum($outNew);

echo $rez;
*/
require_once ("_header.php");
function getCurlData($url){
$Ini_data=curl_init();
    $options=[CURLOPT_URL=>$url];
    curl_setopt_array($Ini_data,$options);
    $data=curl_exec($Ini_data);
    curl_close($Ini_data);
return $data;
}

function showInfo(){
    $rezalt=null;
    $data=getCurlData("https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");
    if ($data){
        $rezalt=json_decode($data,true);

    } else{
        $rezalt= "Нет данных";
        return $rezalt;
    }


}
var_dump(showInfo());



