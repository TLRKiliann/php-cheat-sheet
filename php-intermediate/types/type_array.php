<?php

declare(strict_types=1);

// if method returns a string
function first(string $word): string {
  return $word . "\n";
}

// cannot define the real type of the item in array.
// for that, we type as below :
function second(array $customers): void {
  //destructuring array method
  foreach($customers as $customer)
  {
    // recommanded !
    typerArray($customer);
  }
}
// int or number are equal to type number.
// method use void if nothing will be return.
function typerArray(int $customer): void
{
  echo $customer . "\n";
}

//Don't need to type below !

// send a string
echo first("Harvey");

// send an array
echo second([1,2,3]);
//var_dump(second([1,2,3]));

?>