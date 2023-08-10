<?php

function callNbOfMonth()
{
	$arrayMonth = [
		'2022-01-30 00:00:00', // 1
		'2022-04-10 00:00:00',
		'2022-04-15 00:00:00', '2022-04-22 00:00:00', // 3
		'2022-09-19 00:00:00', '2022-09-26 00:00:00', // 2
		'2022-11-26 00:00:00','2022-11-26 00:00:00' // 2
	];

	$arrayNbOfDate = [
		"January" => 0, "February" => 0, 
		"March" => 0, "April" => 0, 
		"Mai" => 0, "June" => 0, 
		"July" => 0, "August"=> 0, 
		"September" => 0, "October" => 0, 
		"November" => 0, "December" => 0
	];

	foreach($arrayMonth as $key => $month)
	{
		$formatStr = strtotime($month);
		$formatDate = date('F', $formatStr);
		$arrayNbOfDate[$formatDate]++; // power of php !!!
	}
	print_r($arrayNbOfDate);

}
callNbOfMonth();

?>