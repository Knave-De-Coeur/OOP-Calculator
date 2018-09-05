<?php
/**
 * Created by PhpStorm.
 * User: alexa
 * Date: 05/09/2018
 * Time: 12:15
 */
class Calculator {
    public $calcFirstNumber;
    public $calcSecondNumber;
    public $calcOperation;

    /**
     * Calculation constructor.
     * @param $calcFirstNumber
     * @param $calcSecondNumber
     * @param $calcOperation
     */
    public function __construct($calcFirstNumber, $calcSecondNumber, $calcOperation)
    {
        $this->calcFirstNumber = $calcFirstNumber;
        $this->calcSecondNumber = $calcSecondNumber;
        $this->calcOperation = $calcOperation;
    }

    public function ActualCalculation() {
        switch ($this->calcOperation) {
            case "add":
                return $this->calcFirstNumber + $this->calcSecondNumber;
                break;
            case "subtract":
                return $this->calcFirstNumber - $this->calcSecondNumber;
                break;
            case "multiply":
                return $this->calcFirstNumber * $this->calcSecondNumber;
                break;
            case "divide":
                return $this->calcFirstNumber / $this->calcSecondNumber;
                break;
            default:
                return "Error: Missing Operation";
                break;
        }
    }
}