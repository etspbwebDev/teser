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



$array1=array_fill_rand(100);
$data=json_encode($array1,JSON_FORCE_OBJECT);
$array2=array_fill_rand(100);
$data2=json_encode($array2,JSON_FORCE_OBJECT);
file_put_contents("output.json",$data);
file_put_contents("output2.json",$data2);
$file1= file_get_contents("output.json");
$out1= json_decode($file1,true);
$file2= file_get_contents("output2.json");
$out2= json_decode($file2,true);
foreach ($out1 as $key=> $item){
    echo <<<FORMAT
<ul>
<li>$key<p>$item</p>
</li>
</ul>
FORMAT;

}
foreach ($out2 as $key=> $item){
    echo <<<FORMAT
<ul>
<li>$key<p>$item</p>
</li>
</ul>
FORMAT;


}*/


