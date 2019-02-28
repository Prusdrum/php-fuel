<?php
namespace Fuel\Model;

class GasStation {
  private $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function getName(): string {
    return $this->name;
  }
}