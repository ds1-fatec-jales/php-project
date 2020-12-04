<?php
class MyCalculator {
private $_firstval, $_secondval;
public function __construct( $firstval, $secondval ) {
$this->_firstval = $firstval;
$this->_secondval = $secondval;
}
public function add() {
return $this->_firstval + $this->_secondval;
}
public function subtract() {
return $this->_firstval - $this->_secondval;
}
public function multiply() {
return $this->_firstval * $this->_secondval;
}
public function divide() {
return $this->_firstval / $this->_secondval;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add()."\n";  
echo $mycalc-> multiply()."\n";
echo $mycalc-> subtract()."\n";
echo $mycalc-> divide()."\n"; 

?>

