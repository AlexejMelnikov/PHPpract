<?php
// числа вида a + b*i для i выполняется равенство i**2= -1
  class compNumb{
    public $a;
    public $b;
    public function __construct($a, $b){
       $this-> a = $a;
       $this-> b = $b;
       
    }
    public function print(){
      return $this->a."+".$this->b."*i";
    }
    static function summ($numb1,$numb2){
      return ($numb1->a + $numb2 -> a)." + ".($numb1-> b + $numb2 -> b)."*i";
    }
    static function min($numb1,$numb2){
      if($numb1-> b > $numb2 -> b)
        return ($numb1->a - $numb2 -> a)." + ".($numb1-> b - $numb2 -> b)."*i";
      else  
        return ($numb1->a - $numb2 -> a)." - ".abs(($numb1-> b - $numb2 -> b))."*i";
    }
    static function mult($numb1, $numb2){
      //  ($numb1->a + $numb1 ->b)*($numb2->a +$numb2 ->b);
      $aN = ($numb1->a * $numb2->a) - ($numb1->b*$numb2->b);
      $bN =  (($numb1->a * $numb2->b) + ($numb1->b*$numb2->a))."i";
      return $aN."+".$bN;
      // return (()+(*-1));
    }
    static function division($numb1, $numb2){
      //($numb1->a + $numb1->b)*(1+i)/($numb2->a + $numb2->b)*(1+i)
      $aN = ($numb1->a * 1) - $numb1->b;
      $bN =  ($numb1->b - $numb1->b)."i";
      return $aN."+".$bN;
    }

  }
    $numb = new compNumb(1,2);
    $numb1 = new compNumb(5,6);
    echo($numb->print());
    echo "<br>";
    echo($numb1->print());
    echo "<br>";
    var_dump("Сумма = ".compNumb::summ($numb, $numb1));
    echo "<br>";
    var_dump("Разность = ".compNumb::min($numb, $numb1));
    echo "<br>";
    var_dump("Произведение = ".compNumb::mult($numb, $numb1));
    echo "<br>";
    var_dump("Деление =".compNumb::division($numb, $numb1));
?>
