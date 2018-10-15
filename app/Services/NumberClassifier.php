<?php

namespace App\Services;

use Exception;

class NumberClassifier
{
    protected $number;

    /**
     * @param int
     */
    public function __construct(int $number)
    {
        $this->setNumber($number);
    }

    /**
     * Classify the number
     * 
     * @return string
     */
    public function getClassification()
    {
        $sum = 0;
        for ($c = 1; $c < $this->number; $c++) {
            $sum += ($this->number % $c == 0) ? $c : 0;
        }

        if ($sum == $this->number) {
            return 'perfect';
        } elseif ($sum < $this->number) {
            return 'deficient';
        }

        return 'abundant';
    }

    /**
     * Number setter
     * 
     * @param $number
     * @return self
     */
    protected function setNumber($number)
    {
        if ($number <= 0) {
            throw new Exception('The parameter must be greater than 0');
        }

        $this->number = (int) $number;

        return $this;
    }

    /**
     * Number geter
     * 
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }
}