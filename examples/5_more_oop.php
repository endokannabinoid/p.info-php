<?php

include '4_oop.php';
include_once '2_hello_world.php';
include '2_hello_world.php'; // fatal error

$show1 = new Methods();
echo $show1;  // null

$show2 = new Methods('bla');
echo $show2;  // 'bla'

$show1->a = 1;      // $show1->$data[a] = 1
isset($show1->a);   // return true
unset($show1->a);
empty($show1->a);   // return true


class NewMethods extends Methods
{
  final public function Bla()
  {
    parent::Bla();
    //more code 
  }
}


class MoreNewMethods extends Methods
{
  protected $kanarek;
  
  function __construct($kanarek) {
    parent::__construct();
    $this->kanarek = $kanarek;
  }
  
  public function Bla() // Fatal error: Cannot override final method NewMethods::Bla()
  {
    
  }
  
  public function Bar()
  {
    $this->Foo();
  }
  
  protected function Foo() // this is callable only inside this class
  {
    if( ini_get('safe_mode') ){
      throw new Exception('I can not eat $this->$kanarek');
    }else{
      
      return eat($this->kanarek);
    }
  }
}

$stuff = new MoreNewMethods();

try {
  $stuff->Bar();
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}


try {
  exec('ls -a');
} catch (Exception $e) {
  echo 'Caught exception: ',  $e->getMessage(), "\n";
}



