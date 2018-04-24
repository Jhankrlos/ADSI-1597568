<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace calculatorPHP;

/**
 * Description of calculator
 *
 * @author Jhan Carlos Lucio Rios <Jclucio8@misena.edu.co>
 */
class calculator 
{
  /** 
   *
   * Number one for the operation
   * @var float
   */
  private $number1;
  
  /** 
   *
   * Number two for the operation
   * @var float
   */
  private $number2; 
  
  
  /** 
   * Return the number 1
   * 
   * @return float
   */
  public function getNumber1(): float
  {
      return $this->number1;
  }
  /** 
   * Return the number 2
   * 
   * @return float
   */
  public function getNumber2(): float
  {
      return $this->number2;
  }

  /** 
   * Set the number 1
   * 
   * @param float $number1
   */
  public function setNumber1(float $number1)
  {
      $this->number1 = $number1;
  }

   /** 
   * Set the number 2
   * 
   * @param float $number2
   */
  public function setNumber2(float $number2) 
  {
      $this->number2 = $number2;
  }
  
  /**
   * Summation operation
   * 
   * @return float
   */
  public function sum(): float 
  {
    return $this->number1 + $this->number2;  
  }

  /**
   * Subtraction operation
   * 
   * @return float
   */
  public function rest(): float 
  {
    return $this->number1 - $this->number2;  
  }

  /**
   * Multiplication operation
   * 
   * @return float
   */
  public function mult(): float 
  {
    return $this->number1 * $this->number2;  
  }
  
  /**
   * Splitting operation
   * 
   * @return float
   */
  public function div(): float 
  {
      if ($this->number2 !=0) {   
      return $this->number1 / $this->number2;}
      else {
          throw new \Exception('Error: the division between zero is mathematically impossible', 404);
      }  
  }
  
  /**
   * Operation Division Module
   * 
   * @return float
   */
  public function mod(): float
  {
    return $this->number1 % $this->number2;  
  }
  
  /**
   * Logarithm operation
   * 
   * @return float
   */
  public function loga(): float
  {
    return log($this->number1, $this->number2);
  }
  
  /**
   * X² operation
   * 
   * @return float
   */
  public function pow(): float
  {
    return pow($this->number1, $this->number2);  
  }

  /**
   * Square root operation
   * 
   * @return float
   */
  public function square(): float
  {
    return sqrt($this->number1);  
  } 

  /**
   * Root of x between y operation
   * 
   * @return float
   */
  public function squarex(): float
  {
    return pow($this->number2, sqrt($this->number1));  
  }  
}


