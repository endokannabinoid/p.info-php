<?php
  
  //hot or not?
  $hot = true;
  
  // variables
  
  $variable = 'some $string';
  $variable = "another $string";
  
  echo $variable[3]; //String is array of chars
  
  $variable = 1213;
  $variable = 34.231;
  $variable = (string)34.231; //it's string now
  
  // arrays:
  $array = array('string', 4);
  echo $array[0];
  echo $array[1];
  echo $array[2];

  
  $array = array(
    'bla' => 'blablabla',
    'blabla' => 'WTF?'
  );
  echo $array['bla'];
  
  // in php 5.4 also:
  $array = [
      "foo" => "bar",
      "bar" => "foo",
  ];
  
  // SUPERGLOBALS:
  echo $_COOKIE['variable'];
  echo $_ENV['variable'];
  echo $_FILES['variable'];
  echo $_GET['variable'];
  echo $_POST['variable'];
  echo $_REQUEST['variable'];
  echo $_SERVER['variable'];
  echo $_SESSION['variable'];
  
  // Operators
  
  $x = $x + $x;   $x += $y;
  $x = $x - $x;   $x -= $y;
  $x = $x * $x;   $x *= $y;
  $x = $x / $x;   $x /= $y;
    
  //modulo
  $x = $y % $z;   $x %= $y;
    
  //negation
  $x =  -$y; 
  
  // concatenation
  $x = $y . $z;   $x .= $y;
  
  // incrementing / decrementing
  ++$x;
  $x++;
  --$x;
  $x--;
  
  // comparison
  $x == $y;
  $x === $y;
  $x != $y;
  $x <> $y;
  $x !== $y;
  
  $x < $y;
  $x > $y;
  $x <= $y;
  $x >= $y;
  
  
  // logical
  $x and $y;    $x && $y;
  $x or $y;     $x || $y;
  !$x //not
  
  // array operators
  $x + $y;
  $x == $y
  $x === $y;
  $x != $y;
  $x <> $y;
  $x !== $y;
  
  // statements:
  if('bla')
  {
    //bla
  } 
  elseif('blablabla')
  {
    // blablabla
  }
  else if ( 'WTF?')
  {
    // WTF?
  } 
  else
  {
    // Kotlet z kanarka
  }
            // if($statement) 'bla' else 'WTF?'
  $variable =  $statement ? 'bla' : 'WTF?';
  
  switch ($n)
  {
  case 'label1':
    // code to be executed if $n==label1;
    break;
  case 'label2':
    // code to be executed if $n=='label2';
    break;
  default:
    //code to be executed if $n is different from both 'label1' and 'label2';
  }
  
  // loops
  
  while ($condition)
  {
    //code to be executed;
  }
  
  do
  {
    // code to be executed;
  }
  while ($condition);
  
  for ($init; $condition; $increment)
  {
    // code to be executed;
  }
  
  foreach ($kanarek as $kotlet)
  {
    eat($kotlet);
  }
  
  // functions
  function functionName()
  {
    // code to be executed;
  }
  
  function eat($kotlet)
  {
    $kotlet = false;
  }
  
  function do_kotlet($kanarek)
  {
    // code to be executed;
    return $kotlet;
  }
  
  
  
  