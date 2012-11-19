<?php

class Foo
{
  function foo()
  {
    echo 'foo';
  }
}

$bar = new Foo;
$bar->foo(); // echo 'foo'

//Object Inheritance

class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj = new MyClass();
echo $obj->public; // Works
echo $obj->protected; // Fatal Error
echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private


class MyClass2 extends MyClass
{
    // We can redeclare the public and protected method, but not private
    protected $protected = 'Protected2';

    function printHello()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

$obj2 = new MyClass2();
echo $obj2->public; // Works
echo $obj2->private; // Undefined
echo $obj2->protected; // Fatal Error
$obj2->printHello(); // Shows Public, Protected2, Undefined


class FooFoo extends Foo
{
  function bla()
  {
    echo 'bla';
  }
}

$bar = new FooFoo;
$bar->foo(); // echo 'foo'
$bar->bla(); // echo 'bla'



//Magic Methods

class Methods
{
  protected $foo;
  private $data = array();
  
  function __construct($foo = null)
  {
    $this->foo = $foo;
  }
  
  function __destruct() 
  {
    echo $foo;
  }
  
  public function __set($name, $var)
  {
    $this->$data[$name] = $var;
  }
  
  public function __get($name)
  {
     return $this->$data[$name];
  }
  
  public function __isset($name)
  {
      return isset($this->data[$name]);
  }

  public function __unset($name)
  {
      unset($this->data[$name]);
  }
  
  public function __toString()
  {
      return $this->foo;
  }
  
  public function Bla()
  {
    // blablabla 
  }
  
}



