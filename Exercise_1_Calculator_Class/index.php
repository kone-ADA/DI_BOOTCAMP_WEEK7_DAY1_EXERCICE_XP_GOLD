<?php

class MyCalculator
{
    public $numb1;
    public $numb2;

    public function add($numb1, $numb2)
    {
        echo $numb1+$numb2 .'<br>';
    }

      public function multiply($numb1, $numb2)
      {
          echo $numb1-$numb2 .'<br>';
      }

      public function subtract($numb1, $numb2)
      {
          echo $numb1*$numb2 .'<br>';
      }
}
$mycalc=new MyCalculator();
$mycalc->add(10, 4);
$mycalc->multiply(3, 21);
$mycalc->subtract(13, 4);

?>
</body>