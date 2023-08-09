<?php

$newArr = [
    "01" => 0, "02" => 0, "03" => 0, "04" => 0, "05" => 0, "06" => 0, 
    "07" => 0, "08" => 0, "09" => 0, "10" => 0, "11" => 0, "12" => 0, 
    "13" => 0, "14" => 0, "15" => 0, "16" => 0, "17" => 0, "18" => 0,
    "19" => 0, "20" => 0, "21" => 0, "22" => 0, "23" => 0, "24" => 0,
    "25" => 0, "26" => 0, "27" => 0, "28" => 0, "29" => 0, "30" => 0,
    "31" => 0
];

$datas = ['2021-01-01 00:00:00', '2021-01-02 00:00:00', '2021-01-02 00:00:00'];

foreach($datas as $key => $data)
{

	$dataFormat = date('d', strtotime($data));
	$newArr[$dataFormat]++;

	//var_dump($dataStartFormat, $dataFormat, $dataEndFormat);
}
print_r($newArr);

$dataStartFormat = date('01');
$dataEndFormat = date('t')

/*
for(  $i = 1; $i <= $dataFormat; $i++ )
{
	//echo $i;
	echo ( intval( $datas ) === $i ) 
		? ' selection' 
        : '';
    echo $i;
};
*/

/*
for ($i=0; $i <= date('d', $newArr); $i++)
{
	if ($i >= intval("31"))
	{
		echo $i;
	}
}
*/

?>