<?php

class Admin extends User
{
  private $ban;

  // method overloaded
  public function __construct($n, $p)
  {
    $this->user_name = $n;
    $this->user_pass = $p;
  }
  public function setBan($b)
  {
    $this->ban[] .= $b;
  }

  public function getBan()
  {
    foreach($this->ban as $value)
    {
      echo $value . " for : " . $this->user_name . "\n";
    }
  }
}

?>
