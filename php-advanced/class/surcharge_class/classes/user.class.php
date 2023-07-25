<?php

class User
{
  protected $user_name;
  protected $user_pass;

  // method overloaded
  public function __construct($n, $p)
  {
    $this->user_name = $n;
    $this->user_pass = $p;
  }

  public function getNom()
  {
    echo $this->user_name . " " . $this->user_pass . "\n";
  }
}

?>