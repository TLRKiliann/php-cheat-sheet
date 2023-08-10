<?php

// with simple values

class MyClass
{
	//we add (_) for a private property.
	private $_name;
	private $_age;

	// pass value requiered !!!
	public function setterFunc($_name, $_age)
	{
		// instantiate to private
		$this->_name = $_name;
		$this->_age = $_age;
	}
	public function getterFunc()
	{
		return "Name : " . $this->_name . "\nAge : " . $this->_age;
	}
}

$callerClass = new MyClass;
$callerClass->setterFunc("John Doe", 22);
echo $callerClass->getterFunc();
echo "\n";

?>

<?php

// with array

class MySetGet
{
    private $_values = [];

    public function setItem($_values)
    {
        $this->_values = $_values;	
    }

    public function getItem()
    {
    	return $this->_values;
    }
}

$myClass = new MySetGet;
$myClass->setItem(["Nico"=>33]);
print_r($myClass->getItem());
/*
Array
(
    [Nico] => 33
)
*/
?>