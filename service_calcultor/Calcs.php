<?php



  class Calcs extends Calc{

    private function FuncValue(){
      return $this->func;
    }

    private function sumCalc(){
      return $this->num1+$this->num2+$this->num3;
    }

    private function avgCalc(){
      return ($this->num1+$this->num2+$this->num3)/3;
    }

    private function multCalc(){
      return $this->num1*$this->num2*$this->num3;
    }

    public function calculateFunc(){
      if($this->FuncValue() == "sum")  return $this->sumCalc();
      else if($this->FuncValue() == "avg") return $this->avgCalc();
      else if($this->FuncValue() == "mult")  return $this->multCalc();

    }

  }