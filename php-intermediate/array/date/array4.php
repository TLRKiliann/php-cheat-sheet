<?php

// Ref: 
//https://stackoverflow.com/questions/11460517/sorting-arrays-by-months
// php official documentation: 
//strtotime() - sizeof() or count() - date("F", arg) - array_count_values()

$start_dates = [
	'2022-01-30 00:00:00', // 1
	'2022-04-10 00:00:00',
	'2022-04-15 00:00:00', '2022-04-22 00:00:00', // 3
	'2022-09-19 00:00:00', '2022-09-26 00:00:00', // 2
	'2022-11-26 00:00:00','2022-11-26 00:00:00' // 2
];

// To format date & convert to month (int).
for ($i=0; $i < count ($start_dates); $i++)
{
	$demandes = $start_dates[$i];
	$newDate = strtotime($demandes);
	$formatDate[] .= date('F', $newDate);
	$countVal = array_count_values($formatDate);
	var_dump($countVal);
}

// Convert month from EN to FR. 
foreach($countVal as $key => $value)
{
	switch($key)
	{
		case "January":
		echo "Janvier " . $value . "\n";
		break;
		case "April":
		echo "Avril " . $value . "\n";
		break;
		case "September":
		echo "Septembre " . $value . "\n";
		break;
		case "November":
		echo "Novembre " . $value . "\n";
		break;
		default:
		echo "finish";
	}
}

/*
EN
//var_dump($countVal);
array(3) {
  ["January"]=>
  int(1)
  ["April"]=>
  int(2)
  ["September"]=>
  int(2)
}

FR
//switch($key)
Janvier 1
Avril 3
Septembre 2
Novembre 2
*/

?>